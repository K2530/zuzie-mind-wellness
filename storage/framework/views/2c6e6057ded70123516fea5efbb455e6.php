<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo e($description ?? 'Zuzie Mind Wellness safe space and mental wellness platform.'); ?>">
  <title><?php echo e($title ?? 'Zuzie Mind Wellness'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="min-h-screen overflow-x-hidden bg-milk text-ink">
  <?php echo $__env->make('partials.header', ['navItems' => $navItems], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <?php echo e($slot); ?>


  <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\khach\Documents\Codex\2026-05-29\frongkung1-zuzie-mind-wellness-git-https\resources\views\components\layouts\app.blade.php ENDPATH**/ ?>