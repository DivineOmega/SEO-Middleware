# SEO Middleware

This package contains various middleware classes that can be uses with Laravel
5.1 and above to easily add various SEO benefits to your site / web application.

## Features

* Redirecting production HTTP requests to HTTPS
* Removal of `www.` from requests and redirecting
* Middleware classes can be applied global or to specific routes

## Quick Start

1. Add `"divineomega/seo-middleware": "dev-master"` to the `require` section of your `composer.json` file.
2. Run `composer update divineomega/seo-middleware` (or just `composer update`).
3. In the `$middleware` array in your `app/Http/Kernel.php` file:
  * For HTTP to HTTPS redirects, add `\DivineOmega\SeoMiddleware\Http\Middleware\HttpsOnly::class`.
  * For removal of `www.` from requests, add `\DivineOmega\SeoMiddleware\Http\Middleware\RemoveWww::class`.
4. Remember to set the `APP_ENV` variable to `prod` (in the project's `.env` file) when the application is running in production. Some middleware will only function when this is set to allow for easier local development.

## Available Middleware Classes

Any of these middleware classes can be used globally, by adding them to
the `$middleware` array in `apps/Http/Kernel.php` file. They can also be used
on a per route basis, by adding them to the `$routeMiddleware` array in the
same file and then associated them with a route in your `apps/Http/routes.php`
file.

### HttpsOnly Middleware

The `HttpsOnly` middleware will redirect any HTTP request to their HTTPS
equivalents. The security of websites is becoming an ever increasing ranking
signal for search engine rankings.

The HTTP to HTTPS redirect will only take place if the application environment
is set to `prod` (production), to aid with local development environments in
the setup of HTTPS can be difficult and in many cases unnecessary. Changing
this setting can be set in your project's `.env` file, as shown in the example
extracts below.

```
APP_ENV=local # Local development (redirect disabled)
```

```
APP_ENV=prod  # Production use (redirect enabled)
```

### RemoveWww Middleware

The `RemoveWww` middleware will check for `www.` within the URL of any requests
made to your web application and then redirect them to a version of the URL
without the `www.` removed. This can be beneficial for SEO purposes by the
potential for similar URLs to be indexed with the same content.

This redirect will occur regardless of the application environment (`APP_ENV`)
setting.
