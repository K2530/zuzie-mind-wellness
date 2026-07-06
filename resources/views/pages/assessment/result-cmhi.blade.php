<x-layouts.app :nav-items="$navItems" title="ผลการประเมิน">
  @section('title', 'ผลประเมิน | ' . $assessment['title'])

  <div class="relative bg-milk pt-[70px] sm:pt-[90px]">
    <div class="container mx-auto px-4 py-8 lg:max-w-4xl">
      <a href="/assessment" class="text-sm font-semibold text-reseda hover:text-ink mb-6 inline-block">‹ กลับไปเลือกแบบประเมิน</a>

      <div class="card flex flex-col sm:flex-row gap-6 p-6 sm:p-8 border-t-4 mb-6" style="border-top-color: {{ $band['tone'] }}">
        <div class="flex-1">
          <h1 class="text-2xl font-bold text-ink mb-2">ผลการประเมิน: {{ $assessment['title'] }}</h1>
          
          <div class="mt-4 p-4 rounded-xl bg-ink/5 border border-ink/10 flex items-start gap-4">
             <div class="flex-1">
               <h2 class="text-xl font-bold" style="color: {{ $band['tone'] }}">ภาพรวม: {{ $band['label'] }}</h2>
               <p class="mt-2 text-sm text-ink/80 leading-relaxed">
                 {{ $band['summary'] }}
               </p>
             </div>
             <div class="flex flex-col items-center justify-center p-3 rounded-lg bg-white shadow-sm border border-reseda/10 shrink-0 min-w-[100px]">
               <span class="text-xs text-ink/60 font-semibold mb-1">คะแนนรวม</span>
               <span class="text-3xl font-bold" style="color: {{ $band['tone'] }}">{{ $total_score }}</span>
               <span class="text-xs text-ink/50 mt-1">/ {{ $maxScore }}</span>
             </div>
          </div>
        </div>
      </div>

      <section class="grid gap-5 md:grid-cols-2 mb-8">
        @php
            $categories = [
                'social_capital' => [
                    'title' => 'ด้านที่ 1: ทุนทางสังคม', 
                    'max' => 40
                ],
                'environment' => [
                    'title' => 'ด้านที่ 2: สิ่งแวดล้อมชุมชน', 
                    'max' => 24
                ],
                'economic_family' => [
                    'title' => 'ด้านที่ 3: สภาพเศรษฐกิจและครอบครัว', 
                    'max' => 44
                ],
                'health_threats' => [
                    'title' => 'ด้านที่ 4: ปัญหาสุขภาพจิตและภัยคุกคาม', 
                    'max' => 36
                ],
            ];
        @endphp

        @foreach($categories as $key => $cat)
            @php 
                $s = $scale_scores[$key];
                $b = $scale_bands[$key];
                $percent = ($s / $cat['max']) * 100;
            @endphp
            <div class="card flex flex-col p-5 border-t-4" style="border-top-color: {{ $b['tone'] }}">
                <h3 class="text-base font-bold text-center h-12">{{ $cat['title'] }}</h3>
                <div class="flex justify-center">
                  <div class="relative mt-2 flex size-20 items-center justify-center rounded-full" style="background: conic-gradient({{ $b['tone'] }} {{ $percent }}%, #e2e8f0 0)">
                      <div class="absolute flex size-[72px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                          <span class="text-xl font-bold" style="color: {{ $b['tone'] }}">{{ $s }}<span class="text-xs text-ink/50">/{{ $cat['max'] }}</span></span>
                      </div>
                  </div>
                </div>
                <p class="mt-4 text-base font-semibold text-center" style="color: {{ $b['tone'] }}">
                    ระดับ{{ $b['label'] }}
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
                  @if(in_array($index, [21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32]))
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
