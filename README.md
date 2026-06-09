# Zuzie Mind Wellness

Laravel + Blade + Tailwind CSS project for the Zuzie Mind Wellness website.

## What Changed

The old custom PHP version is preserved in:

```text
_legacy/custom-php/
```

The active app is now a Laravel project.

## Current Structure

```text
app/                         Laravel application classes
config/zuzie.php             Mock website data for menus, videos, hashtags
public/assets/images/        Public images
resources/css/app.css        Tailwind CSS source
resources/js/app.js          Frontend JavaScript
resources/views/             Blade templates
routes/web.php               Website routes
```

## Blade, In Simple Terms

Blade is Laravel's template file format.

Instead of writing a full PHP page like `public/index.php`, you write a view file such as:

```text
resources/views/pages/home.blade.php
```

Blade lets you keep HTML readable while still using simple PHP-like features:

```blade
@foreach ($videos as $video)
  <h3>{{ $video['title'] }}</h3>
@endforeach
```

Important Blade ideas in this project:

- `resources/views/components/layouts/app.blade.php` is the shared page shell.
- `resources/views/partials/header.blade.php` is the shared header.
- `resources/views/partials/footer.blade.php` is the shared footer.
- `resources/views/pages/home.blade.php` is the home page.
- `resources/views/pages/videos.blade.php` is the video page.

Use `{{ ... }}` when outputting text because Laravel escapes it safely.

## Tailwind

Tailwind stays as the CSS framework. Bootstrap is not used.

Edit Tailwind styles here:

```text
resources/css/app.css
```

Build assets:

```bash
npm run build
```

Run Vite while developing:

```bash
npm run dev
```

## Local Development With Herd

Laravel Herd provides PHP, Composer, Laravel CLI, Node, Nginx, and local `.test` domains.

Basic checks:

```bash
php -v
composer -V
node -v
npm -v
```

If this project is inside a Herd parked folder, open it at:

```text
http://zuzie-mind-wellness.test
```

If it is not parked, use one of these:

```bash
herd link zuzie-mind-wellness
herd open
```

Or use Laravel's built-in local server:

```bash
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```

## Current Pages

```text
/         Home
/videos   Video library
```

## Verify

```bash
npm run build
php artisan test
php artisan view:cache
```
