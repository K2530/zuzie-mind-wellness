<?php
  $degrees = max(8, min(360, (int) round($percent * 3.6)));
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['navItems' => $navItems,'title' => 'Zuzie Mind Wellness - ผล'.e($assessment['title']).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['nav-items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navItems),'title' => 'Zuzie Mind Wellness - ผล'.e($assessment['title']).'']); ?>
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        <div class="grid gap-6 lg:grid-cols-[1fr_420px]">
          <section class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <p class="text-sm font-semibold text-persian"><?php echo e($assessment['title']); ?></p>
            <h1 class="mt-2 text-3xl font-extrabold text-ink">ผลการประเมินของคุณ</h1>

            <div class="mt-8 grid justify-items-center">
              <div class="relative grid h-64 w-64 place-items-center rounded-full" style="background: conic-gradient(<?php echo e($band['tone']); ?> 0deg <?php echo e($degrees); ?>deg, #efe3d7 <?php echo e($degrees); ?>deg 360deg);">
                <div class="grid h-48 w-48 place-items-center rounded-full bg-white text-center shadow-inner">
                  <div>
                    <p class="text-xs font-semibold text-ink/55"><?php echo e($assessment['metric']); ?></p>
                    <p class="mt-1 text-6xl font-light leading-none text-ink"><?php echo e($percent); ?><span class="text-2xl">%</span></p>
                    <p class="mt-2 text-sm font-bold text-persian">ระดับ<?php echo e($band['label']); ?></p>
                    <p class="mt-1 text-xs text-ink/55"><?php echo e($score); ?> / <?php echo e($maxScore); ?> คะแนน</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <aside class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <h2 class="text-xl font-bold text-ink">คำอธิบายผลประเมิน</h2>
            <p class="mt-5 text-sm leading-7 text-ink/70"><?php echo e($band['summary']); ?></p>
            <div class="mt-6 rounded-lg border border-reseda/10 bg-milk p-4">
              <h3 class="text-sm font-bold text-ink">คำแนะนำเบื้องต้น</h3>
              <ul class="mt-3 grid gap-2 text-sm leading-6 text-ink/70">
                <li>สังเกตอารมณ์ ร่างกาย และสิ่งกระตุ้นที่ทำให้อาการเพิ่มขึ้น</li>
                <li>ให้เวลากับการพัก การนอน และการลดสิ่งที่กดดันเกินจำเป็น</li>
                <li>พูดคุยกับคนที่ไว้ใจ หรือจองคิวผู้เชี่ยวชาญหากอาการรบกวนชีวิตประจำวัน</li>
              </ul>
            </div>
          </aside>
        </div>

        <section class="mt-8 rounded-lg border border-reseda/10 bg-white/88 p-5 shadow-[0_14px_38px_rgba(83,76,65,0.06)] sm:p-7">
          <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
              <h2 class="text-xl font-bold text-ink">รายละเอียดคะแนน</h2>
              <p class="mt-1 text-sm text-ink/60">คะแนนแต่ละข้อจากคำตอบของคุณ</p>
            </div>
            <a href="<?php echo e(route('assessment.show', $assessment['slug'])); ?>" class="btn-secondary min-h-10 px-4 py-2 text-xs">ทำแบบประเมินอีกครั้ง</a>
          </div>

          <div class="mt-5 grid gap-3">
            <?php $__currentLoopData = $assessment['questions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="grid gap-3 rounded-md border border-reseda/10 bg-milk/70 p-4 sm:grid-cols-[1fr_92px] sm:items-center">
                <p class="text-sm font-semibold leading-6 text-ink"><?php echo e($index + 1); ?>. <?php echo e($question); ?></p>
                <div class="rounded-full bg-white px-4 py-2 text-center text-sm font-bold text-reseda"><?php echo e($answers[$index]); ?> / 3</div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </section>

        <section class="mt-8">
          <div class="flex flex-wrap items-end justify-between gap-4 border-b border-reseda/15 pb-4">
            <div>
              <h2 class="text-xl font-bold text-ink">แนะนำสำหรับคุณ</h2>
              <p class="mt-1 text-sm text-ink/60">คอนเทนต์สั้น ๆ ที่ช่วยให้คุณเริ่มดูแลใจได้ทันที</p>
            </div>
            <div class="flex flex-wrap gap-2">
              <span class="rounded-full border border-reseda bg-reseda px-4 py-2 text-xs font-bold text-white">วิดีโอที่น่าสนใจ</span>
              <a href="#" class="rounded-full border border-reseda/15 bg-white px-4 py-2 text-xs font-bold text-ink/70 transition hover:bg-almond/50">บทความที่เกี่ยวข้อง</a>
              <a href="#" class="rounded-full border border-reseda/15 bg-white px-4 py-2 text-xs font-bold text-ink/70 transition hover:bg-almond/50">บริการที่แนะนำ</a>
            </div>
          </div>

          <div class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e($video['url'] ?? '#'); ?>" target="_blank" rel="noopener noreferrer" class="group block overflow-hidden rounded-lg border border-reseda/10 bg-white shadow-[0_14px_38px_rgba(83,76,65,0.08)] transition-all duration-300 hover:-translate-y-1 hover:border-reseda/30 hover:shadow-[0_18px_45px_rgba(83,76,65,0.12)]">
                <div class="relative overflow-hidden">
                  <img src="<?php echo e(isset($video['thumbnail']) ? asset($video['thumbnail']) : asset('assets/images/hero-woman-tea.png')); ?>" 
                       alt="<?php echo e($video['title']); ?>" 
                       class="h-32 w-full object-cover transition-transform duration-500 group-hover:scale-105 <?php echo e($index % 2 ? 'object-[72%_48%]' : 'object-[62%_44%]'); ?>">
                  
                  <div class="absolute inset-0 bg-gradient-to-t from-ink/70 via-transparent to-transparent opacity-80"></div>
                  
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-white/90 text-reseda shadow-lg backdrop-blur-sm">
                      <svg class="ml-1 h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                    </span>
                  </div>

                  <span class="absolute bottom-2 right-2 rounded bg-ink/85 px-2 py-1 text-[10px] font-bold tracking-wide text-white shadow-sm"><?php echo e($video['time'] ?? '0:00'); ?></span>
                </div>
                <div class="p-4">
                  <h3 class="line-clamp-2 min-h-12 text-sm font-bold leading-6 text-ink transition-colors group-hover:text-reseda"><?php echo e($video['title']); ?></h3>
                  <p class="mt-2 text-xs font-semibold text-reseda/80"><?php echo e($video['source'] ?? 'Zuzie Mind Wellness'); ?></p>
                </div>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

          <div class="mt-7 grid gap-3 sm:grid-cols-2 sm:justify-center lg:mx-auto lg:max-w-2xl">
            <a href="<?php echo e(route('home')); ?>#booking" class="btn-consult">จองคิวปรึกษาใจ</a>
            <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-secondary" rel="noopener">ทัก LINE ปรึกษา</a>
          </div>
        </section>
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
<?php endif; ?><?php /**PATH C:\Users\khach\Documents\Codex\2026-05-29\frongkung1-zuzie-mind-wellness-git-https\resources\views\pages\assessment-result.blade.php ENDPATH**/ ?>