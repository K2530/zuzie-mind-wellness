<x-layouts.app :nav-items="$navItems" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-4xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">สรุปผลประเมิน Maslach Burnout Inventory (MBI) การวิเคราะห์ 3 มิติ</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          <div class="text-center mb-6">
            <h3 class="text-lg font-bold text-ink">โปรไฟล์ภาวะหมดไฟของคุณ</h3>
            <p class="mt-2 text-sm text-ink/70">MBI ไม่ได้ประเมินด้วยคะแนนรวม แต่ประเมินจาก 3 แกนหลักที่ประกอบกันเป็นภาวะ Burnout</p>
          </div>
          
          <div class="grid gap-6 md:grid-cols-3">
            @php
                $dimensions = [
                    'ee' => [
                        'title' => 'ความอ่อนล้าทางอารมณ์',
                        'desc' => 'Emotional Exhaustion',
                        'score' => $ee_score,
                        'level' => $ee_level,
                        'max' => 54, // 9 items * 6
                        'color' => $ee_level === 'high' ? '#8d3f24' : ($ee_level === 'moderate' ? '#c85f36' : '#5f8b61'),
                        'text' => $ee_level === 'high' ? 'สูง' : ($ee_level === 'moderate' ? 'ปานกลาง' : 'ต่ำ'),
                    ],
                    'dp' => [
                        'title' => 'การลดความเป็นบุคคล',
                        'desc' => 'Depersonalization',
                        'score' => $dp_score,
                        'level' => $dp_level,
                        'max' => 30, // 5 items * 6
                        'color' => $dp_level === 'high' ? '#8d3f24' : ($dp_level === 'moderate' ? '#c85f36' : '#5f8b61'),
                        'text' => $dp_level === 'high' ? 'สูง' : ($dp_level === 'moderate' ? 'ปานกลาง' : 'ต่ำ'),
                    ],
                    'pa' => [
                        'title' => 'ความสำเร็จส่วนบุคคล',
                        'desc' => 'Personal Accomplishment',
                        'score' => $pa_score,
                        'level' => $pa_level,
                        'max' => 48, // 8 items * 6
                        // PA is reversed: low score = high burnout = red
                        'color' => $pa_level === 'high' ? '#8d3f24' : ($pa_level === 'moderate' ? '#c85f36' : '#5f8b61'),
                        'text' => $pa_level === 'high' ? 'ต่ำ' : ($pa_level === 'moderate' ? 'ปานกลาง' : 'สูง'),
                    ]
                ];
            @endphp
            
            @foreach($dimensions as $key => $dim)
                @php 
                    $percent = min(100, ($dim['score'] / $dim['max']) * 100);
                @endphp
                <div class="flex flex-col items-center justify-center p-4 text-center rounded-xl border border-reseda/10 bg-milk/30 shadow-sm relative overflow-hidden">
                    @if($dim['level'] === 'high')
                        <div class="absolute top-0 inset-x-0 h-1" style="background-color: {{ $dim['color'] }}"></div>
                    @endif
                    <h4 class="text-sm font-bold min-h-10">{{ $dim['title'] }}</h4>
                    <p class="text-xs text-ink/50 mb-4">{{ $dim['desc'] }}</p>
                    
                    <div class="relative flex size-28 items-center justify-center rounded-full" style="background: conic-gradient({{ $dim['color'] }} {{ $percent }}%, #e2e8f0 0)">
                        <div class="absolute flex size-[96px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                            <span class="text-3xl font-bold" style="color: {{ $dim['color'] }}">{{ $dim['score'] }}</span>
                        </div>
                    </div>
                    
                    <p class="mt-5 text-sm font-bold" style="color: {{ $dim['color'] }}">
                        ระดับความรุนแรง: {{ $dim['text'] }}
                    </p>
                    @if($key === 'pa')
                        <p class="text-[10px] text-ink/40 mt-1">(คะแนนยิ่งต่ำ ยิ่งเสี่ยงหมดไฟ)</p>
                    @else
                        <p class="text-[10px] text-ink/40 mt-1">(คะแนนยิ่งสูง ยิ่งเสี่ยงหมดไฟ)</p>
                    @endif
                </div>
            @endforeach
          </div>
          
          @if($ee_level === 'high' || $dp_level === 'high' || $pa_level === 'high')
            <div class="mt-6 rounded-lg bg-warning/10 p-5 text-sm text-warning-dark leading-6 border-l-4 border-warning">
              <strong>ข้อควรระวัง:</strong> ผลประเมินของคุณมีอย่างน้อย 1 มิติที่อยู่ในเกณฑ์ความเสี่ยงสูง (High Burnout Risk) ซึ่งอาจส่งผลกระทบต่อสุขภาพจิต ประสิทธิภาพการทำงาน และความสัมพันธ์กับผู้รับบริการ ควรหาเวลาพักผ่อน ปรับสมดุลชีวิตการทำงาน และอาจพิจารณาปรึกษาผู้เชี่ยวชาญ
            </div>
          @else
            <div class="mt-6 rounded-lg bg-primary/10 p-5 text-sm text-primary-dark leading-6 border-l-4 border-primary">
              <strong>คำแนะนำ:</strong> ภาพรวมของคุณดูสามารถจัดการกับความเครียดได้ค่อนข้างดี ขอให้รักษาสมดุลแบบนี้ไว้ หากรู้สึกเหนื่อยล้าอย่าลืมให้รางวัลตัวเองด้วยการพักผ่อนนะครับ
            </div>
          @endif
          
        </div>
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปคำตอบของคุณ (22 ข้อ)
        </h2>
        
        <div class="space-y-4">
          @foreach ($assessment['questions'] as $index => $q)
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/50 p-4">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/20 text-sm font-bold text-ink/80">
                {{ $index + 1 }}
              </span>
              <div class="flex-1 pt-1">
                <p class="text-base text-ink/80">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="mt-3 flex flex-wrap items-center gap-2">
                  <span class="rounded-full px-3 py-1 text-sm font-semibold bg-primary/20 text-primary">
                    {{ $assessment['options'][$answers[$index]] }}
                  </span>
                  <span class="text-xs text-ink/50 bg-ink/5 px-2 py-1 rounded-md ml-2">
                    คะแนน: {{ $answers[$index] }}
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
