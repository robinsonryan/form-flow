# FormFlow

Multi-step form flows for multi-tenant Laravel apps. A flow defines an ordered
set of steps once; each tenant can slot its own extra steps into named insertion
points, and every step declares which actor (customer or applicant) may see it,
so one flow definition serves several audiences and several tenants.

Composer name: `robinsonryan/form-flow` — a **library**, not an application.

## Conventions

@import ./constitution.md
@import ./imports/package-conventions.md
@import ./imports/package-quality-gate.md
@import ./imports/testing-conventions.md
@import ./imports/php-conventions.md
@import ./imports/git-conventions.md

> Linking the `laravel-package` stack also drops the inherited Laravel app
> conventions into `.claude/imports/` — `authorization-conventions.md`,
> `frontend-conventions.md`, `pwa-conventions.md`, `ddev-worktrees.md`. They are
> **deliberately not imported above**: they describe Inertia `can` maps, app-shaped
> Vite wiring, and nested app worktrees, none of which exist in a package. Read
> them if a question genuinely calls for one; do not load them by default.
>
> This package has **no frontend half** — no JS, no build step, no assets. Do not
> import `frontend-conventions.md` here.

> `.claude/` is a set of **harness symlinks** and is gitignored — a fresh clone has
> none of them and the `@import`s above resolve to nothing. If a convention file is
> missing, restore the link rather than guessing:
> `~/workspace/harness/link.sh project laravel-package $(pwd)`

## What this package actually is

### The domain model

Six tables, all owned by this package, all UUID-keyed, all soft-deleted except
`flow_slots`:

| Table | Model | Role |
|---|---|---|
| `flows` | `Flow` | The flow definition. Unique `key`, an `OwnerScope` (`global` or `tenant`), a `FlowStatus` (`draft`/`active`/`archived`). |
| `flow_steps` | `FlowStep` | Steps baked into the flow itself. Ordered by `position`. |
| `flow_slots` | `FlowSlot` | Named insertion points in the flow's ordering — the extension seams a tenant may fill. Ordered by `position`. |
| `form_templates` | `FormTemplate` | One tenant's customization of one flow, scoped by `account_id`. |
| `form_template_steps` | `FormTemplateStep` | The tenant's own steps, each attached to a `flow_slot_id` and ordered by `position_in_slot`. |
| `flow_responses` | `FlowResponse` | One in-flight or finished run of a flow. Holds all answers and progress as JSON. |

There is no `account`/`user` model here — tenancy is a bare `account_id` UUID
column the host app supplies, and actors are bare id strings plus an `ActorType`.
The package never joins to host tables. `FlowResponse` does have a polymorphic
`subject` (`nullableUuidMorphs`) if the host wants to hang a run off one of its
own records.

### Step resolution — the central idea

`StepResolver::resolveSteps()` merges the flow's own steps with the tenant
template's steps into one ordered list. It walks `flow_steps` by `position`, and
before emitting a step at position *N* it drains every `flow_slot` whose position
is `< N`, pushing that slot's `form_template_steps` in `position_in_slot` order;
leftover slots flush at the end. Both kinds collapse into a single
`ResolvedStep` DTO carrying a `source` of `'flow'` or `'template'`.

**Everything downstream consumes `ResolvedStep`, never the models.** Validation,
actor filtering, next-step and progress all take the resolved list. If you add a
step attribute, it must be threaded through both `ResolvedStep::fromFlowStep()`
and `::fromTemplateStep()` or it silently vanishes for one of the two sources.

### Visibility

`VisibilityMode` is `always` / `customer_only` / `applicant_only` / `conditional`.
Filtering happens in `StepResolver::resolveStepsForActor()` against a
`StepFilterContext` (an `ActorType` plus a free-form `contextData` bag).
`conditional` evaluates `visibility_conditions` — a list of
`{field, operator, value}` maps against `contextData`, with operators `equals`,
`not_equals`, `in`, `not_in`, `exists`, `not_exists`, `greater_than`,
`less_than`. **Unknown operators and missing `field` both return `true`** — the
evaluator fails open, so a typo in a condition shows the step rather than hiding
it.

Note `VisibilityMode::isVisibleFor()` on the enum (used by the models'
`isVisibleFor()`) treats `conditional` as always visible. Only the resolver
actually evaluates conditions. Do not reach for the model helper when you mean
real filtering.

### Response lifecycle

`ResponseStatus` is a real state machine — `canTransitionTo()` on the enum is the
only authority, and every mutator on `FlowResponse` (`handOffToApplicant`,
`resumeByApplicant`, `complete`, `cancel`, `expire`) checks it and returns
`false` rather than throwing. Terminal states (`completed`, `expired`,
`cancelled`) permit no transition out. Callers must check the boolean; nothing
raises.

