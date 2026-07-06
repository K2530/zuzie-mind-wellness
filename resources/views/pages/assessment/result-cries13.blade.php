<x-layouts.app :nav-items="config('zuzie.nav_items')" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-3xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">ประเมินผลกระทบจากเหตุการณ์ภัยพิบัติ</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-10 text-center">
          @php
              if ($level === 'high_risk') {
                  $color = '#dc2626'; // Red
                  $bg_color = '#dc262615';
                  $percent = ($score_total / 65) * 100;
                  $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>';
                  $desc = 'มีความเสี่ยงที่จะเกิดภาวะ PTSD (บาดแผลทางใจหลังเจอเหตุการณ์รุนแรง) ควรแจ้งให้ผู้ปกครองทราบและพาไปปรึกษาจิตแพทย์เด็กและวัยรุ่น หรือโทรสายด่วนสุขภาพจิต 1323 ครับ';
              } else {
                  $color = '#5f8b61'; // Green
                  $bg_color = '#5f8b6115';
                  $percent = ($score_total / 65) * 100;
                  $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM5.5 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .428.77A4.982 4.982 0 0 1 8 13.5a4.98 4.98 0 0 1-3.928-2.73A.5.5 0 0 1 4 10.5z"/></svg>';
                  $desc = 'มีความเสี่ยงต่อภาวะ PTSD อยู่ในเกณฑ์ต่ำ ถือว่าน้องสามารถรับมือกับความเครียดจากเหตุการณ์ที่ผ่านมาได้ค่อนข้างดีครับ อย่างไรก็ตามหากมีอาการกังวลใจสามารถปรึกษาผู้ปกครองหรือครูได้เสมอนะครับ';
              }
          @endphp

          <div class="relative mx-auto flex size-48 items-center justify-center rounded-full" style="background: conic-gradient({{ $color }} {{ $percent }}%, #e2e8f0 0)">
            <div class="absolute flex size-[172px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
              <span class="text-sm font-semibold text-ink/50 uppercase tracking-widest mb-1">ผลคะแนน</span>
              <span class="text-5xl font-bold" style="color: {{ $color }}">{{ $score_total }}</span>
              <span class="text-sm font-semibold text-ink/40 mt-1">เต็ม 65</span>
            </div>
          </div>

          <div class="mt-8 rounded-2xl p-6 border {{ $level === 'high_risk' ? 'animate-pulse' : '' }}" style="background-color: {{ $bg_color }}; border-color: {{ $color }}30">
            <div class="flex flex-col items-center gap-3">
              <div class="flex size-14 items-center justify-center rounded-full bg-milk text-white" style="color: {{ $color }}; box-shadow: 0 4px 12px {{ $color }}30">
                {!! $icon !!}
              </div>
              <h3 class="text-2xl font-bold" style="color: {{ $color }}">{{ $level_text }}</h3>
              <p class="text-ink/80 max-w-lg mt-2 leading-relaxed text-base">{{ $desc }}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปการตอบคำถามของคุณ (13 ข้อ)
        </h2>
        
        <div class="space-y-3">
          @foreach($assessment['questions'] as $index => $q)
            @php 
                $ans = $answers[$index]; 
                $mapped = $mapped_answers[$index];
                $text_ans = $assessment['options'][$ans];
            @endphp
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/30 p-4 hover:bg-milk/60 transition-colors">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/15 text-sm font-bold text-ink/70">
                {{ $index + 1 }}
              </span>
              <div class="flex-1 pt-1 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                <p class="text-ink/80 text-sm font-medium">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="flex items-center gap-2 shrink-0">
                  <span class="rounded-full px-4 py-1 text-xs font-semibold bg-white border border-ink/10 shadow-sm text-ink/70 {{ $mapped > 0 ? 'text-orange-700 bg-orange-50 border-orange-200' : '' }}">
                    {{ $text_ans }} ({{ $mapped }} คะแนน)
                  </span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>

    </div>
  </div>
</x-layouts.app>
