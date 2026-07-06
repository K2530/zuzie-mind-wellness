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

            <div class="mt-8 grid gap-6">
              
              <!-- Screening -->
              <div>
                <p class="text-base font-bold leading-7 text-ink mb-4">
                  คุณเคยมีประสบการณ์ พบเห็น ได้เกี่ยวข้องกับเหตุการณ์สะเทือนใจอย่างรุนแรงหรือเหตุการณ์อันตรายถึงขั้นเกือบเสียชีวิตหรือไม่
                </p>
                <div class="flex flex-col gap-3">
                  <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="has_event" value="0" required class="accent-reseda w-4 h-4 shrink-0" onchange="toggleFormLogic()">
                    <span>ไม่เคย <span class="font-bold underline text-ink">จบการสัมภาษณ์</span></span>
                  </label>
                  <label class="flex gap-2 min-h-14 w-full cursor-pointer items-center justify-start text-left rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="has_event" value="1" required class="accent-reseda w-4 h-4 shrink-0" onchange="toggleFormLogic()">
                    <span>เคย ระบุเหตุการณ์และช่วงเวลาที่ประสบ</span>
                  </label>
                </div>
              </div>

              <div id="section-events" class="hidden transition-all duration-500 ease-in-out opacity-0 origin-top transform scale-y-95">
                <!-- Events Table -->
                <div class="overflow-x-auto rounded-lg border border-reseda/20 bg-white">
                  <table class="w-full text-left text-sm text-ink/80 border-collapse">
                    <thead class="bg-almond/30 text-ink">
                      <tr>
                        <th class="border-b border-r border-reseda/20 px-4 py-3 font-bold w-1/3">เหตุการณ์</th>
                        <th class="border-b border-reseda/20 px-4 py-3 font-bold text-center">ช่วงเวลาที่ประสบ</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-reseda/10">
                      @php
                        $events = [
                          'อุบัติเหตุรุนแรง',
                          'การถูกทำร้ายร่างกายจิตใจหรือทารุณกรรมทางเพศ',
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
                      <tr class="hover:bg-milk/50 transition">
                        <td class="border-r border-reseda/10 px-4 py-3 align-top sm:align-middle">
                          <label class="flex gap-2 cursor-pointer items-start sm:items-center">
                            <input type="checkbox" name="events[{{ $i }}][experienced]" value="1" class="accent-reseda w-4 h-4 mt-0.5 sm:mt-0 shrink-0 rounded-sm">
                            <span class="font-medium">{{ $event }}</span>
                          </label>
                        </td>
                        <td class="px-4 py-3">
                          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2">
                            <label class="flex gap-2 cursor-pointer items-center text-xs sm:text-sm">
                              <input type="checkbox" name="events[{{ $i }}][time][]" value="<1m" class="accent-reseda w-4 h-4 shrink-0 rounded-sm">
                              <span>น้อยกว่า 1 เดือน</span>
                            </label>
                            <label class="flex gap-2 cursor-pointer items-center text-xs sm:text-sm">
                              <input type="checkbox" name="events[{{ $i }}][time][]" value="1-3m" class="accent-reseda w-4 h-4 shrink-0 rounded-sm">
                              <span>1-3 เดือน</span>
                            </label>
                            <label class="flex gap-2 cursor-pointer items-center text-xs sm:text-sm">
                              <input type="checkbox" name="events[{{ $i }}][time][]" value="4-6m" class="accent-reseda w-4 h-4 shrink-0 rounded-sm">
                              <span>4-6 เดือน</span>
                            </label>
                            <label class="flex gap-2 cursor-pointer items-center text-xs sm:text-sm">
                              <input type="checkbox" name="events[{{ $i }}][time][]" value=">6m" class="accent-reseda w-4 h-4 shrink-0 rounded-sm">
                              <span>มากกว่า 6 เดือน</span>
                            </label>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- 1P -->
              <div id="section-1p" class="hidden transition-all duration-500 ease-in-out opacity-0 origin-top transform scale-y-95">
                <p class="text-base font-bold leading-7 text-ink mb-4">
                  1 P. <span class="font-bold underline">ในปัจจุบัน</span> เหตุการณ์ดังกล่าวส่งผลให้เกิดอาการ เช่น พยายามหลีกเลี่ยงสถานการณ์ที่ทำให้คิดถึงเหตุการณ์ รู้สึกตื่นตัวระแวดระวังตลอดเวลา หรือหวนระลึกถึงหรือฝันถึงเหตุการณ์นั้นซ้ำๆ หรือไม่
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                  <label class="flex flex-1 gap-2 min-h-14 w-full cursor-pointer items-center justify-center rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="q1p" value="1" class="accent-reseda w-4 h-4 shrink-0" onchange="toggleFormLogic()">
                    <span>ใช่</span>
                  </label>
                  <label class="flex flex-1 gap-2 min-h-14 w-full cursor-pointer items-center justify-center rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="q1p" value="0" class="accent-reseda w-4 h-4 shrink-0" onchange="toggleFormLogic()">
                    <span>ไม่ใช่ <span class="font-bold underline text-ink">จบการสัมภาษณ์</span></span>
                  </label>
                </div>
              </div>

              <!-- 2P -->
              <div id="section-2p" class="hidden transition-all duration-500 ease-in-out opacity-0 origin-top transform scale-y-95">
                <p class="text-base font-bold leading-7 text-ink mb-4">
                  2 P. <span class="font-bold underline">ในปัจจุบัน</span> อาการที่เกิดส่งผลต่อการดำเนินชีวิตเช่น การดูแลตัวเอง การทำงาน หรือความสัมพันธ์กับคนอื่นหรือไม่
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                  <label class="flex flex-1 gap-2 min-h-14 w-full cursor-pointer items-center justify-center rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="q2p" value="1" class="accent-reseda w-4 h-4 shrink-0">
                    <span>ใช่</span>
                  </label>
                  <label class="flex flex-1 gap-2 min-h-14 w-full cursor-pointer items-center justify-center rounded-md border border-reseda/15 bg-white px-3 py-2 text-sm font-semibold text-ink/72 transition hover:border-reseda hover:bg-almond/55">
                    <input type="radio" name="q2p" value="0" class="accent-reseda w-4 h-4 shrink-0">
                    <span>ไม่ใช่</span>
                  </label>
                </div>
              </div>
            </div>

            <div class="mt-10 grid gap-3 sm:grid-cols-[1fr_220px] sm:items-center">
              <p class="text-xs leading-6 text-ink/60">
                ผลประเมินนี้เป็นการคัดกรองเบื้องต้น ไม่ใช่การวินิจฉัยทางการแพทย์ หากมีความเสี่ยงทำร้ายตัวเองหรือผู้อื่น ควรขอความช่วยเหลือฉุกเฉินทันที
              </p>
              <button type="submit" class="btn-primary w-full">ส่งคำตอบและดูผล</button>
            </div>
          </form>

          <aside class="grid gap-4">
            <div class="rounded-lg border border-reseda/10 bg-white p-6 shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <h2 class="text-lg font-bold text-ink">คำอธิบาย</h2>
              <div class="mt-3 text-sm text-ink/70 leading-relaxed">
                แบบคัดกรอง 2P พัฒนาขึ้นมาโดยมีวัตถุประสงค์เพื่อใช้ในการคัดกรองความเสี่ยงต่อการเกิดภาวะเครียดหลังเหตุการณ์สะเทือนขวัญ (Post-Traumatic Stress Disorder: PTSD) พัฒนาโดยโรงพยาบาลจิตเวชสงขลาราชนครินทร์ ข้อคำถามแบ่งเป็นสองส่วน ได้แก่<br><br>
                <ul class="list-disc pl-4 space-y-2">
                  <li><strong>ส่วนที่หนึ่ง</strong> เป็นคำถามถึงเหตุการณ์ที่เคยประสบและระยะเวลาที่เหตุการณ์เกิดขึ้น หากไม่เคยประสบเหตุการณ์ให้ <u>จบการสัมภาษณ์</u></li>
                  <li><strong>ส่วนที่สอง</strong> แบ่งเป็นสองข้อคำถาม โดยคำถามข้อ 1P เป็นคำถามเกี่ยวกับอาการอันเป็นผลมาจากเหตุการณ์ที่ประสบ หากในปัจจุบัน ไม่มีอาการอะไรแล้วให้ <u>จบการสัมภาษณ์</u> ส่วนคำถามข้อ 2P เป็นคำถามเกี่ยวกับผลกระทบในการดำเนินชีวิตอันเนื่องมาจากอาการที่เกิดขึ้น</li>
                </ul>
              </div>
            </div>

            <div class="rounded-lg border border-reseda/10 bg-white p-6 shadow-[0_18px_45px_rgba(83,76,65,0.08)]">
              <h2 class="text-lg font-bold text-ink">การแปลผล</h2>
              <p class="mt-3 text-sm leading-7 text-ink/70">
                ผู้ที่ตอบใช่ทั้งข้อ 1P และข้อ 2P ถือว่า <strong>มีความเสี่ยง</strong> ควรส่งพบบุคลากรทางการแพทย์เพื่อยืนยันการวินิจฉัยและให้การรักษาที่เหมาะสมต่อไป
              </p>
            </div>
          </aside>
        </div>
      </div>
    </section>
  </main>
  
  <script>
    function showSection(id, show, requireInputs = false) {
      const el = document.getElementById(id);
      const inputs = el.querySelectorAll('input[type="radio"]');
      
      if (show) {
        el.classList.remove('hidden');
        setTimeout(() => {
          el.classList.remove('opacity-0', 'scale-y-95');
          el.classList.add('opacity-100', 'scale-y-100');
        }, 10);
        
        if (requireInputs) {
          inputs.forEach(input => input.required = true);
        }
      } else {
        el.classList.remove('opacity-100', 'scale-y-100');
        el.classList.add('opacity-0', 'scale-y-95');
        setTimeout(() => {
          el.classList.add('hidden');
        }, 500);
        
        // Clear inputs and remove required
        inputs.forEach(input => {
          input.required = false;
          input.checked = false;
        });
        el.querySelectorAll('input[type="checkbox"]').forEach(input => {
          input.checked = false;
        });
      }
    }

    function toggleFormLogic() {
      const hasEvent = document.querySelector('input[name="has_event"]:checked')?.value;
      const q1p = document.querySelector('input[name="q1p"]:checked')?.value;
      
      if (hasEvent === '1') {
        showSection('section-events', true);
        showSection('section-1p', true, true);
        
        if (q1p === '1') {
          showSection('section-2p', true, true);
        } else {
          showSection('section-2p', false);
        }
      } else {
        showSection('section-events', false);
        showSection('section-1p', false);
        showSection('section-2p', false);
      }
    }
  </script>
</x-layouts.app>
