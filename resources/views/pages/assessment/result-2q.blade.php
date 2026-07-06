<x-layouts.app :nav-items="config('zuzie.nav_items')" title="Zuzie Mind Wellness - ผลประเมิน {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="border-b border-reseda/10 bg-gradient-to-b from-white to-almond/35 py-10 sm:py-16">
      <div class="container-soft">
        <div class="mx-auto max-w-3xl text-center">
          <p class="text-sm font-semibold text-persian">ผลการประเมินของคุณ</p>
          <h1 class="mt-3 text-3xl font-extrabold leading-tight text-ink sm:text-4xl">{{ $assessment['title'] }}</h1>
          <p class="mt-3 text-sm leading-6 text-ink/70">
            นี่คือผลการประเมินเบื้องต้นจากแบบทดสอบที่คุณเพิ่งทำเสร็จ หากคุณมีความกังวลหรือมีคะแนนในเกณฑ์เสี่ยง แนะนำให้ปรึกษาผู้เชี่ยวชาญ
          </p>
        </div>

        <div class="mx-auto mt-12 grid max-w-4xl gap-6">

          <!-- 2Q Result -->
          <div class="rounded-[24px] border border-reseda/10 bg-white p-6 shadow-sm sm:p-8" style="border-left: 6px solid {{ $band2q['tone'] }}">
            <h2 class="text-xl font-bold text-ink">คัดกรองโรคซึมเศร้า (2Q)</h2>
            <div class="mt-4 flex flex-wrap items-center justify-between gap-4 rounded-xl bg-almond/10 p-5">
              <div>
                <p class="text-sm text-ink/65">ผลการคัดกรองเบื้องต้น</p>
                <p class="mt-1 text-2xl font-bold" style="color: {{ $band2q['tone'] }}">{{ $band2q['label'] }}</p>
              </div>
              <div class="text-right">
                <p class="text-sm text-ink/65">คะแนนที่ได้</p>
                <p class="text-xl font-bold text-ink">{{ $score2q }} / 2</p>
              </div>
            </div>
            @if($score2q === 0)
              <p class="mt-4 text-sm leading-6 text-ink/80">คุณไม่มีความเสี่ยงหรือมีแนวโน้มโรคซึมเศร้าในระดับที่ต้องกังวล แนะนำให้ดูแลสุขภาพกายและใจต่อไป</p>
            @endif
          </div>

          <!-- 9Q Result (Only if 2Q > 0) -->
          @if($score2q > 0)
          <div class="rounded-[24px] border border-reseda/10 bg-white p-6 shadow-sm sm:p-8" style="border-left: 6px solid {{ $band9q['tone'] }}">
            <h2 class="text-xl font-bold text-ink">ระดับความรุนแรงของโรคซึมเศร้า (9Q)</h2>
            <div class="mt-4 flex flex-wrap items-center justify-between gap-4 rounded-xl bg-almond/10 p-5">
              <div>
                <p class="text-sm text-ink/65">ระดับความรุนแรง</p>
                <p class="mt-1 text-2xl font-bold" style="color: {{ $band9q['tone'] }}">{{ $band9q['label'] }}</p>
              </div>
              <div class="text-right">
                <p class="text-sm text-ink/65">คะแนนที่ได้</p>
                <p class="text-xl font-bold text-ink">{{ $score9q }} / 27</p>
              </div>
            </div>
          </div>
          @endif

          <!-- 8Q Result (Only if 9Q >= 7) -->
          @if($score9q >= 7)
          <div class="rounded-[24px] border border-reseda/10 bg-white p-6 shadow-sm sm:p-8" style="border-left: 6px solid {{ $band8q['tone'] }}">
            <h2 class="text-xl font-bold text-ink">แนวโน้มการฆ่าตัวตาย (8Q)</h2>
            <div class="mt-4 flex flex-wrap items-center justify-between gap-4 rounded-xl bg-almond/10 p-5">
              <div>
                <p class="text-sm text-ink/65">แนวโน้มการฆ่าตัวตายในปัจจุบัน</p>
                <p class="mt-1 text-2xl font-bold" style="color: {{ $band8q['tone'] }}">{{ $band8q['label'] }}</p>
              </div>
              <div class="text-right">
                <p class="text-sm text-ink/65">คะแนนที่ได้</p>
                <p class="text-xl font-bold text-ink">{{ $score8q }}</p>
              </div>
            </div>
            @if(isset($band8q['summary']))
              <p class="mt-4 text-sm font-semibold leading-6" style="color: {{ $band8q['tone'] }}">{{ $band8q['summary'] }}</p>
            @endif
          </div>
          @endif

        </div>
        
        <div class="mx-auto mt-10 max-w-4xl text-center">
          <p class="text-sm font-semibold text-ink/60">* แบบประเมินนี้เป็นเพียงการคัดกรองเบื้องต้น ไม่ใช่การวินิจฉัยทางการแพทย์</p>
          <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ route('booking') }}" class="btn-primary">จองคิวปรึกษานักจิตวิทยา</a>
            <a href="{{ route('home') }}" class="btn-secondary">กลับหน้าแรก</a>
          </div>
        </div>

      </div>
    </section>

    <section class="bg-white py-14">
      <div class="container-soft">
        <h2 class="text-2xl font-bold text-ink" data-i18n="recommendedVideos">วิดีโอแนะนำสำหรับคุณ</h2>
        <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($videos as $index => $video)
            <a href="{{ route('video.show', $index) }}" class="group block">
              <div class="relative overflow-hidden rounded-lg bg-reseda">
                <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover opacity-75 transition group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-ink/68 to-transparent"></div>
                <span class="absolute bottom-3 right-3 rounded bg-ink/80 px-2 py-1 text-xs font-bold text-white">{{ $video['time'] }}</span>
              </div>
              <h3 class="mt-3 line-clamp-2 text-sm font-bold leading-6">{{ $video['title'] }}</h3>
            </a>
          @endforeach
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>
