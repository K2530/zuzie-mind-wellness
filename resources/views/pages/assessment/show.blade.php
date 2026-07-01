<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        <div class="grid gap-6 lg:grid-cols-[1fr_360px] lg:items-start">
          <form action="{{ route('assessment.submit', $assessment['slug']) }}" method="post" class="rounded-lg border border-reseda/10 bg-white/94 p-5 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-8">
            @csrf

            <a href="{{ route('assessment') }}" class="text-sm font-semibold text-reseda hover:text-ink" data-i18n="backToAssessment">‹ กลับไปเลือกแบบประเมิน</a>
            <p class="mt-6 text-sm font-semibold text-persian" data-i18n="initialAssessment">แบบประเมินเบื้องต้น</p>
            
            <h1 class="mt-2 text-3xl font-extrabold leading-tight text-ink sm:text-4xl">
              <span class="lang-th">{{ $assessment['title'] }}</span>
              <span class="lang-en hidden">{{ $assessment['title_en'] ?? $assessment['title'] }}</span>
            </h1>
            
            <p class="mt-3 max-w-2xl text-sm leading-7 text-ink/68">
              <span class="lang-th">{{ $assessment['desc'] }}</span>
              <span class="lang-en hidden">{{ $assessment['desc_en'] ?? $assessment['desc'] }}</span>
            </p>

            @if ($errors->any())
              <div class="mt-6 rounded-lg border border-[#c85f36]/25 bg-[#c85f36]/10 px-4 py-3 text-sm font-semibold text-[#8d3f24]" data-i18n="pleaseAnswerAll">
                กรุณาตอบคำถามให้ครบทุกข้อก่อนดูผลประเมิน
              </div>
            @endif

            <div class="mt-8 grid gap-5">
              @foreach ($assessment['questions'] as $index => $question)
                @php
                    $isCustomOptions = is_array($question) && isset($question['options']);
                    $isComplexText = is_array($question) && isset($question['text_en']);
                    
                    $qText = $isCustomOptions || $isComplexText ? $question['text'] : $question;
                    $qTextEn = $isCustomOptions || $isComplexText ? ($question['text_en'] ?? $qText) : $qText;
                    
                    $options = $isCustomOptions ? $question['options'] : ($assessment['options'] ?? [0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด']);
                    $optionsEn = $isCustomOptions ? ($question['options_en'] ?? $options) : ($assessment['options_en'] ?? [0 => 'Not at all', 1 => 'A little', 2 => 'Often', 3 => 'Most of the time']);
                    $isGrid = !$isCustomOptions;
                @endphp
                <fieldset class="rounded-lg border border-reseda/10 bg-milk/70 p-4 sm:p-5">
                  <legend class="px-1 text-base font-bold leading-7 text-ink">
                    <span class="lang-th">{{ $index + 1 }}. {{ $qText }}</span>
                    <span class="lang-en hidden">{{ $index + 1 }}. {{ $qTextEn }}</span>
                  </legend>
                  <div class="mt-4 {{ $isGrid ? 'grid gap-2 sm:grid-cols-4' : 'flex flex-col gap-3' }}">
                    @foreach ($options as $value => $label)
                      @php
                        // Get the corresponding English label if array keys match
                        $labelEn = $optionsEn[$value] ?? $label;
                      @endphp
                      <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center {{ $isGrid ? 'justify-center' : 'justify-start text-left' }} rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                        <input type="radio" name="answers[{{ $index }}]" value="{{ $value }}" required @checked((string) old("answers.$index") === (string) $value) class="accent-reseda w-4 h-4 shrink-0">
                        <span class="lang-th">{{ $label }}</span>
                        <span class="lang-en hidden">{{ $labelEn }}</span>
                      </label>
                    @endforeach
                  </div>
                </fieldset>
              @endforeach
            </div>

            <div class="mt-8 grid gap-3 sm:grid-cols-[1fr_220px] sm:items-center">
              <p class="text-xs leading-6 text-ink/60" data-i18n="assessmentDisclaimer">
                ผลประเมินนี้เป็นการคัดกรองเบื้องต้น ไม่ใช่การวินิจฉัยทางการแพทย์ หากมีความเสี่ยงทำร้ายตัวเองหรือผู้อื่น ควรขอความช่วยเหลือฉุกเฉินทันที
              </p>
              <button type="submit" class="btn-primary w-full" data-i18n="submitAndResults">ส่งคำตอบและดูผล</button>
            </div>
          </form>

          <aside class="grid gap-4">
            <div class="rounded-lg border border-reseda/10 bg-white p-6 shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <h2 class="text-xl font-bold text-ink" data-i18n="scoringMethod">วิธีให้คะแนน</h2>
              <div class="mt-5 grid gap-3 text-sm text-ink/70">
                @php 
                  $options = $assessment['options'] ?? [0 => 'ไม่เลย', 1 => 'เล็กน้อย', 2 => 'บ่อยครั้ง', 3 => 'มากที่สุด']; 
                  $optionsEn = $assessment['options_en'] ?? [0 => 'Not at all', 1 => 'A little', 2 => 'Often', 3 => 'Most of the time'];
                @endphp
                @foreach ($options as $value => $label)
                  <div class="flex justify-between gap-4 rounded-md bg-milk px-4 py-3">
                    <span class="lang-th">{{ $label }}</span>
                    <span class="lang-en hidden">{{ $optionsEn[$value] ?? $label }}</span>
                    <strong>{{ $value }} <span data-i18n="points">คะแนน</span></strong>
                  </div>
                @endforeach
              </div>
            </div>

            <div class="overflow-hidden rounded-lg border border-reseda/10 bg-white shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <div class="p-6">
                <h2 class="text-xl font-bold text-ink" data-i18n="afterAssessmentTitle">หลังทำแบบประเมิน</h2>
                <p class="mt-3 text-sm leading-7 text-ink/70" data-i18n="afterAssessmentDesc">
                  ระบบจะรวมคะแนน คิดเป็นเปอร์เซ็นต์ และแสดงระดับพร้อมคำแนะนำที่เหมาะกับผลของคุณทันที
                </p>
              </div>
              <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-32 w-full object-cover object-[72%_48%]">
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>
