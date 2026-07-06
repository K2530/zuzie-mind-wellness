<x-layouts.app :nav-items="config('zuzie.nav_items')" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-3xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">สรุปผลประเมิน Generalized Anxiety Disorder 7-item (GAD-7)</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          @php
            $percent = min(100, ($total_score / 21) * 100);
            $color = $band['color'];
          @endphp
          
          <div class="flex flex-col items-center justify-center p-6 text-center">
            <h3 class="text-xl font-bold">คะแนนรวมความวิตกกังวล</h3>
            
            <div class="relative mt-6 flex size-40 items-center justify-center rounded-full" style="background: conic-gradient({{ $color }} {{ $percent }}%, #e2e8f0 0)">
                <div class="absolute flex size-[148px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                    <span class="text-4xl font-bold" style="color: {{ $color }}">{{ $total_score }}</span>
                    <span class="text-sm text-ink/50">เต็ม 21</span>
                </div>
            </div>
            
            <p class="mt-6 text-2xl font-bold" style="color: {{ $color }}">
                {{ $band['label'] }}
            </p>
          </div>
          
          <div class="mt-4 rounded-lg bg-reseda/10 p-4 text-sm text-ink/80 leading-6 border-l-4" style="border-left-color: {{ $color }}; background-color: {{ $color }}15;">
            <strong>คำแนะนำ:</strong> {{ $band['recommendation'] }}
          </div>
        </div>
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
</x-layouts.app>
