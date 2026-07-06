<x-layouts.app :nav-items="config('zuzie.nav_items')" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-4xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">สรุปผลประเมินจุดแข็งและจุดอ่อน (SDQ)</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          @php
            $isTotalProblem = $total_difficulties >= $cutoffs['total']['problem'];
            $isTotalRisk = $total_difficulties >= $cutoffs['total']['risk'] && !$isTotalProblem;
            $totalStatusText = $isTotalProblem ? 'กลุ่มมีปัญหา (Abnormal)' : ($isTotalRisk ? 'กลุ่มเสี่ยง (Borderline)' : 'กลุ่มปกติ (Normal)');
            $totalColor = $isTotalProblem ? '#8d3f24' : ($isTotalRisk ? '#c85f36' : '#5f8b61');
            $totalPercent = min(100, ($total_difficulties / 40) * 100);
          @endphp
          
          <div class="flex flex-col items-center justify-center p-6 text-center">
            <h3 class="text-xl font-bold">คะแนนรวมความยากลำบาก (Total Difficulties Score)</h3>
            <div class="mt-1 text-sm text-ink/70">พิจารณาจาก 4 ด้าน (ไม่รวมจุดแข็ง)</div>
            
            <div class="relative mt-6 flex size-40 items-center justify-center rounded-full" style="background: conic-gradient({{ $totalColor }} {{ $totalPercent }}%, #e2e8f0 0)">
                <div class="absolute flex size-[148px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                    <span class="text-4xl font-bold" style="color: {{ $totalColor }}">{{ $total_difficulties }}</span>
                    <span class="text-sm text-ink/50">เต็ม 40</span>
                </div>
            </div>
            
            <p class="mt-6 text-xl font-bold" style="color: {{ $totalColor }}">
                {{ $totalStatusText }}
            </p>
          </div>
          
        </div>
      </section>

      <section class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        @php
            $categories = [
                'emotional' => ['title' => 'พฤติกรรมด้านอารมณ์', 'key' => 'emotional'],
                'conduct' => ['title' => 'ปัญหาพฤติกรรมเกเร', 'key' => 'conduct'],
                'hyperactivity' => ['title' => 'สมาธิสั้น/อยู่ไม่นิ่ง', 'key' => 'hyperactivity'],
                'peer' => ['title' => 'ความสัมพันธ์กับเพื่อน', 'key' => 'peer'],
                'prosocial' => ['title' => 'สัมพันธภาพทางสังคม (จุดแข็ง)', 'key' => 'prosocial'],
            ];
        @endphp

        @foreach($categories as $key => $cat)
            @php 
                $s = $scale_scores[$key];
                $c = $cutoffs[$key];
                
                if ($key === 'prosocial') {
                    // For prosocial, higher is better
                    $isProblem = $s <= $c['problem'];
                    $isRisk = $s == $c['risk'];
                } else {
                    $isProblem = $s >= $c['problem'];
                    $isRisk = $s >= $c['risk'] && !$isProblem;
                }
                
                $statusText = $isProblem ? 'กลุ่มมีปัญหา' : ($isRisk ? 'กลุ่มเสี่ยง' : 'กลุ่มปกติ');
                $statusColor = $isProblem ? '#8d3f24' : ($isRisk ? '#c85f36' : '#5f8b61');
                $percent = ($s / 10) * 100;
            @endphp
            <div class="card flex flex-col items-center justify-center p-5 text-center border-t-4" style="border-top-color: {{ $statusColor }}">
                <h3 class="text-base font-bold min-h-12">{{ $cat['title'] }}</h3>
                <div class="relative mt-2 flex size-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $statusColor }} {{ $percent }}%, #e2e8f0 0)">
                    <div class="absolute flex size-[84px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                        <span class="text-2xl font-bold" style="color: {{ $statusColor }}">{{ $s }}</span>
                    </div>
                </div>
                <p class="mt-4 text-base font-semibold" style="color: {{ $statusColor }}">
                    {{ $statusText }}
                </p>
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
                <div class="mt-3 flex flex-wrap items-center gap-2">
                  <span class="rounded-full px-3 py-1 text-sm font-semibold bg-primary/20 text-primary">
                    {{ $assessment['options'][$answers[$index]] }}
                  </span>
                  @if(in_array($index, [6, 10, 13, 20, 24]))
                  <span class="text-xs text-ink/50 bg-ink/5 px-2 py-1 rounded-md ml-2">
                    คะแนนที่ได้: {{ $scored_answers[$index] }} (Reverse Scored)
                  </span>
                  @else
                  <span class="text-xs text-ink/50 bg-ink/5 px-2 py-1 rounded-md ml-2">
                    คะแนนที่ได้: {{ $scored_answers[$index] }}
                  </span>
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
