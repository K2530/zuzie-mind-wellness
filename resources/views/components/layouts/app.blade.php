<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $description ?? 'Zuzie Mind Wellness safe space and mental wellness platform.' }}">
  <title>{{ $title ?? 'Zuzie Mind Wellness' }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen overflow-x-hidden bg-milk text-ink">
  @include('partials.header', ['navItems' => $navItems])

  {{ $slot }}

  @include('partials.footer')
</body>
</html>
