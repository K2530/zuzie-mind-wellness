<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        <div class="grid gap-6 lg:grid-cols-[1fr_360px] lg:items-start">
          <form action="{{ route('assessment.2p.submit') }}" method="post" class="rounded-lg border border-reseda/10 bg-white/94 p-5 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-8" id="form-2p">
            @csrf

            <a href="{{ route('assessment') }}" class="text-sm font-semibold text-reseda hover:text-ink">‹ กลับไปเลือกแบบประเมิน</a>
            <p class="mt-6 text-sm font-semibold text-persian">แบบประเมินเฉพาะทาง</p>
            
            <h1 class="mt-2 text-3xl font-extrabold leading-tight text-ink sm:text-4xl">
              {{ $assessment['title'] }}
            </h1>
            
            <p class="mt-3 max-w-2xl text-sm leading-7 text-ink/68">
              {{ $assessment['desc'] }}
            </p>

            <div class="mt-8 grid gap-5">
              
              <!-- Q1: Screening -->
              <fieldset class="rounded-lg border border-reseda/10 bg-milk/70 p-4 sm:p-5">
                <legend class="px-1 text-base font-bold leading-7 text-ink">
                  คุณเคยมีประสบการณ์ พบเห็น ได้เกี่ยวข้องกับเหตุการณ์สะเทือนใจอย่างรุนแรงหรือเหตุการณ์อันตรายถึงขั้นเกือบเสียชีวิตหรือไม่
                </legend>
                <div class="mt-4 flex flex-col gap-3">
                  <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="has_event" value="0" required class="accent-reseda w-4 h-4 shrink-0" onchange="toggleSections(false)">
                    <span>ไม่เคย (จบการสัมภาษณ์)</span>
                  </label>
                  <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="has_event" value="1" required class="accent-reseda w-4 h-4 shrink-0" onchange="toggleSections(true)">
                    <span>เคย (โปรดระบุเหตุการณ์ด้านล่าง)</span>
                  </label>
                </div>
              </fieldset>

              <div id="extended-sections" class="hidden grid gap-5 transition-all duration-500 ease-in-out opacity-0 origin-top transform scale-y-95">
                <!-- Event Selection -->
                <fieldset class="rounded-lg border border-reseda/10 bg-milk/70 p-4 sm:p-5">
                  <legend class="px-1 text-base font-bold leading-7 text-ink">
                    โปรดระบุเหตุการณ์ที่ประสบ (เลือกได้มากกว่า 1 ข้อ)
                  </legend>
                  <div class="mt-4 grid gap-2 sm:grid-cols-2">
                    @php
                      $events = [
                        'อุบัติเหตุรุนแรง',
                        'การถูกทำร้ายร่างกาย/จิตใจ/ทางเพศ',
                        'เหตุการณ์ความไม่สงบ',
                        'การถูกจับเป็นตัวประกัน',
                        'การถูกลักพาตัว',
                        'อัคคีภัย',
                        'การพบศพผู้เสียชีวิต',
                        'การเสียชีวิตอย่างกะทันหันของบุคคลใกล้ชิด',
                        'ภัยสงคราม',
                        'ภัยธรรมชาติ'
                      ];
                    @endphp
                    @foreach($events as $i => $event)
                    <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                      <input type="checkbox" name="events[]" value="{{ $i }}" class="accent-reseda w-4 h-4 shrink-0 rounded-sm">
                      <span>{{ $event }}</span>
                    </label>
                    @endforeach
                  </div>
                </fieldset>
                
                <fieldset class="rounded-lg border border-reseda/10 bg-milk/70 p-4 sm:p-5">
                  <legend class="px-1 text-base font-bold leading-7 text-ink">
                    ช่วงเวลาที่ประสบเหตุการณ์
                  </legend>
                  <div class="mt-4 grid gap-2 sm:grid-cols-2">
                    @php
                      $times = [
                        'น้อยกว่า 1 เดือน',
                        '1-3 เดือน',
                        '4-6 เดือน',
                        'มากกว่า 6 เดือน'
                      ];
                    @endphp
                    @foreach($times as $i => $time)
                    <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                      <input type="radio" name="time_period" value="{{ $i }}" class="accent-reseda w-4 h-4 shrink-0">
                      <span>{{ $time }}</span>
                    </label>
                    @endforeach
                  </div>
                </fieldset>

                <!-- Q1P -->
                <fieldset class="rounded-lg border border-reseda/10 bg-milk/70 p-4 sm:p-5">
                  <legend class="px-1 text-base font-bold leading-7 text-ink">
                    1P. ในปัจจุบัน เหตุการณ์ดังกล่าวส่งผลให้เกิดอาการ เช่น พยายามหลีกเลี่ยงสถานการณ์ที่ทำให้คิดถึงเหตุการณ์ รู้สึกตื่นตัวระแวดระวังตลอดเวลา หรือหวนระลึกถึงหรือฝันถึงเหตุการณ์นั้นซ้ำๆ หรือไม่
                  </legend>
                  <div class="mt-4 flex flex-col gap-3">
                    <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                      <input type="radio" name="q1p" value="0" class="accent-reseda w-4 h-4 shrink-0">
                      <span>ไม่ใช่</span>
                    </label>
                    <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                      <input type="radio" name="q1p" value="1" class="accent-reseda w-4 h-4 shrink-0">
                      <span>ใช่</span>
                    </label>
                  </div>
                </fieldset>

                <!-- Q2P -->
                <fieldset class="rounded-lg border border-reseda/10 bg-milk/70 p-4 sm:p-5">
                  <legend class="px-1 text-base font-bold leading-7 text-ink">
                    2P. ในปัจจุบัน อาการที่เกิดส่งผลต่อการดำเนินชีวิตเช่น การดูแลตัวเอง การทำงาน หรือความสัมพันธ์กับคนอื่นหรือไม่
                  </legend>
                  <div class="mt-4 flex flex-col gap-3">
                    <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                      <input type="radio" name="q2p" value="0" class="accent-reseda w-4 h-4 shrink-0">
                      <span>ไม่ใช่</span>
                    </label>
                    <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                      <input type="radio" name="q2p" value="1" class="accent-reseda w-4 h-4 shrink-0">
                      <span>ใช่</span>
                    </label>
                  </div>
                </fieldset>
              </div>
            </div>

            <div class="mt-8 grid gap-3 sm:grid-cols-[1fr_220px] sm:items-center">
              <p class="text-xs leading-6 text-ink/60">
                ผลประเมินนี้เป็นการคัดกรองเบื้องต้น ไม่ใช่การวินิจฉัยทางการแพทย์ หากมีความเสี่ยงทำร้ายตัวเองหรือผู้อื่น ควรขอความช่วยเหลือฉุกเฉินทันที
              </p>
              <button type="submit" class="btn-primary w-full">ส่งคำตอบและดูผล</button>
            </div>
          </form>

          <aside class="grid gap-4">
            <div class="rounded-lg border border-reseda/10 bg-white p-6 shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <h2 class="text-xl font-bold text-ink">วิธีประเมินผล</h2>
              <div class="mt-3 text-sm text-ink/70 leading-relaxed">
                การประเมิน 2P (Post-Traumatic Stress Disorder) เป็นการคัดกรองความเสี่ยงภาวะเครียดหลังเหตุการณ์สะเทือนขวัญ <br><br>
                หากท่านเคยมีประสบการณ์เหตุการณ์สะเทือนใจ และตอบว่า <strong>"ใช่"</strong> ในคำถาม 1P และ 2P ทั้งสองข้อ จะถือว่ามีความเสี่ยงและควรรับคำปรึกษา
              </div>
            </div>

            <div class="overflow-hidden rounded-lg border border-reseda/10 bg-white shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <div class="p-6">
                <h2 class="text-xl font-bold text-ink">หลังทำแบบประเมิน</h2>
                <p class="mt-3 text-sm leading-7 text-ink/70">
                  ระบบจะวิเคราะห์ผลและแสดงระดับพร้อมคำแนะนำที่เหมาะกับผลของคุณทันที
                </p>
              </div>
              <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-32 w-full object-cover object-[72%_48%]">
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>
  
  <script>
    function toggleSections(show) {
      const el = document.getElementById('extended-sections');
      const q1pInputs = document.querySelectorAll('input[name="q1p"]');
      const q2pInputs = document.querySelectorAll('input[name="q2p"]');
      const timeInputs = document.querySelectorAll('input[name="time_period"]');
      
      if (show) {
        el.classList.remove('hidden');
        // Small delay to allow display block to take effect before animating opacity
        setTimeout(() => {
          el.classList.remove('opacity-0', 'scale-y-95');
          el.classList.add('opacity-100', 'scale-y-100');
        }, 10);
        
        q1pInputs.forEach(input => input.required = true);
        q2pInputs.forEach(input => input.required = true);
        timeInputs.forEach(input => input.required = true);
      } else {
        el.classList.remove('opacity-100', 'scale-y-100');
        el.classList.add('opacity-0', 'scale-y-95');
        
        setTimeout(() => {
          el.classList.add('hidden');
        }, 500); // match transition duration
        
        q1pInputs.forEach(input => {
          input.required = false;
          input.checked = false;
        });
        q2pInputs.forEach(input => {
          input.required = false;
          input.checked = false;
        });
        timeInputs.forEach(input => {
          input.required = false;
          input.checked = false;
        });
        
        document.querySelectorAll('input[name="events[]"]').forEach(input => input.checked = false);
      }
    }
  </script>
</x-layouts.app>
