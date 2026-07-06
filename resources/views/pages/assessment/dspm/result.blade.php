<x-layouts.app :nav-items="$navItems" title="ผลประเมิน | คัดกรองพัฒนาการเด็กปฐมวัย">
  
  <div class="relative bg-milk pt-[70px] sm:pt-[90px]">
    <div class="container mx-auto px-4 py-8 lg:max-w-4xl">
      <a href="{{ route('dspm.index') }}" class="text-sm font-semibold text-reseda hover:text-ink">‹ กลับไปเลือกช่วงอายุ</a>

 'หน้าแรก', 'url' => '/'],
          ['label' => 'ประเมินพัฒนาการเด็กปฐมวัย (DSPM)', 'url' => route('dspm.index')],
          ['label' => 'ผลประเมิน']
      ]" class="mb-6" />

      @php
         $tone = $is_delayed ? '#c85f36' : '#5f8b61';
         $label = $is_delayed ? 'สงสัยล่าช้า' : 'สมวัย';
         $summary = $is_delayed 
            ? 'พบว่ามีพัฒนาการบางด้านที่ยังไม่ผ่านเกณฑ์ ควรได้รับการส่งเสริมและกระตุ้นพัฒนาการในด้านนั้นๆ หากยังไม่ดีขึ้นควรปรึกษาเจ้าหน้าที่สาธารณสุขหรือแพทย์' 
            : 'เด็กมีพัฒนาการที่เหมาะสมกับช่วงวัย ควรส่งเสริมพัฒนาการในขั้นต่อไปอย่างสม่ำเสมอ';
      @endphp

      <div class="card flex flex-col sm:flex-row gap-6 p-6 sm:p-8 border-t-4 mb-6" style="border-top-color: {{ $tone }}">
        <div class="flex-1">
          <h1 class="text-2xl font-bold text-ink mb-2">ผลการประเมินพัฒนาการ (ช่วงอายุ {{ $range['label'] }})</h1>
          
          <div class="mt-4 p-4 rounded-xl bg-ink/5 border border-ink/10 flex items-start gap-4">
             <div class="flex-1">
               <h2 class="text-xl font-bold" style="color: {{ $tone }}">ภาพรวม: {{ $label }}</h2>
               <p class="mt-2 text-sm text-ink/80 leading-relaxed">
                 {{ $summary }}
               </p>
             </div>
             <div class="flex flex-col items-center justify-center p-3 rounded-lg bg-white shadow-sm border border-reseda/10 shrink-0 min-w-[100px]">
               <span class="text-xs text-ink/60 font-semibold mb-1">ผลประเมิน</span>
               <span class="text-xl font-bold" style="color: {{ $tone }}">{{ $label }}</span>
             </div>
          </div>
        </div>
      </div>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปคำตอบของคุณ
        </h2>
        
        <div class="space-y-4">
          @foreach ($range['items'] as $index => $item)
            @php
               $is_pass = $answers[$index] === 'pass';
               $itemColor = $is_pass ? 'bg-success/10 text-success' : 'bg-warning-dark/10 text-warning-dark';
            @endphp
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/50 p-4">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full {{ $itemColor }} text-sm font-bold">
                @if($is_pass)
                  <i class="fas fa-check"></i>
                @else
                  <i class="fas fa-times"></i>
                @endif
              </span>
              <div class="flex-1 pt-1">
                <div class="mb-2">
                  <span class="inline-block px-2 py-1 text-xs font-semibold rounded bg-primary/10 text-primary">
                    {{ $item['domain'] }}
                  </span>
                </div>
                <p class="text-base text-ink/80">{{ $item['text'] }}</p>
                <div class="mt-3 flex flex-wrap items-center gap-2">
                  <span class="rounded-full px-3 py-1 text-sm font-semibold {{ $itemColor }}">
                    {{ $is_pass ? 'ผ่าน' : 'ไม่ผ่าน' }}
                  </span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>

      @if(!empty($videos))
      <section class="mt-8">
        <h2 class="mb-6 text-2xl font-bold text-ink">คลิปวิดีโอแนะนำ</h2>
        <div class="grid gap-6 md:grid-cols-2">
          @foreach($videos as $video)
          <div class="card overflow-hidden group">
            <div class="relative aspect-video overflow-hidden">
              <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
              <div class="absolute inset-0 flex items-center justify-center bg-ink/20 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <div class="flex size-14 items-center justify-center rounded-full bg-white shadow-lg">
                  <svg class="ml-1 size-6 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
                </div>
              </div>
            </div>
            <div class="p-5">
              <h3 class="mb-2 line-clamp-2 text-base font-bold text-ink group-hover:text-primary transition-colors">{{ $video['title'] }}</h3>
              <a href="{{ $video['url'] }}" target="_blank" class="mt-4 inline-flex items-center text-sm font-semibold text-primary hover:text-primary-dark">
                รับชมวิดีโอ <svg class="ml-1 size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      @endif

    </div>
  </div>
</x-layouts.app>
