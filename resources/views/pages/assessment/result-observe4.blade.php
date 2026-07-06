<x-app-layout>
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-5xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">สรุปผลประเมินพฤติกรรม 4 ภาวะเสี่ยง (สถาบันราชานุกูล)</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          <div class="text-center mb-6">
            <h3 class="text-lg font-bold text-ink">รายงานผลการคัดกรองความเสี่ยง</h3>
            <p class="mt-2 text-sm text-ink/70">คะแนนตั้งแต่ 6 คะแนนขึ้นไปในแต่ละด้าน บ่งบอกถึงแนวโน้มความเสี่ยง</p>
          </div>
          
          <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            @php
                $dimensions = [
                    'id' => [
                        'title' => 'ภาวะเรียนรู้ช้า',
                        'desc' => 'Intellectual Disability',
                        'score' => $score_id,
                        'risk' => $risk_id,
                    ],
                    'ld' => [
                        'title' => 'ภาวะแอลดี',
                        'desc' => 'Learning Disability (LD)',
                        'score' => $score_ld,
                        'risk' => $risk_ld,
                    ],
                    'adhd' => [
                        'title' => 'ภาวะสมาธิสั้น',
                        'desc' => 'ADHD',
                        'score' => $score_adhd,
                        'risk' => $risk_adhd,
                    ],
                    'autism' => [
                        'title' => 'ภาวะออทิสติก',
                        'desc' => 'Autism',
                        'score' => $score_autism,
                        'risk' => $risk_autism,
                    ]
                ];
            @endphp
            
            @foreach($dimensions as $key => $dim)
                @php 
                    $color = $dim['risk'] ? '#8d3f24' : '#5f8b61';
                    $bg_color = $dim['risk'] ? '#8d3f2415' : '#5f8b6115';
                    $border_color = $dim['risk'] ? '#8d3f2430' : '#5f8b6130';
                    $status_text = $dim['risk'] ? 'มีความเสี่ยง' : 'ไม่เสี่ยง (ปกติ)';
                    $percent = ($dim['score'] / 10) * 100;
                @endphp
                
                <div class="flex flex-col items-center p-5 text-center rounded-2xl border bg-milk/50 relative overflow-hidden transition-all duration-300 hover:shadow-md" style="border-color: {{ $border_color }}; background-color: {{ $bg_color }}">
                    @if($dim['risk'])
                        <div class="absolute top-0 inset-x-0 h-1.5" style="background-color: {{ $color }}"></div>
                    @endif
                    
                    <h4 class="text-base font-bold text-ink mt-2">{{ $dim['title'] }}</h4>
                    <p class="text-[11px] text-ink/60 mb-5 tracking-wide">{{ $dim['desc'] }}</p>
                    
                    <div class="relative flex size-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $color }} {{ $percent }}%, #e2e8f0 0)">
                        <div class="absolute flex size-[80px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                            <span class="text-2xl font-bold" style="color: {{ $color }}">{{ $dim['score'] }}<span class="text-xs text-ink/40">/10</span></span>
                        </div>
                    </div>
                    
                    <div class="mt-5 inline-flex items-center gap-2 rounded-full px-3 py-1 text-xs font-bold" style="background-color: {{ $color }}20; color: {{ $color }}">
                        @if($dim['risk'])
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg>
                        @endif
                        {{ $status_text }}
                    </div>
                </div>
            @endforeach
          </div>
          
          @if($has_any_risk)
            <div class="mt-8 rounded-xl bg-[#8d3f2408] p-5 text-sm leading-6 border border-[#8d3f2430]">
                <div class="flex items-start gap-4">
                    <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-[#8d3f2420] text-[#8d3f24]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#8d3f24] text-base mb-1">คำแนะนำทางการแพทย์</h4>
                        <p class="text-ink/80">จากผลการสังเกตพฤติกรรม พบว่าเด็กมีแนวโน้มความเสี่ยงในบางภาวะ <strong class="text-[#8d3f24]">คุณครูหรือผู้ปกครองควรส่งต่อหรือพาเด็กไปรับการตรวจคัดกรองเพิ่มเติมที่สถานบริการสาธารณสุขใกล้บ้าน</strong> (โรงพยาบาลส่งเสริมสุขภาพตำบล หรือ โรงพยาบาลชุมชน) เพื่อให้แพทย์ผู้เชี่ยวชาญวินิจฉัยและวางแผนช่วยเหลือพัฒนาการของเด็กได้อย่างทันท่วงที</p>
                    </div>
                </div>
            </div>
          @else
            <div class="mt-8 rounded-xl bg-[#5f8b6108] p-5 text-sm leading-6 border border-[#5f8b6130]">
                <div class="flex items-start gap-4">
                    <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-[#5f8b6120] text-[#5f8b61]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#5f8b61] text-base mb-1">ผลการประเมินอยู่ในเกณฑ์ปกติ</h4>
                        <p class="text-ink/80">จากผลการสังเกตพฤติกรรม ไม่พบความเสี่ยงที่ชัดเจนใน 4 ภาวะดังกล่าว ขอให้คุณครูและผู้ปกครองช่วยกันดูแลและส่งเสริมพัฒนาการของเด็กตามปกติต่อไป</p>
                    </div>
                </div>
            </div>
          @endif
          
        </div>
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปรายละเอียดคำตอบ (40 ข้อ)
        </h2>
        
        @php
            $categories = [
                ['title' => 'ด้านที่ 1: ภาวะเรียนรู้ช้า', 'start' => 0, 'end' => 9],
                ['title' => 'ด้านที่ 2: ภาวะแอลดี', 'start' => 10, 'end' => 19],
                ['title' => 'ด้านที่ 3: ภาวะสมาธิสั้น', 'start' => 20, 'end' => 29],
                ['title' => 'ด้านที่ 4: ภาวะออทิสติก', 'start' => 30, 'end' => 39],
            ];
        @endphp
        
        <div class="space-y-8">
            @foreach($categories as $cat)
                <div>
                    <h3 class="font-bold text-ink/80 mb-4 bg-reseda/10 inline-block px-4 py-1.5 rounded-full text-sm">{{ $cat['title'] }}</h3>
                    <div class="space-y-3 pl-2">
                        @for ($index = $cat['start']; $index <= $cat['end']; $index++)
                            @php $q = $assessment['questions'][$index]; @endphp
                            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/30 p-3 hover:bg-milk/60 transition-colors">
                                <span class="flex size-7 shrink-0 items-center justify-center rounded-full bg-reseda/15 text-xs font-bold text-ink/70">
                                    {{ $index + 1 }}
                                </span>
                                <div class="flex-1 pt-0.5 flex justify-between items-center gap-4">
                                    <p class="text-sm text-ink/80">{{ is_array($q) ? $q['text'] : $q }}</p>
                                    @if($answers[$index] == 1)
                                        <span class="shrink-0 rounded-full px-3 py-1 text-xs font-semibold bg-[#8d3f2415] text-[#8d3f24] border border-[#8d3f2430]">
                                            ใช่ (1)
                                        </span>
                                    @else
                                        <span class="shrink-0 rounded-full px-3 py-1 text-xs font-semibold bg-ink/5 text-ink/50 border border-ink/10">
                                            ไม่ใช่ (0)
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
      </section>

    </div>
  </div>
</x-app-layout>
