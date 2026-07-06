<x-layouts.app :nav-items="config('zuzie.nav_items')" title="Zuzie Mind Wellness - {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        <div class="mx-auto max-w-3xl text-center">
          <p class="text-sm font-semibold text-persian">แบบประเมินต่อเนื่อง</p>
          <h1 class="mt-3 text-3xl font-extrabold leading-tight text-ink sm:text-4xl">{{ $assessment['title'] }}</h1>
          <p class="mt-3 text-sm leading-6 text-ink/68 sm:text-base">
            {{ $assessment['desc'] }}
          </p>
        </div>

        <form action="{{ route('assessment.2q.submit') }}" method="POST" class="mx-auto mt-10 max-w-4xl" id="assessment-form">
          @csrf
          
          <!-- ================= 2Q SECTION ================= -->
          <div class="rounded-[24px] border border-reseda/10 bg-white p-6 shadow-[0_10px_28px_rgba(83,76,65,0.06)] sm:p-10 mb-8 transition-all duration-500" id="section-2q">
            <div class="mb-6 border-b border-reseda/10 pb-4">
              <h2 class="text-xl font-bold text-ink">แบบคัดกรองโรคซึมเศร้า 2 คำถาม (2Q)</h2>
              <p class="mt-2 text-sm text-ink/70">ในช่วง 2 สัปดาห์ที่ผ่านมา รวมวันนี้</p>
            </div>
            <div class="grid gap-6">
              @php
                $questions2q = [
                  1 => '1. ท่านรู้สึก หดหู่ เศร้า หรือท้อแท้สิ้นหวัง หรือไม่',
                  2 => '2. ท่านรู้สึก เบื่อ ทำอะไรก็ไม่เพลิดเพลิน หรือไม่'
                ];
              @endphp
              @foreach ($questions2q as $qNum => $qText)
                <fieldset class="q2q-group grid gap-4 rounded-xl border border-reseda/5 bg-almond/10 p-5 transition-colors hover:border-reseda/20 sm:grid-cols-[1fr_200px] sm:items-center">
                  <legend class="sr-only">คำถามที่ {{ $qNum }}</legend>
                  <p class="text-base font-medium leading-7 text-ink">{{ $qText }}</p>
                  <div class="flex flex-wrap gap-2 sm:justify-end">
                    <label class="flex min-w-[80px] cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-4 py-2.5 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q2q_{{ $qNum }}" value="0" class="sr-only" required>
                      <span class="text-sm font-semibold">ไม่มี</span>
                    </label>
                    <label class="flex min-w-[80px] cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-4 py-2.5 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q2q_{{ $qNum }}" value="1" class="sr-only" required>
                      <span class="text-sm font-semibold">มี</span>
                    </label>
                  </div>
                </fieldset>
              @endforeach
            </div>
          </div>

          <!-- ================= 9Q SECTION ================= -->
          <div class="rounded-[24px] border border-reseda/10 bg-white p-6 shadow-[0_10px_28px_rgba(83,76,65,0.06)] sm:p-10 mb-8 hidden transition-all duration-500 opacity-0 transform translate-y-4" id="section-9q">
            <div class="mb-6 border-b border-reseda/10 pb-4">
              <h2 class="text-xl font-bold text-ink">แบบประเมินโรคซึมเศร้า 9 คำถาม (9Q)</h2>
              <p class="mt-2 text-sm text-ink/70">ในช่วง 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านมีอาการเหล่านี้บ่อยแค่ไหน</p>
            </div>
            <div class="grid gap-6">
              @php
                $questions9q = [
                  1 => '1. เบื่อ ไม่สนใจอยากทำอะไร',
                  2 => '2. ไม่สบายใจ ซึมเศร้า ท้อแท้',
                  3 => '3. หลับยากหรือหลับๆตื่นๆหรือหลับมากไป',
                  4 => '4. เหนื่อยง่ายหรือไม่ค่อยมีแรง',
                  5 => '5. เบื่ออาหารหรือกินมากเกินไป',
                  6 => '6. รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลวหรือครอบครัวผิดหวัง',
                  7 => '7. สมาธิไม่ดี เวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ',
                  8 => '8. พูดช้า ทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น',
                  9 => '9. คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี'
                ];
                $options9q = [
                  0 => 'ไม่มีเลย',
                  1 => 'เป็นบางวัน 1-7 วัน',
                  2 => 'เป็นบ่อย > 7วัน',
                  3 => 'เป็นทุกวัน'
                ];
              @endphp
              @foreach ($questions9q as $qNum => $qText)
                <fieldset class="q9q-group grid gap-4 rounded-xl border border-reseda/5 bg-almond/10 p-5 transition-colors hover:border-reseda/20 lg:grid-cols-[1fr_auto] lg:items-center">
                  <legend class="sr-only">คำถามที่ {{ $qNum }}</legend>
                  <p class="text-base font-medium leading-7 text-ink">{{ $qText }}</p>
                  <div class="flex flex-wrap gap-2 lg:justify-end">
                    @foreach ($options9q as $val => $label)
                    <label class="flex cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-3 py-2 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q9q_{{ $qNum }}" value="{{ $val }}" class="sr-only">
                      <span class="text-[13px] font-semibold text-center whitespace-nowrap">{{ $label }}</span>
                    </label>
                    @endforeach
                  </div>
                </fieldset>
              @endforeach
            </div>
            <div class="mt-6 rounded-lg bg-reseda/10 p-4 text-center">
              <p class="text-sm font-semibold text-ink/70">คะแนน 9Q รวม: <span id="score-9q-display" class="text-lg font-bold text-persian">0</span></p>
            </div>
          </div>

          <!-- ================= 8Q SECTION ================= -->
          <div class="rounded-[24px] border border-reseda/10 bg-white p-6 shadow-[0_10px_28px_rgba(83,76,65,0.06)] sm:p-10 mb-8 hidden transition-all duration-500 opacity-0 transform translate-y-4" id="section-8q">
            <div class="mb-6 border-b border-reseda/10 pb-4">
              <h2 class="text-xl font-bold text-ink">แบบประเมินการฆ่าตัวตาย 8 คำถาม (8Q)</h2>
              <p class="mt-2 text-sm text-ink/70">ในช่วง 1 เดือนที่ผ่านมา รวมวันนี้</p>
            </div>
            <div class="grid gap-6">
              @php
                $questions8q = [
                  1 => '1. คิดอยากตาย หรือ คิดว่าตายไปจะดีกว่า',
                  2 => '2. อยากทำร้ายตัวเอง หรือ ทำให้ตัวเองบาดเจ็บ',
                  3 => '3. คิดเกี่ยวกับการฆ่าตัวตาย',
                  4 => '4. มีแผนการที่จะฆ่าตัวตาย',
                  5 => '5. ได้เตรียมการที่จะทำร้ายตนเองหรือเตรียมการจะฆ่าตัวตายโดยตั้งใจว่าจะให้ตายจริง ๆ',
                  6 => '6. ได้ทำให้ตนเองบาดเจ็บแต่ไม่ตั้งใจที่จะทำให้เสียชีวิต',
                  7 => '7. ได้พยายามฆ่าตัวตายโดยคาดหวัง/ตั้งใจที่จะให้ตาย',
                  8 => '8. ตลอดชีวิตที่ผ่านมา ท่านเคยพยายามฆ่าตัวตาย'
                ];
              @endphp
              
              @foreach ($questions8q as $qNum => $qText)
                <fieldset class="q8q-group grid gap-4 rounded-xl border border-reseda/5 bg-almond/10 p-5 transition-colors hover:border-reseda/20 sm:grid-cols-[1fr_200px] sm:items-center" id="q8q-{{ $qNum }}-container">
                  <legend class="sr-only">คำถามที่ {{ $qNum }}</legend>
                  <p class="text-base font-medium leading-7 text-ink">{{ $qText }}</p>
                  <div class="flex flex-wrap gap-2 sm:justify-end">
                    <label class="flex min-w-[80px] cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-4 py-2.5 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q8q_{{ $qNum }}" value="0" class="sr-only">
                      <span class="text-sm font-semibold">ไม่มี</span>
                    </label>
                    <label class="flex min-w-[80px] cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-4 py-2.5 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q8q_{{ $qNum }}" value="1" class="sr-only">
                      <span class="text-sm font-semibold">มี</span>
                    </label>
                  </div>
                </fieldset>

                @if($qNum === 3)
                <fieldset class="q8q-group grid gap-4 rounded-xl border border-reseda/5 bg-almond/10 p-5 transition-colors hover:border-reseda/20 sm:grid-cols-[1fr_200px] sm:items-center hidden" id="q8q-3-1-container">
                  <legend class="sr-only">คำถามที่ 3.1</legend>
                  <p class="text-base font-medium leading-7 text-ink text-persian">(ถ้าตอบว่ามี ให้ถามต่อ) ท่านสามารถควบคุมความอยากฆ่าตัวตายที่ท่านคิดอยู่นั้นได้หรือไม่ หรือบอกได้ไหมว่าคงจะไม่ทำตามความคิดนั้นในขณะนี้</p>
                  <div class="flex flex-wrap gap-2 sm:justify-end">
                    <label class="flex min-w-[80px] cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-4 py-2.5 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q8q_3_1" value="0" class="sr-only">
                      <span class="text-sm font-semibold">ได้</span>
                    </label>
                    <label class="flex min-w-[80px] cursor-pointer items-center justify-center gap-2 rounded-lg border border-reseda/20 bg-white px-4 py-2.5 shadow-sm transition hover:bg-almond/30 has-[:checked]:border-persian has-[:checked]:bg-persian/10 has-[:checked]:text-persian">
                      <input type="radio" name="q8q_3_1" value="1" class="sr-only">
                      <span class="text-sm font-semibold">ไม่ได้</span>
                    </label>
                  </div>
                </fieldset>
                @endif
              @endforeach
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn-primary min-w-[200px]" id="submit-btn">ดูผลประเมิน</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const section2q = document.getElementById('section-2q');
      const section9q = document.getElementById('section-9q');
      const section8q = document.getElementById('section-8q');
      const q8q_3_1_container = document.getElementById('q8q-3-1-container');
      const score9qDisplay = document.getElementById('score-9q-display');

      const inputs2q = document.querySelectorAll('input[name^="q2q_"]');
      const inputs9q = document.querySelectorAll('input[name^="q9q_"]');
      const inputs8q = document.querySelectorAll('input[name^="q8q_"]');
      const input8q_3 = document.querySelectorAll('input[name="q8q_3"]');

      let score2q = 0;
      let score9q = 0;

      function check2q() {
        let isComplete = true;
        let total = 0;
        // Check if both are answered
        const answeredCount = document.querySelectorAll('input[name^="q2q_"]:checked').length;
        if (answeredCount < 2) return;

        document.querySelectorAll('input[name^="q2q_"]:checked').forEach(el => {
          total += parseInt(el.value);
        });
        score2q = total;

        if (score2q > 0) {
          showSection(section9q);
          inputs9q.forEach(el => el.required = true);
        } else {
          hideSection(section9q);
          hideSection(section8q);
          inputs9q.forEach(el => el.required = false);
          inputs8q.forEach(el => el.required = false);
        }
      }

      function check9q() {
        if (score2q === 0) return;
        const answeredCount = document.querySelectorAll('input[name^="q9q_"]:checked').length;
        
        let total = 0;
        document.querySelectorAll('input[name^="q9q_"]:checked').forEach(el => {
          total += parseInt(el.value);
        });
        score9q = total;
        score9qDisplay.innerText = score9q;

        if (answeredCount < 9) return;

        if (score9q >= 7) {
          showSection(section8q);
          inputs8q.forEach(el => {
            if(el.name !== 'q8q_3_1') el.required = true;
          });
        } else {
          hideSection(section8q);
          inputs8q.forEach(el => el.required = false);
        }
      }

      function check8q_3() {
        const val = document.querySelector('input[name="q8q_3"]:checked')?.value;
        if (val === '1') {
          q8q_3_1_container.classList.remove('hidden');
          document.querySelectorAll('input[name="q8q_3_1"]').forEach(el => el.required = true);
        } else {
          q8q_3_1_container.classList.add('hidden');
          document.querySelectorAll('input[name="q8q_3_1"]').forEach(el => {
            el.required = false;
            el.checked = false;
          });
        }
      }

      function showSection(el) {
        el.classList.remove('hidden');
        // trigger reflow
        void el.offsetWidth;
        el.classList.remove('opacity-0', 'translate-y-4');
        el.classList.add('opacity-100', 'translate-y-0');
      }

      function hideSection(el) {
        el.classList.remove('opacity-100', 'translate-y-0');
        el.classList.add('opacity-0', 'translate-y-4');
        setTimeout(() => {
          if(el.classList.contains('opacity-0')) {
            el.classList.add('hidden');
          }
        }, 500);
      }

      inputs2q.forEach(el => el.addEventListener('change', () => { check2q(); check9q(); }));
      inputs9q.forEach(el => el.addEventListener('change', check9q));
      input8q_3.forEach(el => el.addEventListener('change', check8q_3));
    });
  </script>
</x-layouts.app>
