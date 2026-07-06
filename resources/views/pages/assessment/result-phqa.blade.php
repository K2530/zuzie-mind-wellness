<x-layouts.app :nav-items="$navItems" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-3xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">ผลการประเมินระดับความรุนแรงของภาวะซึมเศร้า</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-10 text-center">
          @if($suicide_risk)
            <div class="mb-10 rounded-2xl bg-red-50 p-6 border border-red-200 animate-pulse">
              <div class="flex flex-col items-center gap-3">
                <div class="flex size-14 items-center justify-center rounded-full bg-red-100 text-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-red-700">แจ้งเตือนความเสี่ยง!</h3>
                <p class="text-red-800 max-w-lg mt-2 leading-relaxed">
                  จากผลการประเมินพบว่าน้องมีความเสี่ยงที่จะทำร้ายตนเองหรือมีความคิดอยากตาย <strong>ควรแจ้งให้ผู้ปกครองทราบและพาไปปรึกษาแพทย์ผู้เชี่ยวชาญทันที</strong> หรือโทรสายด่วนสุขภาพจิต 1323 ตลอด 24 ชั่วโมง
                </p>
              </div>
            </div>
          @endif

          @php
              if ($level === 'normal') {
                  $color = '#5f8b61'; // Green
                  $bg_color = '#5f8b6115';
                  $percent = ($score_total / 27) * 100;
                  $desc = 'ขณะนี้ยังไม่พบภาวะซึมเศร้าที่ชัดเจน น้องมีอารมณ์และพฤติกรรมอยู่ในเกณฑ์ปกติครับ';
              } elseif ($level === 'mild') {
                  $color = '#d97706'; // Orange/Yellow
                  $bg_color = '#d9770615';
                  $percent = ($score_total / 27) * 100;
                  $desc = 'มีภาวะซึมเศร้าเล็กน้อย ควรหากิจกรรมที่ช่วยผ่อนคลายอารมณ์ หรือพูดคุยปรึกษาบุคคลใกล้ชิดที่ไว้ใจเพื่อระบายความเครียดครับ';
              } elseif ($level === 'moderate') {
                  $color = '#ea580c'; // Orange
                  $bg_color = '#ea580c15';
                  $percent = ($score_total / 27) * 100;
                  $desc = 'มีภาวะซึมเศร้าปานกลาง เริ่มมีผลกระทบต่อการใช้ชีวิตประจำวัน ควรปรึกษาแพทย์เพื่อประเมินอาการและรับคำแนะนำในการดูแลครับ';
              } elseif ($level === 'moderate_severe') {
                  $color = '#dc2626'; // Red
                  $bg_color = '#dc262615';
                  $percent = ($score_total / 27) * 100;
                  $desc = 'มีภาวะซึมเศร้ามาก ควรปรึกษาแพทย์หรือจิตแพทย์โดยเร็ว เพื่อวินิจฉัยและหาแนวทางบำบัดรักษาครับ';
              } else {
                  $color = '#7f1d1d'; // Dark Red
                  $bg_color = '#7f1d1d15';
                  $percent = ($score_total / 27) * 100;
                  $desc = 'มีภาวะซึมเศร้ารุนแรง ส่งผลกระทบอย่างมากต่อการเรียนและการใช้ชีวิต ต้องได้รับการดูแลจากแพทย์เฉพาะทางอย่างเร่งด่วนครับ';
              }
          @endphp

          <div class="relative mx-auto flex size-48 items-center justify-center rounded-full" style="background: conic-gradient({{ $color }} {{ $percent }}%, #e2e8f0 0)">
            <div class="absolute flex size-[172px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
              <span class="text-sm font-semibold text-ink/50 uppercase tracking-widest mb-1">ผลคะแนน</span>
              <span class="text-5xl font-bold" style="color: {{ $color }}">{{ $score_total }}</span>
              <span class="text-sm font-semibold text-ink/40 mt-1">เต็ม 27</span>
            </div>
          </div>

          <div class="mt-8 rounded-2xl p-6 border" style="background-color: {{ $bg_color }}; border-color: {{ $color }}30">
            <div class="flex flex-col items-center gap-3">
              <h3 class="text-2xl font-bold" style="color: {{ $color }}">{{ $level_text }}</h3>
              <p class="text-ink/80 max-w-lg mt-2 leading-relaxed">{{ $desc }}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปการตอบคำถาม (ส่วนที่ 1: อาการ 9 ข้อ)
        </h2>
        
        <div class="space-y-3">
          @for($i = 0; $i < 9; $i++)
            @php 
                $q = $assessment['questions'][$i];
                $ans = $answers[$i]; 
                $text_ans = $assessment['options'][$ans];
            @endphp
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/30 p-4 hover:bg-milk/60 transition-colors">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/15 text-sm font-bold text-ink/70">
                {{ $i + 1 }}
              </span>
              <div class="flex-1 pt-1 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                <p class="text-ink/80 text-sm">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="flex items-center gap-2 shrink-0">
                  <span class="rounded-full px-4 py-1 text-xs font-semibold bg-white border border-ink/10 shadow-sm text-ink/70 {{ $ans > 0 ? 'text-red-600 bg-red-50 border-red-200' : '' }}">
                    {{ $text_ans }}
                  </span>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink text-red-600 flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg>
          ส่วนที่ 2: การคัดกรองความเสี่ยงเพิ่มเติม
        </h2>
        
        <div class="space-y-3">
          @for($i = 9; $i < 11; $i++)
            @php 
                $q = $assessment['questions'][$i];
                $ans = $answers[$i]; 
                $text_ans = $ans == 1 ? 'ใช่' : 'ไม่ใช่';
            @endphp
            <div class="flex items-start gap-4 rounded-xl border {{ $ans == 1 ? 'border-red-200 bg-red-50' : 'border-reseda/10 bg-milk/30' }} p-4 transition-colors">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full {{ $ans == 1 ? 'bg-red-100 text-red-600' : 'bg-reseda/15 text-ink/70' }} text-sm font-bold">
                {{ $i === 9 ? 'A' : 'B' }}
              </span>
              <div class="flex-1 pt-1 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                <p class="{{ $ans == 1 ? 'text-red-800' : 'text-ink/80' }} text-sm font-medium">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="flex items-center gap-2 shrink-0">
                  <span class="rounded-full px-4 py-1 text-xs font-semibold bg-white border shadow-sm {{ $ans == 1 ? 'text-red-600 border-red-200' : 'text-ink/70 border-ink/10' }}">
                    {{ $text_ans }}
                  </span>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </section>

    </div>
  </div>
</x-layouts.app>