The customer-starts / applicant-finishes handoff is the reason the package
exists: `FlowManager::handOff()` flips the status to `awaiting_applicant`,
`resume()` flips it back to `in_progress`.

## Public API surface

Consumers touch three things. Everything else is internal.

1. **The `FormFlow` facade** (`RobinsonRyan\FormFlow\Facades\FormFlow`) — proxies
   `FlowManagerInterface`. Its `@method` docblock is the practical API listing.
2. **`FlowManagerInterface`** — `getFlow`, `getTemplate`, `getSteps`,
   `getStepsForActor`, `startFlow`, `validateStep`, `submitStep`, `handOff`,
   `resume`, `complete`, `cancel`. Bound as a singleton; resolve the interface,
   not `FlowManager`.
   `FlowManager` additionally exposes `areAllStepsCompleted`, `getNextStep` and
   `getProgress`, which are on the facade but **not on the interface** — a
   consumer type-hinting the interface cannot reach them. Extend the interface
   if you need them contractually.
3. **The models and enums**, for querying and seeding flow definitions. The
   package ships no admin UI, no routes, no controllers, no commands, no events
   and no jobs — authoring flows is the host app's job.

`StepResolverInterface` and `StepValidatorInterface` are both singleton-bound and
swappable, which is the intended extension point for custom resolution or
validation.

### Service provider

`FormFlowServiceProvider` is `final`. It merges `config/form-flow.php`, binds the
three interfaces, aliases `FlowManagerInterface` as `'form-flow'`, loads the
package migrations unconditionally via `loadMigrationsFrom()`, and publishes
under the tags `form-flow-config` and `form-flow-migrations`. Auto-discovered via
`extra.laravel.providers`.

## Gotchas

**Validation lives in two places and they disagree.** The live path is
`HybridStepValidator` — Laravel rules first, then Opis JSON Schema only if the
Laravel pass succeeded and `validationSchema` is non-empty. It builds its rules
from `ResolvedStep` in its own private `buildFieldRules()`. But `FlowStep` and
`FormTemplateStep` each carry a near-identical copy of that builder as
`getLaravelValidationRules()`, and those two copies are **called only by tests**
— nothing in the runtime path uses them. The three have already drifted: the
models map an `ssn` field to `string|size:9`, the validator maps it to plain
`string`. Change the validator when you mean to change behavior, and expect the
model copies to need the same edit or deletion.

Also note the merge semantics differ: the models `array_merge` a step's
`validation_rules` wholesale, while the validator splits pipe-delimited strings
into arrays first.

**Table names are configurable, so never hardcode one.** Every model overrides
`getTable()` from `config('form-flow.tables.*')` and every migration reads the
same config, including its foreign key targets. A raw query with a literal
`'flows'` in it is a bug waiting for the first consumer that renames.

**`handOff()` writes into the answers blob.** The applicant email and timestamp
go into `responses['_handoff']` — the same JSON column as step answers. A step
keyed `_handoff` would collide. The package sends no mail; storing the address is
all it does.

**The database assigns every primary key, and it must be PostgreSQL 18+.** Each
table declares `id` with a `DB::raw('uuidv7()')` column default, so Postgres
generates the UUID7 during INSERT. There is no PHP fallback and no config switch
— `ConfiguresIdentifiers` only sets `$incrementing = true` and
`$keyType = 'string'`. `$incrementing = true` reads like a mistake on a UUID
column but is load-bearing: in Eloquent it means "the database assigns the key",
which routes the insert through `insertGetId()` and compiles the `returning "id"`
clause that hydrates the generated UUID back onto the model. Drop it and every
`create()` returns a model with a null key.

Consequences worth knowing: the package will not install against MySQL, MariaDB
or SQLite, and any host code that needs an id *before* the row is written must
generate its own `Str::uuid7()` and pass it in explicitly.

**Foreign keys cascade on hard delete only.** The child tables use
`cascadeOnDelete()`, but five of the six models use `SoftDeletes` — so
`$flow->delete()` soft-deletes the flow and leaves its steps, slots, templates
and responses untouched and still visible to their own queries.

**Tests run against real Postgres, so DDEV must be up.** `tests/TestCase.php`
points `database.default` at the DDEV `db` service (Postgres 18) and a `testing`
database that a `post-start` hook in `.ddev/config.yaml` creates. There is no
SQLite fallback — the schema needs `uuidv7()`. Running `pest` outside the
container, or against a stopped DDEV, fails at connection rather than skipping.
Host, port, database, username and password are each overridable via
`FORM_FLOW_TEST_DB_*` environment variables.

**Fixtures must use real UUIDs for host-supplied ids.** `account_id`,
`initiated_by`, `completed_by` and `subject_id` are `uuid` columns. SQLite once
accepted readable placeholders like `'account-123'`; Postgres rejects them with
`SQLSTATE[22P02]`. Use the `fixtureUuid()` helper in `tests/Pest.php`.

