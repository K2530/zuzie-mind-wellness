<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['navItems' => $navItems,'title' => 'Zuzie Mind Wellness - วิดีโอฮีลใจ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nav-items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navItems),'title' => 'Zuzie Mind Wellness - วิดีโอฮีลใจ']); ?>
  <main id="videos-page" class="py-12 sm:py-16">
    <div class="container-soft mx-auto px-4">
      <div class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-ink sm:text-4xl" data-i18n="videosPageTitle">วิดีโอฮีลใจ</h1>
        <p class="mt-3 text-base text-ink/70 sm:text-lg" data-i18n="videosPageDesc">คลิปดี ๆ ที่เราอยากส่งต่อให้คุณ</p>
      </div>

      <div class="mb-10 flex flex-wrap justify-center gap-2 sm:gap-3" id="video-tabs">
        <?php $__currentLoopData = $videoCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <button
            type="button"
            data-category="<?php echo e($cat['id']); ?>"
            data-i18n="<?php echo e($cat['key']); ?>"
            class="video-tab rounded-full px-5 py-2 text-sm font-medium transition-colors <?php echo e($index === 0 ? 'active-tab bg-[#5F6A53] text-white shadow-sm' : 'border border-gray-200 bg-white text-ink/70 hover:bg-gray-50'); ?>">
            <?php echo e($cat['label']); ?>

          </button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="video-grid">
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('video.show', $loop->index)); ?>" class="video-item video-card-visible group flex flex-col cursor-pointer overflow-hidden rounded-[20px] border border-gray-100/50 bg-white shadow-[0_4px_20px_rgba(0,0,0,0.04)] transition-all hover:shadow-lg" data-video-category="<?php echo e($video['category']); ?>">
            <div class="relative aspect-[16/10] overflow-hidden bg-reseda">
              <img src="<?php echo e(asset('assets/images/hero-woman-tea.png')); ?>" alt="<?php echo e($video['title']); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
              <div class="absolute inset-0 bg-black/5 transition-opacity duration-300 group-hover:bg-black/15"></div>

              <div class="absolute inset-0 flex items-center justify-center">
                <div class="flex h-12 w-12 items-center justify-center rounded-full border-[1.5px] border-white/60 bg-white/20 shadow-sm backdrop-blur-sm transition-all duration-300 group-hover:scale-110 group-hover:bg-white/30">
                  <svg class="ml-0.5 h-5 w-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                  </svg>
                </div>
              </div>

              <span class="absolute bottom-3 right-3 rounded-md bg-black/70 px-2 py-1 text-[11px] font-bold tracking-wide text-white">
                <?php echo e($video['time']); ?>

              </span>
            </div>

            <div class="flex flex-1 flex-col justify-between p-4">
              <h3 class="line-clamp-2 text-sm font-bold leading-relaxed text-ink transition-colors duration-200 group-hover:text-[#5F6A53] sm:text-base">
                <?php echo e($video['title']); ?>

              </h3>
              <p class="mt-2 text-sm text-ink/55"><?php echo e($video['source']); ?></p>
            </div>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class="mt-12 flex justify-center">
        <a href="#" class="inline-flex items-center justify-center rounded-md bg-[#5F6A53] px-12 py-3.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-[#4d5643]" data-i18n="btnViewAllVideos">
          ดูวิดีโอทั้งหมด
        </a>
      </div>
    </div>
  </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\khach\Documents\Codex\2026-05-29\frongkung1-zuzie-mind-wellness-git-https\resources\views/pages/videos.blade.php ENDPATH**/ ?>