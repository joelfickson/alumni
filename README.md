# Alumni

A small project to reconnect with people you used to know: find old colleagues and classmates from the schools you went to.

This started as an attempt to learn Laravel, partly because [Noble](https://x.com/noblehara/status/2068178409973330078?s=20) keeps haunting me about it. 😂

## The idea

A simple app that helps you find your old colleagues from the schools you attended. The authentication, settings, and dashboard scaffolding are in place; the alumni-matching features are next.

## Tech stack

- **Laravel 13** (PHP 8.3+)
- **Inertia v3** with **React 19** and **TypeScript**
- **Tailwind CSS v4** with Radix UI components
- **Laravel Fortify** for authentication, with passkeys and two-factor support
- **Vite** for asset bundling
- **SQLite** by default (configurable)
- **PHPUnit** for tests, **Pint** for formatting, **Larastan** for static analysis

## Getting started

Requires PHP 8.3+, Composer, and Node.

```bash
composer setup
```

This installs dependencies, copies `.env`, generates an app key, runs migrations, and builds the frontend.

## Development

Run the full development stack (server, queue, logs, and Vite) with one command:

```bash
composer dev
```

The app will be available at http://localhost:8000.

## Testing and quality

```bash
composer test          # lint check, static analysis, and the test suite
vendor/bin/pint        # format PHP
npm run lint           # lint the frontend
npm run types:check    # type-check TypeScript
```
