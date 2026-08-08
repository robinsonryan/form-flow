# Changelog

All notable changes to `robinsonryan/form-flow` are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

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
