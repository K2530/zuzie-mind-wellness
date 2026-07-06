<x-app-layout>
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-4xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">สรุปผลประเมิน Screen for Child Anxiety Related Disorders (SCARED)</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          @php
            $isTotalHigh = $total_score >= $cutoffs['total'];
            $isTotalSevere = $total_score >= 30;
            $totalStatusText = $isTotalSevere ? 'เสี่ยงต่อโรควิตกกังวลสูง (มีอาการจำเพาะ)' : ($isTotalHigh ? 'อาจมีโรควิตกกังวล (Anxiety Disorder)' : 'อยู่ในเกณฑ์ปกติ');
            $totalColor = $isTotalSevere ? '#8d3f24' : ($isTotalHigh ? '#c85f36' : '#5f8b61');
            $totalPercent = min(100, ($total_score / 82) * 100);
          @endphp
          
          <div class="flex flex-col items-center justify-center p-6 text-center">
            <h3 class="text-xl font-bold">คะแนนรวมความวิตกกังวล (Total Score)</h3>
            
            <div class="relative mt-6 flex size-40 items-center justify-center rounded-full" style="background: conic-gradient({{ $totalColor }} {{ $totalPercent }}%, #e2e8f0 0)">
                <div class="absolute flex size-[148px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                    <span class="text-4xl font-bold" style="color: {{ $totalColor }}">{{ $total_score }}</span>
                    <span class="text-sm text-ink/50">เต็ม 82</span>
                </div>
            </div>
            
            <p class="mt-6 text-xl font-bold" style="color: {{ $totalColor }}">
                {{ $totalStatusText }}
            </p>
          </div>
          
          @if($isTotalHigh)
            <div class="mt-4 rounded-lg bg-warning/10 p-4 text-sm text-warning-dark leading-6">
              <strong>คำแนะนำ:</strong> คะแนนประเมินเบื้องต้นบ่งชี้ว่าเด็กอาจมีความเสี่ยงต่อภาวะวิตกกังวล ควรปรึกษาแพทย์หรือผู้เชี่ยวชาญด้านสุขภาพจิตเด็กและวัยรุ่นเพื่อรับการประเมินที่ละเอียดต่อไป
            </div>
          @endif
        </div>
      </section>

      <section class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        @php
            $categories = [
                'panic' => [
                    'title' => 'โรคตื่นตระหนก', 
                    'desc' => 'Panic Disorder / Somatic Symptoms',
                    'max' => 26
                ],
                'gad' => [
                    'title' => 'โรควิตกกังวลทั่วไป', 
                    'desc' => 'Generalized Anxiety Disorder',
                    'max' => 18
                ],
                'sad' => [
                    'title' => 'วิตกกังวลต่อการแยกจาก', 
                    'desc' => 'Separation Anxiety Disorder',
                    'max' => 16
                ],
                'soc' => [
                    'title' => 'โรคกลัวการเข้าสังคม', 
                    'desc' => 'Social Anxiety Disorder',
                    'max' => 14
                ],
                'sch' => [
                    'title' => 'ภาวะหลีกหนีโรงเรียน', 
                    'desc' => 'Significant School Avoidance',
                    'max' => 8
                ],
            ];
        @endphp

        @foreach($categories as $key => $cat)
            @php 
                $s = $scale_scores[$key];
                $c = $cutoffs[$key];
                
                $isHigh = $s >= $c;
                
                $statusText = $isHigh ? 'เสี่ยง / พบอาการ' : 'ปกติ';
                $statusColor = $isHigh ? '#c85f36' : '#5f8b61';
                $percent = ($s / $cat['max']) * 100;
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
                <p class="mt-2 text-xs text-ink/70 min-h-8">{{ $cat['desc'] }}</p>
                <p class="mt-1 text-[10px] text-ink/40">เกณฑ์เสี่ยง: >= {{ $c }} คะแนน</p>
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
                  <span class="text-xs text-ink/50 bg-ink/5 px-2 py-1 rounded-md ml-2">
                    คะแนนที่ได้: {{ $answers[$index] }}
                  </span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>

    </div>
  </div>
</x-app-layout>
