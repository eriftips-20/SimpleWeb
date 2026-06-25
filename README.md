# PHP Calculator with CI

A simple PHP calculator application with automated testing and CI/CD pipeline.

## Team Workflow

- **main** branch: Production-ready code
- **develop** branch: Integration branch for features
- **feature/** branches: Individual features

## Getting Started

1. Clone the repository
2. Run `composer install` to install dependencies
3. Run `php -S localhost:8000 -t public` to start the web server
4. Run `vendor/bin/phpunit` to run tests

## CI Pipeline

This project uses GitHub Actions for CI, which automatically:
- Runs tests on every push to main and pull requests
- Checks code style
- Prevents merging if tests fail
