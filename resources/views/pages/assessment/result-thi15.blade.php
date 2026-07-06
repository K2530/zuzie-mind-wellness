<x-layouts.app :nav-items="$navItems" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-3xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">ผลการประเมินระดับความสุขและสุขภาพจิต</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-10 text-center">
          @php
              if ($level === 'high') {
                  $color = '#5f8b61'; // Green
                  $bg_color = '#5f8b6115';
                  $percent = ($score_total / 45) * 100;
                  $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM5.5 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .428.77A4.982 4.982 0 0 1 8 13.5a4.98 4.98 0 0 1-3.928-2.73A.5.5 0 0 1 4 10.5z"/></svg>';
                  $desc = 'ยอดเยี่ยมมากครับ! คุณมีสุขภาพจิตที่ดีและมีความสุขในชีวิตเป็นอย่างมาก ขอให้รักษาพลังบวกแบบนี้ต่อไปเรื่อยๆ นะครับ';
              } elseif ($level === 'moderate') {
                  $color = '#d97706'; // Orange/Yellow
                  $bg_color = '#d9770615';
                  $percent = ($score_total / 45) * 100;
                  $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM5.5 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM4 11a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 11z"/></svg>';
                  $desc = 'คุณมีความสุขอยู่ในเกณฑ์ปกติทั่วไปครับ อาจมีบางเรื่องที่เข้ามากระทบจิตใจบ้าง แต่คุณก็สามารถรับมือกับมันได้ดีเลยทีเดียวครับ';
              } else {
                  $color = '#8d3f24'; // Red
                  $bg_color = '#8d3f2415';
                  $percent = ($score_total / 45) * 100;
                  $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM5.5 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM4.285 10.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 8.5c1.28 0 2.4.684 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 7.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/></svg>';
                  $desc = 'ช่วงนี้คุณอาจกำลังเผชิญกับเรื่องที่บั่นทอนจิตใจ ทำให้ความสุขลดลง หากรู้สึกว่ารับมือไม่ไหว การได้พูดคุยกับใครสักคนหรือขอรับคำปรึกษาจากผู้เชี่ยวชาญอาจช่วยให้ดีขึ้นได้นะครับ';
              }
          @endphp

          <div class="relative mx-auto flex size-48 items-center justify-center rounded-full" style="background: conic-gradient({{ $color }} {{ $percent }}%, #e2e8f0 0)">
            <div class="absolute flex size-[172px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
              <span class="text-sm font-semibold text-ink/50 uppercase tracking-widest mb-1">ผลคะแนน</span>
              <span class="text-5xl font-bold" style="color: {{ $color }}">{{ $score_total }}</span>
              <span class="text-sm font-semibold text-ink/40 mt-1">เต็ม 45</span>
            </div>
          </div>

          <div class="mt-8 rounded-2xl p-6 border" style="background-color: {{ $bg_color }}; border-color: {{ $color }}30">
            <div class="flex flex-col items-center gap-3">
              <div class="flex size-14 items-center justify-center rounded-full bg-milk text-white" style="color: {{ $color }}; box-shadow: 0 4px 12px {{ $color }}30">
                {!! $icon !!}
              </div>
              <h3 class="text-2xl font-bold" style="color: {{ $color }}">{{ $level_text }}</h3>
              <p class="text-ink/80 max-w-lg mt-2 leading-relaxed">{{ $desc }}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปการตอบคำถามของคุณ (15 ข้อ)
        </h2>
        
        <div class="space-y-3">
          @foreach($assessment['questions'] as $index => $q)
            @php 
                $ans = $answers[$index]; 
                $text_ans = $assessment['options'][$ans];
                $is_negative = in_array($index, [3, 4, 5]);
            @endphp
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/30 p-4 hover:bg-milk/60 transition-colors">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/15 text-sm font-bold text-ink/70">
                {{ $index + 1 }}
              </span>
              <div class="flex-1 pt-1 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                <p class="text-ink/80 text-sm">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="flex items-center gap-2 shrink-0">
                  <span class="rounded-full px-4 py-1 text-xs font-semibold bg-white border border-ink/10 shadow-sm text-ink/70">
                    {{ $text_ans }}
                  </span>
                  @if($is_negative)
                    <span class="text-[10px] text-ink/40 bg-ink/5 px-2 py-0.5 rounded-full" title="ข้อคำถามเชิงลบ มีการกลับคะแนน (Reverse Score)">Reverse</span>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>

    </div>
  </div>
</x-layouts.app>
