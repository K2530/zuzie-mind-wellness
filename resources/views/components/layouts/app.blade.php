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

  <style>
    .scroll-fade {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
      will-change: opacity, transform;
    }
    .scroll-fade.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // 1. Shrinking Header
      const header = document.getElementById('main-header');
      const headerContainer = document.getElementById('header-container');
      const logoText = header ? header.querySelector('.font-serif') : null;
      const logoSub = header ? header.querySelector('.uppercase') : null;
      
      if (header && headerContainer) {
        window.addEventListener('scroll', () => {
          if (window.scrollY > 50) {
            header.classList.add('shadow-sm');
            headerContainer.classList.remove('min-h-20');
            headerContainer.classList.add('min-h-14');
            if (logoText) {
              logoText.classList.remove('text-4xl', 'leading-8');
              logoText.classList.add('text-3xl', 'leading-6');
            }
          } else {
            header.classList.remove('shadow-sm');
            headerContainer.classList.remove('min-h-14');
            headerContainer.classList.add('min-h-20');
            if (logoText) {
              logoText.classList.remove('text-3xl', 'leading-6');
              logoText.classList.add('text-4xl', 'leading-8');
            }
          }
        });
      }

      // 2. Scroll Fade Observer
      // Target direct children of main to stagger/fade them individually
      const fadeElements = document.querySelectorAll('main > div, main > section, main > article, .service-mini-card, .video-card');
      
      fadeElements.forEach(el => {
        // Skip elements that are absolute/fixed or already have the class
        const style = window.getComputedStyle(el);
        if (style.position !== 'absolute' && style.position !== 'fixed' && !el.classList.contains('scroll-fade')) {
          el.classList.add('scroll-fade');
        }
      });

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            // Unobserve to run animation only once
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
      });

      document.querySelectorAll('.scroll-fade').forEach(el => {
        observer.observe(el);
      });
      // 3. Global Form Loader
      const globalLoader = document.getElementById('global-loader');
      const loaderText = document.getElementById('global-loader-text');
      if (globalLoader) {
        document.addEventListener('submit', function(e) {
          const form = e.target;
          if (!form.hasAttribute('data-no-loader') && form.target !== '_blank') {
            globalLoader.classList.remove('hidden');
            globalLoader.classList.add('flex');
            setTimeout(() => {
              globalLoader.classList.remove('opacity-0');
            }, 10);
            
            if (form.action.includes('register')) {
              loaderText.innerText = 'กำลังสร้างบัญชีของคุณ...';
            } else if (form.action.includes('payment') || form.action.includes('checkout') || form.action.includes('booking')) {
              loaderText.innerText = 'กำลังประมวลผล...';
            } else {
              loaderText.innerText = 'กำลังดำเนินการ...';
            }
          }
        });
      }
    });
  </script>

  <!-- Global Form Submission Loader -->
  <div id="global-loader" class="fixed inset-0 z-[9999] bg-milk/80 backdrop-blur-sm hidden flex-col items-center justify-center transition-opacity duration-300 opacity-0">
    <div class="relative flex items-center justify-center">
      <div class="absolute w-12 h-12 border-[3px] border-reseda/20 rounded-full"></div>
      <div class="absolute w-12 h-12 border-[3px] border-reseda border-t-transparent rounded-full animate-spin"></div>
    </div>
    <p class="mt-4 text-reseda font-medium text-base tracking-wide animate-pulse" id="global-loader-text">กำลังดำเนินการ...</p>
  </div>
</body>
</html>
