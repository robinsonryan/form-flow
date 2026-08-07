# Implementation Queue

> Deferred work, captured mid-session, picked up deliberately. Managed by `/queue`;
> convention: `$CLAUDE_HARNESS_DIR/notes/implementation-queue.md`. Hand-editing is fine.

## Queued

### Support Pest 5 / PHPUnit 13 / PHP 8.4+ in the constraint matrix
- **Added**: 2026-08-07 · harness health & efficiency session — apps are queued to upgrade to Pest 5 for Tia; consuming apps can't move until this package allows it
- **Tier**: SOLO
- **Why deferred**: harness-wide decision made first; per-package constraint widening is independent work
- **Context**: current: php ^8.3, pest ^4.0. Widen composer constraints to include pest ^5 / phpunit ^13 / php 8.4+ and run the suite on the new matrix. Research + decisions: $CLAUDE_HARNESS_DIR/notes/harness-health-research-2026-08.md

### Re-evaluate dropping the Laravel-specific Rector sets
- **Added**: 2026-08-07 · Track P / P3 package quality baseline
- **Tier**: SOLO
- **Why deferred**: `rector.php` was replaced with the canonical package config
  (hey-you's), which carries only the generic sets. That dropped
  `driftingly/rector-laravel` and its `LaravelSetList::LARAVEL_130` /
  `LARAVEL_CODE_QUALITY` sets. Adding them back to one package would diverge from
  the shared reference config, which is a harness-level decision, not a per-package
  one.
- **Context**: the Laravel sets found nothing beyond the generic sets on this
  package's 6-file backlog, so nothing measurable was lost today. The real question
  is whether the canonical `rector.php` for *all* packages should include
  `driftingly/rector-laravel`. Raise it against the baseline spec at
  `$CLAUDE_HARNESS_DIR/notes/package-quality-baseline-spec.md`, not here.

## Blocked

## Archive
