<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['navItems' => $navItems,'title' => 'Zuzie Mind Wellness']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nav-items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navItems),'title' => 'Zuzie Mind Wellness']); ?>
  <main id="home">
    <section class="relative overflow-hidden bg-almond">
      <div class="absolute inset-0">
        <img src="<?php echo e(asset('assets/images/hero-woman-tea.png')); ?>" alt="Woman holding tea in a warm wellness room" class="h-full w-full object-cover object-[68%_50%]">
      </div>

      <div class="container-soft relative grid min-h-[760px] items-center pb-36 pt-16 sm:min-h-[800px] lg:min-h-[780px]">
        <div class="max-w-2xl pt-8 drop-shadow-[0_2px_18px_rgba(255,252,248,0.65)]">
          <span class="section-kicker bg-white/82" data-i18n="heroBadge"></span>
          <h1 class="mt-6 max-w-xl text-4xl font-extrabold leading-tight tracking-normal text-ink sm:text-5xl lg:text-6xl" data-i18n="heroTitle"></h1>
          <p class="mt-2 font-serif text-4xl font-light italic text-persian sm:text-5xl" data-i18n="heroScript"></p>
          <p class="mt-7 max-w-lg text-base leading-8 text-ink sm:text-lg" data-i18n="heroCopy"></p>
          <div class="mt-8 grid gap-3 sm:grid-cols-3">
            <a href="<?php echo e(route('assessment')); ?>" class="btn-primary" data-i18n="startAssessment"></a>
            <a href="#booking" class="btn-consult" data-i18n="talkPsych"></a>
            <a href="<?php echo e(route('videos')); ?>" class="btn-secondary" data-i18n="heroVideoCta"></a>
          </div>
        </div>
      </div>
    </section>

    <section aria-label="Trust highlights" class="relative z-10 -mt-20 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto grid max-w-6xl gap-3 rounded-[24px] border border-reseda/10 bg-white/94 px-4 py-5 shadow-[0_18px_45px_rgba(83,76,65,0.10)] sm:grid-cols-2 lg:grid-cols-6 lg:px-7 lg:py-6">
        <?php $__currentLoopData = $trustItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="grid justify-items-center gap-2 rounded-md px-2 py-1 text-center">
            <span class="icon-shell" data-icon="<?php echo e($item['icon']); ?>" aria-hidden="true"></span>
            <p class="text-[13px] font-medium leading-5 text-ink" data-i18n="<?php echo e($item['key']); ?>"></p>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>

    <section id="assessment" class="container-soft grid gap-8 pb-16 pt-20 lg:grid-cols-[260px_1fr] lg:items-start">
      <div>
        <h2 class="text-3xl font-bold leading-tight sm:text-4xl" data-i18n="assessTitle"></h2>
        <p class="mt-5 text-base leading-7 text-ink/72" data-i18n="assessCopy"></p>
        <a href="<?php echo e(route('assessment')); ?>" class="btn-primary mt-7" data-i18n="viewAllAssessments"></a>
      </div>

      <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        <?php $__currentLoopData = $assessments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <article class="soft-card overflow-hidden">
            <img src="<?php echo e(asset('assets/images/hero-woman-tea.png')); ?>" alt="" class="h-36 w-full object-cover <?php echo e($card['pos']); ?>">
            <div class="p-5">
              <p class="text-sm text-ink/65" data-i18n="assessmentLabel"></p>
              <h3 class="mt-1 text-xl font-bold" data-i18n="<?php echo e($card['key']); ?>"></h3>
              <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70" data-i18n="<?php echo e($card['desc']); ?>"></p>
              <a href="<?php echo e(route('assessment')); ?>" class="btn-secondary mt-4 w-full" data-i18n="startNow"></a>
            </div>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>

    <section id="videos" class="border-y border-reseda/10 bg-white py-14">
      <div class="container-soft grid gap-8 lg:grid-cols-[260px_1fr]">
        <div>
          <h2 class="text-3xl font-bold leading-tight" data-i18n="videoTitle"></h2>
          <p class="mt-5 text-base leading-7 text-ink/72" data-i18n="videoCopy"></p>
          <a href="<?php echo e(route('videos')); ?>" class="btn-primary mt-7" data-i18n="viewAllVideos"></a>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
          <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="group">
              <div class="relative overflow-hidden rounded-lg bg-reseda">
                <img src="<?php echo e(asset('assets/images/hero-woman-tea.png')); ?>" alt="" class="h-36 w-full object-cover opacity-75 transition group-hover:scale-105 <?php echo e($index % 2 ? 'object-[72%_48%]' : 'object-[62%_44%]'); ?>">
                <div class="absolute inset-0 bg-gradient-to-t from-ink/68 to-transparent"></div>
                <span class="absolute bottom-3 right-3 rounded bg-ink/80 px-2 py-1 text-xs font-bold text-white"><?php echo e($video['time']); ?></span>
              </div>
              <h3 class="mt-3 line-clamp-2 text-sm font-bold leading-6"><?php echo e($video['title']); ?></h3>
              <p class="mt-1 text-sm text-ink/55"><?php echo e($video['source']); ?></p>
            </article>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>

    <section id="hashtags" class="relative overflow-hidden bg-almond/45 py-14">
      <div class="absolute right-0 top-0 hidden h-full w-1/3 bg-gradient-to-l from-desert/35 to-transparent lg:block"></div>
      <div class="container-soft relative">
        <h2 class="text-3xl font-bold" data-i18n="hashtagTitle"></h2>
        <p class="mt-3 max-w-2xl text-base leading-7 text-ink/72" data-i18n="hashtagCopy"></p>
        <div class="mt-8 flex flex-wrap gap-3">
          <?php $__currentLoopData = $hashtags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#articles" class="pill"><?php echo e($tag); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <a href="#hashtags" class="pill bg-desert/30" data-i18n="allHashtags"></a>
        </div>
      </div>
    </section>

    <section id="services" class="container-soft grid gap-5 py-14 lg:grid-cols-3">
      <article class="service-mini-card after:bg-[url('/assets/images/hero-woman-tea.png')] after:bg-[62%_48%]">
        <div>
          <h2 class="text-xl font-semibold" data-i18n="serviceTitle"></h2>
          <p class="mt-3 text-sm leading-6 text-ink/70" data-i18n="serviceCopy"></p>
          <a href="#booking" class="btn-secondary service-card-cta mt-5" data-i18n="seeAllServices"></a>
        </div>
      </article>
      <article id="courses" class="service-mini-card after:bg-[url('/assets/images/hero-woman-tea.png')] after:bg-[74%_50%]">
        <div>
          <h2 class="text-xl font-semibold" data-i18n="courseTitle"></h2>
          <p class="mt-3 text-sm leading-6 text-ink/70" data-i18n="courseCopy"></p>
          <a href="#courses" class="btn-secondary service-card-cta mt-5" data-i18n="seeCourses"></a>
        </div>
      </article>
      <article id="booking" class="service-mini-card after:bg-[url('/assets/images/hero-woman-tea.png')] after:bg-[82%_48%]">
        <div>
          <h2 class="text-xl font-semibold" data-i18n="communityTitle"></h2>
          <p class="mt-3 text-sm leading-6 text-ink/70" data-i18n="communityCopy"></p>
          <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-secondary service-card-cta mt-5" rel="noopener" data-i18n="seeDetails"></a>
        </div>
      </article>
    </section>

    <section id="subscribe" class="bg-reseda py-6 text-white">
      <div class="container-soft grid gap-4 lg:grid-cols-[1fr_520px] lg:items-center">
        <div class="flex items-center gap-4">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border border-white/30 text-2xl" aria-hidden="true">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/></svg>
          </span>
          <h2 class="text-lg font-semibold" data-i18n="subscribeTitle"></h2>
        </div>
        <form action="#subscribe" method="get" class="grid gap-3 sm:grid-cols-[1fr_150px]" data-mock-form>
          <label class="sr-only" for="email">Email</label>
          <input id="email" name="email" type="email" autocomplete="email" class="min-h-12 rounded-md border-0 bg-white px-4 text-ink shadow-sm outline-none focus:ring-2 focus:ring-desert" data-i18n-placeholder="emailPlaceholder">
          <button class="min-h-12 rounded-md bg-ink px-5 text-sm font-bold text-white transition hover:bg-persian" type="submit" data-i18n="subscribe"></button>
        </form>
      </div>
    </section>
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
<?php /**PATH C:\Users\khach\Documents\Codex\2026-05-29\frongkung1-zuzie-mind-wellness-git-https\resources\views/pages/home.blade.php ENDPATH**/ ?>