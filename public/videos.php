<?php

declare(strict_types=1);

require dirname(__DIR__) . '/app/Support/security.php';
require dirname(__DIR__) . '/app/Support/helpers.php';
require dirname(__DIR__) . '/app/data/home.php';
?>
<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Zuzie Mind Wellness safe space and mental wellness platform.">
  <title>Zuzie Mind Wellness - วิดีโอฮีลใจ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= e(asset('css/app.css')) ?>">
  
  <style>
    /* อนิเมชั่นเล็กน้อยเวลาเปลี่ยนแท็บวิดีโอ */
    @keyframes fadeVideoIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .video-card-visible {
      display: flex !important;
      animation: fadeVideoIn 0.3s ease-in-out forwards;
    }
    .video-card-hidden {
      display: none !important;
    }
  </style>
</head>
<body class="min-h-screen overflow-x-hidden bg-milk text-ink">
  <?php require __DIR__ . '/includes/header.php'; ?>

  <main id="videos-page" class="py-12 sm:py-16">
    <div class="container-soft mx-auto px-4">
      
      <!-- หัวข้อ (เพิ่ม data-i18n สำหรับรองรับสองภาษา) -->
      <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-ink sm:text-4xl" data-i18n="videosPageTitle">วิดีโอฮีลใจ</h1>
        <p class="mt-3 text-base sm:text-lg text-ink/70" data-i18n="videosPageDesc">คลิปดี ๆ ที่เราอยากส่งต่อให้คุณ</p>
      </div>

      <!-- ปุ่มเลือกหมวดหมู่ (Category Tabs) -->
      <!-- เพิ่ม data-category เพื่อให้ Javascript ดึงไปกรองข้อมูลได้ -->
      <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-10" id="video-tabs">
        <?php foreach ($videoCategories as $index => $cat): 
          $isActive = $index === 0;
        ?>
          <button 
            type="button"
            data-category="<?= e($cat['id']) ?>"
            data-i18n="<?= e($cat['key']) ?>"
            class="video-tab px-5 py-2 rounded-full text-sm font-medium transition-colors <?= $isActive ? 'bg-[#5F6A53] text-white shadow-sm active-tab' : 'bg-white border border-gray-200 text-ink/70 hover:bg-gray-50' ?>">
            <?= e($cat['label']) ?>
          </button>
        <?php endforeach; ?>
      </div>

      <!-- รายการวิดีโอ Grid -->
      <!-- เพิ่ม data-video-category ไว้ที่ตัวการ์ดเพื่อเช็คเงื่อนไข -->
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="video-grid">
        <?php foreach ($videos as $video): ?>
          <article class="video-item video-card-visible bg-white rounded-[20px] overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] transition-all hover:shadow-lg group flex-col cursor-pointer border border-gray-100/50" data-video-category="<?= e($video['category']) ?>">
            <div class="relative aspect-[16/10] overflow-hidden bg-reseda">
              <img src="<?= e(asset('images/hero-woman-tea.png')) ?>" alt="<?= e($video['title']) ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
              <div class="absolute inset-0 bg-black/5 transition-opacity duration-300 group-hover:bg-black/15"></div>
              
              <!-- ปุ่ม Play -->
              <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-12 h-12 rounded-full border-[1.5px] border-white/60 bg-white/20 backdrop-blur-sm flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:bg-white/30 shadow-sm">
                  <svg class="w-5 h-5 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                  </svg>
                </div>
              </div>

              <!-- ป้ายเวลา -->
              <span class="absolute bottom-3 right-3 rounded-md bg-black/70 px-2 py-1 text-[11px] tracking-wide font-bold text-white">
                <?= e($video['time']) ?>
              </span>
            </div>
            
            <div class="p-4 flex-1 flex flex-col justify-between">
              <h3 class="text-sm sm:text-base font-bold leading-relaxed text-ink line-clamp-2 group-hover:text-[#5F6A53] transition-colors duration-200">
                <?= e($video['title']) ?>
              </h3>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- ปุ่มโหลดเพิ่มเติม / ดูทั้งหมด -->
      <div class="mt-12 flex justify-center">
        <a href="#" class="inline-flex items-center justify-center px-12 py-3.5 bg-[#5F6A53] text-white rounded-md font-semibold hover:bg-[#4d5643] transition-colors shadow-sm text-sm" data-i18n="btnViewAllVideos">
          ดูวิดีโอทั้งหมด
        </a>
      </div>
      
    </div>
  </main>

  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="<?= e(asset('js/app.js')) ?>" defer></script>
  
  <!-- Script สำหรับกรองวิดีโอเมื่อคลิกที่แท็บ (Mock Filter) -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabs = document.querySelectorAll('.video-tab');
      const videos = document.querySelectorAll('.video-item');

      tabs.forEach(tab => {
        tab.addEventListener('click', function() {
          // 1. จัดการ CSS ของปุ่ม Tabs (ล้างของเก่า ใส่ของใหม่)
          tabs.forEach(t => {
            t.classList.remove('bg-[#5F6A53]', 'text-white', 'shadow-sm', 'active-tab');
            t.classList.add('bg-white', 'border', 'border-gray-200', 'text-ink/70');
          });
          
          this.classList.remove('bg-white', 'border', 'border-gray-200', 'text-ink/70');
          this.classList.add('bg-[#5F6A53]', 'text-white', 'shadow-sm', 'active-tab');

          // 2. ดึงหมวดหมู่ที่คลิก
          const selectedCategory = this.getAttribute('data-category');

          // 3. กรองวิดีโอ
          videos.forEach(video => {
            const videoCategory = video.getAttribute('data-video-category');
            
            // ถ้าเลือก 'all' หรือหมวดหมู่ตรงกับวิดีโอ ให้แสดง
            if (selectedCategory === 'all' || selectedCategory === videoCategory) {
              video.classList.remove('video-card-hidden');
              video.classList.add('video-card-visible');
            } else {
              video.classList.remove('video-card-visible');
              video.classList.add('video-card-hidden');
            }
          });
        });
      });
    });
  </script>
</body>
</html>