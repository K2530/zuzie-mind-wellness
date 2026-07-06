<x-layouts.app :nav-items="$navItems" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-4xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">ผลการประเมินคัดกรอง 4 ภาวะ</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          <p class="text-base text-ink/80 leading-7">
            ผลการประเมินนี้เป็นการคัดกรองเบื้องต้น หากพบว่ามีแนวโน้มความเสี่ยงในด้านใดด้านหนึ่ง (คะแนน 6 ขึ้นไปจาก 10 ข้อ) ควรได้รับการประเมินเพิ่มเติมหรือปรึกษาแพทย์ผู้เชี่ยวชาญ
          </p>
        </div>
      </section>

      <section class="grid gap-5 md:grid-cols-2">
        @php
            $categories = [
                'slow_learner' => ['title' => '1. ภาวะเรียนรู้ช้า (Slow Learner)', 'color' => '#8d3f24', 'next' => 'แบบคัดกรองบุคคลที่มีความบกพร่องทางสติปัญญาของ สพฐ.'],
                'ld' => ['title' => '2. ภาวะบกพร่องทางการเรียนรู้ (LD)', 'color' => '#c85f36', 'next' => 'แบบคัดกรอง KUS-SI (เฉพาะส่วนของ LD) หรือของ สพฐ.'],
                'adhd' => ['title' => '3. โรคสมาธิสั้น (ADHD)', 'color' => '#e8a365', 'next' => 'แบบคัดกรอง SNAP-IV หรือ KUS-SI (เฉพาะส่วนของ ADHD)'],
                'autism' => ['title' => '4. กลุ่มอาการออทิสติก (Autism)', 'color' => '#b3794f', 'next' => 'แบบคัดกรอง PDDSQ หรือ KUS-SI (เฉพาะส่วนของ Autism)'],
            ];
        @endphp

        @foreach($categories as $key => $cat)
            @php 
                $s = $scores[$key];
                $isAtRisk = $s >= 6;
                $statusText = $isAtRisk ? 'มีแนวโน้มความเสี่ยง' : 'ปกติ';
                $statusColor = $isAtRisk ? $cat['color'] : '#5f8b61';
                $percent = ($s / 10) * 100;
            @endphp
            <div class="card flex flex-col items-center justify-center p-6 text-center border-t-4" style="border-top-color: {{ $statusColor }}">
                <h3 class="text-lg font-bold">{{ $cat['title'] }}</h3>
                <div class="relative mt-6 flex size-32 items-center justify-center rounded-full" style="background: conic-gradient({{ $statusColor }} {{ $percent }}%, #e2e8f0 0)">
                    <div class="absolute flex size-[116px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                        <span class="text-3xl font-bold" style="color: {{ $statusColor }}">{{ $s }}</span>
                        <span class="text-xs text-ink/50">คะแนน</span>
                    </div>
                </div>
                <p class="mt-4 text-lg font-semibold" style="color: {{ $statusColor }}">
                    {{ $statusText }}
                </p>
                @if($isAtRisk)
                <p class="mt-3 text-sm text-ink/70 bg-error/10 p-3 rounded-lg w-full">
                    แนะนำให้ประเมินต่อด้วย:<br><strong>{{ $cat['next'] }}</strong>
                </p>
                @else
                <p class="mt-3 text-sm text-ink/70">
                    คะแนนอยู่ในเกณฑ์ปกติ ไม่พบความเสี่ยงที่ชัดเจนในด้านนี้
                </p>
                @endif
            </div>
        @endforeach
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปคำตอบของคุณ
        </h2>
        
        <div class="space-y-4">
          @foreach ($assessment['questions'] as $index => $q)
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/50 p-4">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/20 text-sm font-bold text-ink/80">
                {{ $index + 1 }}
              </span>
              <div class="flex-1 pt-1">
                <p class="text-base text-ink/80">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="mt-3 flex items-center gap-2">
                  <span class="rounded-full px-3 py-1 text-sm font-semibold {{ $answers[$index] == 1 ? 'bg-primary/20 text-primary' : 'bg-reseda/10 text-ink/60' }}">
                    {{ $answers[$index] == 1 ? 'ใช่ (1)' : 'ไม่ใช่ (0)' }}
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
