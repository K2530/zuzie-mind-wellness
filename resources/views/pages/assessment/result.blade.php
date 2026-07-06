@php
  $degrees = max(8, min(360, (int) round($percent * 3.6)));
@endphp

<x-layouts.app :nav-items="config('zuzie.nav_items')" title="Zuzie Mind Wellness - {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        <div class="grid gap-6 lg:grid-cols-[1fr_420px]">
          <section class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <p class="text-sm font-semibold text-persian">
              <span class="lang-th">{{ $assessment['title'] }}</span>
              <span class="lang-en hidden">{{ $assessment['title_en'] ?? $assessment['title'] }}</span>
            </p>
            <h1 class="mt-2 text-3xl font-extrabold text-ink" data-i18n="yourResult">ผลการประเมินของคุณ</h1>

            <div class="mt-8 grid justify-items-center">
              <div class="relative grid h-64 w-64 place-items-center rounded-full" style="background: conic-gradient({{ $band['tone'] }} 0deg {{ $degrees }}deg, #efe3d7 {{ $degrees }}deg 360deg);">
                <div class="grid h-48 w-48 place-items-center rounded-full bg-white text-center shadow-inner">
                  <div>
                    <p class="text-xs font-semibold text-ink/55">
                      <span class="lang-th">{{ $assessment['metric'] }}</span>
                      <span class="lang-en hidden">{{ $assessment['metric_en'] ?? $assessment['metric'] }}</span>
                    </p>
                    <p class="mt-1 text-6xl font-light leading-none text-ink">{{ $percent }}<span class="text-2xl">%</span></p>
                    <p class="mt-2 text-sm font-bold text-persian">
                      <span data-i18n="level">ระดับ</span><span class="lang-th">{{ $band['label'] }}</span>
                      <span class="lang-en hidden">{{ $band['label_en'] ?? $band['label'] }}</span>
                    </p>
                    <p class="mt-1 text-xs text-ink/55">{{ $score }} / {{ $maxScore }} <span data-i18n="points">คะแนน</span></p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <aside class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <h2 class="text-xl font-bold text-ink" data-i18n="resultDesc">คำอธิบายผลประเมิน</h2>
            <p class="mt-5 text-sm leading-7 text-ink/70">
              <span class="lang-th">{{ $band['summary'] }}</span>
              <span class="lang-en hidden">{{ $band['summary_en'] ?? $band['summary'] }}</span>
            </p>
            <div class="mt-6 rounded-lg border border-reseda/10 bg-milk p-4">
              <h3 class="text-sm font-bold text-ink" data-i18n="initialAdvice">คำแนะนำเบื้องต้น</h3>
              <ul class="mt-3 grid gap-2 text-sm leading-6 text-ink/70 list-disc pl-4">
                @if(isset($band['advice']) && is_array($band['advice']))
                  @foreach($band['advice'] as $advice)
                    <li>{{ $advice }}</li>
                  @endforeach
                @elseif(isset($assessment['advice']) && is_array($assessment['advice']))
                  @foreach($assessment['advice'] as $advice)
                    <li>{{ $advice }}</li>
                  @endforeach
                @else
                  <li data-i18n="advice1">สังเกตอารมณ์ ร่างกาย และสิ่งกระตุ้นที่ทำให้อาการเพิ่มขึ้น</li>
                  <li data-i18n="advice2">ให้เวลากับการพัก การนอน และการลดสิ่งที่กดดันเกินจำเป็น</li>
                  <li data-i18n="advice3">พูดคุยกับคนที่ไว้ใจ หรือจองคิวผู้เชี่ยวชาญหากอาการรบกวนชีวิตประจำวัน</li>
                @endif
              </ul>
            </div>
          </aside>
        </div>

        @if(!empty($answers))
        <section class="mt-8 rounded-lg border border-reseda/10 bg-white/88 p-5 shadow-[0_14px_38px_rgba(83,76,65,0.06)] sm:p-7">
          <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
              <h2 class="text-xl font-bold text-ink" data-i18n="scoreDetails">รายละเอียดคะแนน</h2>
              <p class="mt-1 text-sm text-ink/60" data-i18n="scoreDetailsDesc">คะแนนแต่ละข้อจากคำตอบของคุณ</p>
            </div>
            <a href="{{ route('assessment.show', $assessment['slug']) }}" class="btn-secondary min-h-10 px-4 py-2 text-xs" data-i18n="retakeAssessment">ทำแบบประเมินอีกครั้ง</a>
          </div>

          <div class="mt-5 grid gap-3">
            @foreach ($assessment['questions'] as $index => $question)
              @php
                  $isCustomOptions = is_array($question) && isset($question['options']);
                  $qText = is_array($question) && isset($question['text']) ? $question['text'] : (is_array($question) ? '' : $question);
                  $qTextEn = is_array($question) && isset($question['text_en']) ? $question['text_en'] : $qText;
                  
                  // Need to deduce max points for this specific question
                  $options = $isCustomOptions ? $question['options'] : ($assessment['options'] ?? [0,1,2,3]);
                  $qMaxScore = max(array_keys($options));
              @endphp
              <div class="grid gap-3 rounded-md border border-reseda/10 bg-milk/70 p-4 sm:grid-cols-[1fr_92px] sm:items-center">
                <p class="text-sm font-semibold leading-6 text-ink">
                  <span class="lang-th">{{ $index + 1 }}. {{ $qText }}</span>
                  <span class="lang-en hidden">{{ $index + 1 }}. {{ $qTextEn }}</span>
                </p>
                <div class="rounded-full bg-white px-4 py-2 text-center text-sm font-bold text-reseda">{{ $answers[$index] ?? '-' }} / {{ $qMaxScore }}</div>
              </div>
            @endforeach
          </div>
        </section>
        @endif


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
            @foreach ($videos as $index => $video)
              <a href="{{ $video['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="group block overflow-hidden rounded-lg border border-reseda/10 bg-white shadow-[0_14px_38px_rgba(83,76,65,0.08)] transition-all duration-300 hover:-translate-y-1 hover:border-reseda/30 hover:shadow-[0_18px_45px_rgba(83,76,65,0.12)]">
                <div class="relative overflow-hidden">
                  <img src="{{ isset($video['thumbnail']) ? asset($video['thumbnail']) : asset('assets/images/hero-woman-tea.webp') }}" 
                       alt="{{ $video['title'] }}" 
                       class="h-32 w-full object-cover transition-transform duration-500 group-hover:scale-105 {{ $index % 2 ? 'object-[72%_48%]' : 'object-[62%_44%]' }}">
                  
                  <div class="absolute inset-0 bg-gradient-to-t from-ink/70 via-transparent to-transparent opacity-80"></div>
                  
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-white/90 text-reseda shadow-lg backdrop-blur-sm">
                      <svg class="ml-1 h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                    </span>
                  </div>

                  <span class="absolute bottom-2 right-2 rounded bg-ink/85 px-2 py-1 text-[10px] font-bold tracking-wide text-white shadow-sm">{{ $video['time'] ?? '0:00' }}</span>
                </div>
                <div class="p-4">
                  <h3 class="line-clamp-2 min-h-12 text-sm font-bold leading-6 text-ink transition-colors group-hover:text-reseda">{{ $video['title'] }}</h3>
                  <p class="mt-2 text-xs font-semibold text-reseda/80">{{ $video['source'] ?? 'Zuzie Mind Wellness' }}</p>
                </div>
              </a>
            @endforeach
          </div>

          <div class="mt-7 grid gap-3 sm:grid-cols-2 sm:justify-center lg:mx-auto lg:max-w-2xl">
            <a href="{{ route('home') }}#booking" class="btn-consult">จองคิวปรึกษาใจ</a>
            <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-secondary" rel="noopener">ทัก LINE ปรึกษา</a>
          </div>
        </section>
      </div>
    </section>
  </main>
</x-layouts.app>