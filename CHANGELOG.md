# Changelog

All notable changes to `robinsonryan/form-flow` are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed

- **PostgreSQL 18+ is now required — BREAKING for any consumer on MySQL, MariaDB
  or SQLite.** Every table's `id` column is declared with a native `uuidv7()`
  default, so the database generates each primary key on insert. The package was
  developed and tested against MariaDB while advertising a Postgres option, which
  meant the Postgres path shipped unexercised; this settles on one engine and
  brings the package in line with the UUID7 primary key convention used across
  the stack.
- **Removed the `form-flow.database.native_uuids` config option — BREAKING if you
  set it.** It selected between Laravel generating a UUID**4** in PHP (the
  default) and a Postgres-only `gen_random_uuid()` column default, also a UUID4.
  Neither branch produced the UUID7 the convention calls for, and the PHP branch
  was the only one with test coverage. Both are gone; the `uuidv7()` default is
  unconditional. Delete the key from any published config file — a stale
  `native_uuids` entry is now silently ignored.
- **Renamed the `HasConfigurableUuid` trait to `ConfiguresIdentifiers` —
  BREAKING if you used it on your own models.** With the config switch gone there
  is nothing configurable left; the trait no longer boots a `creating` hook and
  only declares `$incrementing = true` and `$keyType = 'string'`, which is what
  makes Eloquent read the database-generated key back off the INSERT's
  `returning "id"` clause.

### Fixed

- Model primary keys are now UUID**7** rather than UUID4, so rows sort in
  creation order and index locality improves on wide tables.

### Testing

- The Pest suite runs against the DDEV Postgres 18 service instead of in-memory
  SQLite, closing a gap where `uuidv7()` defaults, `timestampsTz`/`softDeletesTz`
  columns and JSON behavior were never exercised against the real engine. The
  DDEV `post-start` hook creates the `testing` database; `FORM_FLOW_TEST_DB_*`
  environment variables override the connection.
- Test fixtures use real UUIDs for `account_id` and actor ids, which are `uuid`
  columns that SQLite tolerated placeholder strings in and Postgres does not.
- The primary key test now asserts the UUID version and variant nibbles instead
  of only a 36-character length, which a UUID4 also satisfied.

## [0.2.0] - 2026-08-08

### Changed

- **Dropped Laravel 11 support — BREAKING for any consumer pinned to Laravel 11.**
  `illuminate/*` narrows from `^11.0 || ^12.0 || ^13.0` to `^12.0 || ^13.0`, and
  `orchestra/testbench` from `^9.0 || ^10.0 || ^11.0` to `^10.0 || ^11.0`
  (Testbench 9 *is* Laravel 11, so leaving it declared a harness that can no
  longer resolve). Laravel 11 was advertised but structurally untestable: the
  package requires `pestphp/pest ^4.0`, Pest 4 requires PHPUnit 12, and Testbench
  9 caps at PHPUnit 11 — so a Laravel 11 matrix could never install, and no
  consumer on Laravel 11 was ever verified. This removes a compatibility promise
  nobody could keep rather than removing working support.
- **Lowered the PHP floor from `^8.3` to `^8.2`.** This is a widening — every
  constraint that resolved before still resolves. It follows harness decision
  D-C: a library's floor is a compatibility promise, not a statement of what it
  is developed on. Enforced by `phpVersion: 80200` in `phpstan.neon`, so 8.3-only
  syntax now fails analysis rather than passing silently on the 8.4 dev container.
- `FlowManager`, `HybridStepValidator` and `OpisJsonSchemaValidator` are now
  `final readonly` classes. All three were already `final` with `private`
  constructor-assigned state, so no supported consumer usage changes — subclassing
  and property mutation were both already impossible.
- Adopted the canonical package quality gate: `composer quality` now runs
  `lint:check` → `analyze` → `refactor:check` → `test`. Rector was previously
  configured but never gated. Script names were renamed to the harness-canonical
  set (`check` → `quality`, `analyse` → `analyze`, `rector:dry` → `refactor:check`).
- PHPStan now analyses `FormFlowServiceProvider`, which was previously excluded.
  It is clean at level 8.

### Removed

- `driftingly/rector-laravel` dev dependency, along with the `LaravelSetList` sets
  it provided. `rector.php` now matches the canonical package config.