## Version constraints and tooling

**This package tracks `composer.lock` in git** — unlike most of its siblings,
which ignore it. Any dependency change therefore produces a real, reviewable diff,
and `ddev composer update` must be committed alongside the `composer.json` edit
that caused it. A `composer.json` change with no lock change in the same commit
means the lock was not refreshed.

Supported matrix: PHP `^8.2`, Laravel `^12.0 || ^13.0`. Laravel 11 was dropped —
it could never resolve, because Pest 4 needs PHPUnit 12 while Testbench 9 (the
only source of Laravel 11) caps at PHPUnit 11. `orchestra/testbench` is
`^10.0 || ^11.0` for the same reason. Note this package writes its `||`
separators **spaced** (`^12.0 || ^13.0`); siblings use the unspaced form. Match
the local style.

**The PHP floor is asserted in three files and they must move together:**
`composer.json` `require.php`, `phpstan.neon` `phpVersion: 80200`, and
`rector.php` `LevelSetList::UP_TO_PHP_82`. They were once out of step — Rector
targeting 8.3 while the analyser enforced 8.2, so the refactorer generated syntax
the analyser rejected. They agree today; raising the floor means editing all
three in one commit.

PHPStan runs at **level 8 over `src` only** (tests are not analysed) and does
analyse `FormFlowServiceProvider`, which was excluded in the past. Rector
processes `src` **and** `tests`, so a Rector fix can touch test files PHPStan
never sees.

Models are documented with `@property` docblocks rather than generated IDE
helpers — level 8 depends on them, so a new column needs its docblock line or
analysis fails.

`tests/Unit/ArchitectureTest.php` enforces four invariants: strict types
everywhere under the root namespace, `Models\*` extend Eloquent `Model`,
`Enums\*` are backed enums, `Data\*` extend Spatie `Data`. Put a new class in the
matching namespace or the arch test fails before your feature test runs.

## The gate

`ddev composer quality` — `lint:check` → `analyze` → `refactor:check` → `test`.
Verify-only: it never rewrites files. Fix with `ddev composer lint` /
`ddev composer refactor` and re-stage.

`.githooks/pre-commit` runs **the whole gate, tests included** — packages are
small enough (~10 s measured here) that the apps' exclude-the-tests compromise
does not apply. It is path-aware, so a docs-only commit skips it. Never bypass
with `--no-verify`; `PACKAGE_SKIP_GATE=1` is a human emergency valve and **agents
must never set it**.

That hook file is a **copy** of the harness's canonical one. Do not edit it here
— edit `$CLAUDE_HARNESS_DIR/core/stacks/laravel-package/hooks/pre-commit` and
re-run that directory's `install.sh`.

`harness package-check` sweeps every first-party package: the gate, a
`--prefer-lowest` run proving the declared version floor really resolves,
outdated and vulnerability scans, and in-constraint updates behind a re-run of
the gate. It never tags a release. Run it before any app re-resolves its
packages.

Full definition: `imports/package-quality-gate.md`. Skill: `/package-quality`.

## Testing

Pest + Orchestra Testbench, against the DDEV Postgres 18 `db` service — the
stack default, and non-negotiable here because the schema uses `uuidv7()` column
defaults that SQLite cannot express. DDEV must be running.

```bash
ddev composer test
ddev exec vendor/bin/pest --filter=SomeTest
```

69 tests at last count. There is no `ddev artisan` and no `ddev pest` here —
those are app commands. There are no model factories; tests build rows with
`Model::create()` directly.

## Releases

**Tag it yourself when it is releasable.** Cut the tag once the full gate is green
on the merge commit, `CHANGELOG.md` names anything breaking in plain language, and
the version follows caret-on-zero semver — on `0.x` a change that could break a
consumer takes the minor, a fix takes the patch. Annotate it and push it with the
merge. Stop and ask only when the gate is red, review findings are open, or the
version choice is genuinely contested. Rule and reasoning: the laravel-package
constitution §4. (Ruled 2026-08-18, replacing "Ryan cuts every tag".)

Behavior changes land in `CHANGELOG.md` in the commit that makes them.

Deferred work is in `QUEUE.md` — currently the Pest 5 / PHPUnit 13 constraint
widening and a question about the Laravel-specific Rector sets.

## Reference package

`~/dev/php/packages/robinsonryan/hey-you/` is the reference implementation —
service provider shape, Testbench setup, tool configs, table prefixing. Read it
before inventing a variant.

## Quick reference

- **DDEV**: `ddev start`, `ddev ssh`
- **Gate**: `ddev composer quality`
- **Tests**: `ddev composer test`
- **Style fix**: `ddev composer lint`
- **Rector fix**: `ddev composer refactor`
