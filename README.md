# SEO Middleware

This package contains various middleware classes that can be uses with Laravel
5.1 and above to easily add various SEO benefits to your site / web application.

Any of these middleware classes can be used globally, by adding them to
the `$middleware` array in `apps/Http/Kernel.php` file. They can also be used
on a per route basis, by adding them to the `$routeMiddleware` array in the
same file and then associated them with a route in your `apps/Http/routes.php`
file.

## HttpsOnly Middleware

The `HttpsOnly` middleware will redirect any HTTP request to their HTTPS
equivalents. The security of websites is becoming an ever increasing ranking
signal for search engine rankings.

The HTTP to HTTPS redirect will only take place if the application environment
is set to `prod` (production). This can be set in your project's `.env` file,
as shown in the example extracts below.

### Local development (redirect disabled)

```
APP_ENV=local
```

### Production use (redirect enabled)

```
APP_ENV=prod
```

## RemoveWww Middleware

The `RemoveWww` middleware will check for `www.` within the URL of any requests
made to your web application and then redirect them to a version of the URL
without the `www.` removed. This can be beneficial for SEO purposes by the
potential for similar URLs to be indexed with the same content.

This redirect will occur regardless of the application environment (`APP_ENV`)
setting.
