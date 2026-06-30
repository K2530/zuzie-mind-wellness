<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - แบบประเมินใจ">
  <main class="bg-milk">
    <section class="border-b border-reseda/10 bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        <div class="mx-auto max-w-3xl text-center">
          <p class="text-sm font-semibold text-persian">แบบประเมินใจ</p>
          <h1 class="mt-3 text-3xl font-extrabold leading-tight text-ink sm:text-4xl">แบบประเมินใจ</h1>
          <p class="mt-3 text-sm leading-6 text-ink/68 sm:text-base">
            เริ่มจากเข้าใจตัวเอง เลือกหัวข้อที่ใกล้เคียงกับสิ่งที่คุณกำลังเผชิญอยู่
          </p>
        </div>

        <div class="mt-8 grid gap-6 lg:grid-cols-[1fr_380px] lg:items-start">
          <div class="grid gap-3">
            @foreach ($assessments as $item)
              <a href="{{ route('assessment.show', $item['slug']) }}" class="group grid min-h-[74px] grid-cols-[58px_1fr_24px] items-center gap-3 rounded-lg border border-reseda/10 bg-white/94 px-4 py-3 shadow-[0_10px_28px_rgba(83,76,65,0.06)] transition hover:border-reseda/25 hover:shadow-[0_18px_45px_rgba(83,76,65,0.10)]">
                <span class="flex h-12 w-12 items-center justify-center rounded-full bg-almond/65 text-reseda">
                  @switch($item['icon'])
                    @case('stress')
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 3v3"/><path d="M17.5 5.5 15.4 7.6"/><path d="M20 11h-3"/><path d="M6 11H3"/><path d="M8.6 7.6 6.5 5.5"/><path d="M7 16a5 5 0 0 1 10 0"/><path d="M9 20h6"/></svg>
                      @break
                    @case('depression')
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5c3 2 6 5 6 9a6 6 0 0 1-12 0c0-4 3-7 6-9Z"/><path d="M9 14h.01"/><path d="M15 14h.01"/><path d="M9.5 17c1.6-1 3.4-1 5 0"/></svg>
                      @break
                    @case('relationship')
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 20s-7-4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 5-7 9-7 9Z"/><path d="m8 12 2 2 4-4 2 2"/></svg>
                      @break
                    @case('burnout')
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="5" y="6" width="14" height="13" rx="2"/><path d="M9 6V4h6v2"/><path d="M9 11h6"/><path d="M9 15h4"/></svg>
                      @break
                    @case('overthinking')
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="7"/><path d="M9 10a3 3 0 1 1 4.1 2.8c-.8.3-1.1.7-1.1 1.7"/><path d="M12 18h.01"/></svg>
                      @break
                    @case('sleep')
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 17.5A7 7 0 0 1 8.5 8 7.5 7.5 0 1 0 18 17.5Z"/><path d="M15 5h4l-4 4h4"/></svg>
                      @break
                    @default
                      <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 3 5 6v5.2c0 4.4 2.9 8.4 7 9.8 4.1-1.4 7-5.4 7-9.8V6l-7-3Z"/><path d="M9 12.5 11 15l4-5"/></svg>
                  @endswitch
                </span>
                <span>
                  <span class="block text-sm font-bold leading-5 text-ink sm:text-base">{{ $item['title'] }}</span>
                  <span class="mt-1 block text-xs leading-5 text-ink/62 sm:text-sm">{{ $item['desc'] }}</span>
                </span>
                <span class="text-2xl text-ink/45 transition group-hover:translate-x-1 group-hover:text-reseda">›</span>
              </a>
            @endforeach
          </div>

          <aside class="grid gap-4">
            <div class="overflow-hidden rounded-lg border border-reseda/10 bg-white shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <div class="p-7">
                <h2 class="text-xl font-bold text-ink">ผลการประเมินนี้</h2>
                <p class="mt-3 text-sm font-semibold leading-6 text-persian">เป็นเพียงการคัดกรองเบื้องต้น ไม่ใช่การวินิจฉัย</p>
                <p class="mt-5 text-sm leading-7 text-ink/70">
                  หากคุณต้องการคำแนะนำจากผู้เชี่ยวชาญ สามารถจองคิวปรึกษากับนักจิตวิทยาที่เข้าใจคุณ และรับคำแนะนำที่เหมาะสมได้
                </p>
                <a href="{{ route('home') }}#booking" class="btn-primary mt-6">จองคิวปรึกษา</a>
              </div>
              <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-28 w-full object-cover object-[72%_48%] opacity-85">
            </div>

            <div class="grid gap-3 rounded-lg border border-reseda/10 bg-almond/50 p-5 sm:grid-cols-[1fr_132px] sm:items-center">
              <p class="text-sm font-semibold leading-6 text-ink">ต้องการความช่วยเหลือ? ทักแชทปรึกษาเราได้เลย</p>
              <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line min-h-10 px-3 py-2 text-xs" rel="noopener">ทัก LINE</a>
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>
