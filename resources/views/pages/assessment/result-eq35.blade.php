<x-layouts.app :nav-items="config('zuzie.nav_items')" title="Zuzie Mind Wellness - {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        
        <div class="mb-8 rounded-lg border border-reseda/10 bg-white p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
          <p class="text-sm font-semibold text-persian">
            <span class="lang-th">{{ $assessment['title'] }}</span>
          </p>
          <h1 class="mt-2 text-3xl font-extrabold text-ink" data-i18n="yourResult">ผลการประเมินความฉลาดทางอารมณ์ของคุณ</h1>
          
          <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- ด้านดี -->
            <div class="flex flex-col items-center rounded-lg border border-reseda/15 bg-milk/50 p-6 shadow-sm">
              <h3 class="text-lg font-bold text-ink">ด้านดี</h3>
              <p class="mt-1 text-sm text-ink/70">การควบคุมอารมณ์, มีน้ำใจ</p>
              <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $bandGood['tone'] }} 0deg {{ ($scoreGood/20)*360 }}deg, #efe3d7 {{ ($scoreGood/20)*360 }}deg 360deg);">
                <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                  <span class="text-2xl font-bold text-ink">{{ $scoreGood }}</span>
                  <span class="text-[10px] text-ink/55">/ 20</span>
                </div>
              </div>
              <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $bandGood['tone'] }};">{{ $bandGood['label'] }}</p>
            </div>

            <!-- ด้านเก่ง -->
            <div class="flex flex-col items-center rounded-lg border border-reseda/15 bg-milk/50 p-6 shadow-sm">
              <h3 class="text-lg font-bold text-ink">ด้านเก่ง</h3>
              <p class="mt-1 text-sm text-ink/70">ใฝ่รู้, ปรับตัว, กล้าแสดงออก</p>
              <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $bandSmart['tone'] }} 0deg {{ ($scoreSmart/20)*360 }}deg, #efe3d7 {{ ($scoreSmart/20)*360 }}deg 360deg);">
                <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                  <span class="text-2xl font-bold text-ink">{{ $scoreSmart }}</span>
                  <span class="text-[10px] text-ink/55">/ 20</span>
                </div>
              </div>
              <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $bandSmart['tone'] }};">{{ $bandSmart['label'] }}</p>
            </div>

            <!-- ด้านสุข -->
            <div class="flex flex-col items-center rounded-lg border border-reseda/15 bg-milk/50 p-6 shadow-sm">
              <h3 class="text-lg font-bold text-ink">ด้านสุข</h3>
              <p class="mt-1 text-sm text-ink/70">พอใจ, อบอุ่น, ร่าเริง</p>
              <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $bandHappy['tone'] }} 0deg {{ ($scoreHappy/20)*360 }}deg, #efe3d7 {{ ($scoreHappy/20)*360 }}deg 360deg);">
                <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                  <span class="text-2xl font-bold text-ink">{{ $scoreHappy }}</span>
                  <span class="text-[10px] text-ink/55">/ 20</span>
                </div>
              </div>
              <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $bandHappy['tone'] }};">{{ $bandHappy['label'] }}</p>
            </div>

            <!-- EQ รวม -->
            <div class="flex flex-col items-center rounded-lg border border-reseda/30 bg-reseda/5 p-6 shadow-md">
              <h3 class="text-xl font-extrabold text-ink">EQ รวม</h3>
              <p class="mt-1 text-sm font-semibold text-persian">ความฉลาดทางอารมณ์</p>
              <div class="mt-4 flex h-28 w-28 items-center justify-center rounded-full" style="background: conic-gradient({{ $bandTotal['tone'] }} 0deg {{ ($scoreTotal/60)*360 }}deg, #efe3d7 {{ ($scoreTotal/60)*360 }}deg 360deg);">
                <div class="flex h-24 w-24 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                  <span class="text-3xl font-extrabold text-ink">{{ $scoreTotal }}</span>
                  <span class="text-xs text-ink/55">/ 60</span>
                </div>
              </div>
              <p class="mt-4 rounded-full px-4 py-1.5 text-sm font-bold text-white" style="background-color: {{ $bandTotal['tone'] }};">{{ $bandTotal['label'] }}</p>
            </div>
          </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-[1fr_420px]">
          <section class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <h2 class="text-xl font-bold text-ink">แนวทางการพัฒนาความฉลาดทางอารมณ์เด็ก</h2>
            <div class="mt-5 grid gap-4 text-sm leading-7 text-ink/70">
              <p>การพัฒนาความฉลาดทางอารมณ์ควรทำในเด็กวัย 3-5 ปีอย่างจริงจัง เนื่องจากเป็นวัยสร้างได้ง่ายกว่าเด็กโต ซึ่งความฉลาดทางอารมณ์นี้จะส่งผลต่อความสำเร็จทางการเรียน การอยู่ร่วมกับผู้อื่น และการใช้ชีวิตในอนาคต</p>
              
              <div class="mt-2 rounded-lg border border-[#5f8b61]/25 bg-[#5f8b61]/10 px-4 py-3">
                <h4 class="font-bold text-[#446646]">เด็กที่มีความฉลาดทางอารมณ์สูงกว่าปกติ/ปกติ</h4>
                <p class="mt-1">ควรส่งเสริมและรักษาคุณลักษณะนี้ให้คงไว้ ผู้ปกครองควรช่วยชี้แนะการพัฒนาความฉลาดทางอารมณ์ในด้านนั้น ๆ ให้ดียิ่งขึ้น อย่างต่อเนื่อง</p>
              </div>

              <div class="mt-2 rounded-lg border border-[#c85f36]/25 bg-[#c85f36]/10 px-4 py-3">
                <h4 class="font-bold text-[#8d3f24]">เด็กที่มีความฉลาดทางอารมณ์ระดับที่ควรได้รับการพัฒนา (ต่ำกว่าปกติ)</h4>
                <p class="mt-1">ควรได้รับการประเมินซ้ำด้วยแบบประเมินความฉลาดทางอารมณ์ฉบับสมบูรณ์ (35 ข้อ) เพื่อความชัดเจน และควรได้รับการเอาใจใส่พัฒนาอย่างสม่ำเสมอและจริงจัง</p>
              </div>

              <div class="mt-4">
                <h4 class="font-bold text-ink">การเสริมสร้างความฉลาดทางอารมณ์เด็ก:</h4>
                <p class="mt-2">จำเป็นต้องทำบ่อย ๆ ทำทุกวัน เพื่อให้เด็กนำความฉลาดทางอารมณ์ไปใช้ในชีวิตประจำวันเป็นอัตโนมัติ การส่งเสริมทำได้หลายวิธีการ ได้แก่:</p>
                <ul class="mt-2 list-disc pl-5 grid gap-1">
                  <li>สอนให้ทำ, อธิบายเหตุผล</li>
                  <li>จูงใจ ชมเชย ให้กำลังใจ</li>
                  <li>หาเพื่อนทำด้วยกัน</li>
                  <li>ให้คำชมเชยเป็นกำลังใจเมื่อเด็กทำได้ดี</li>
                  <li>เป็นแบบอย่างที่ดีแก่เด็ก</li>
                </ul>
              </div>
            </div>
          </section>

          <aside class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <h2 class="text-xl font-bold text-ink">รายละเอียดและเกณฑ์การให้คะแนน</h2>
            
            <div class="mt-5 grid gap-4">
              <div class="rounded-lg border border-reseda/10 bg-milk p-4">
                <h3 class="text-sm font-bold text-ink">ด้านดี (เต็ม 20 คะแนน)</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">1-11:</strong> ต่ำกว่าเกณฑ์ปกติ</li>
                  <li><strong class="text-ink">12-19:</strong> ปกติ</li>
                  <li><strong class="text-ink">20:</strong> สูงกว่าปกติ</li>
                </ul>
              </div>

              <div class="rounded-lg border border-reseda/10 bg-milk p-4">
                <h3 class="text-sm font-bold text-ink">ด้านเก่ง (เต็ม 20 คะแนน)</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">1-12:</strong> ต่ำกว่าเกณฑ์ปกติ</li>
                  <li><strong class="text-ink">13-19:</strong> ปกติ</li>
                  <li><strong class="text-ink">20:</strong> สูงกว่าปกติ</li>
                </ul>
              </div>

              <div class="rounded-lg border border-reseda/10 bg-milk p-4">
                <h3 class="text-sm font-bold text-ink">ด้านสุข (เต็ม 20 คะแนน)</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">1-12:</strong> ต่ำกว่าเกณฑ์ปกติ</li>
                  <li><strong class="text-ink">13-18:</strong> ปกติ</li>
                  <li><strong class="text-ink">19-20:</strong> สูงกว่าปกติ</li>
                </ul>
              </div>

              <div class="rounded-lg border border-reseda/30 bg-reseda/10 p-4">
                <h3 class="text-sm font-bold text-ink">ความฉลาดทางอารมณ์ (EQ) (เต็ม 60 คะแนน)</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">1-39:</strong> ต่ำกว่าเกณฑ์ปกติ</li>
                  <li><strong class="text-ink">40-55:</strong> ปกติ</li>
                  <li><strong class="text-ink">56-60:</strong> สูงกว่าปกติ</li>
                </ul>
              </div>
            </div>
          </aside>
        </div>

        <section class="mt-8">
          <div class="flex flex-wrap items-end justify-between gap-4 border-b border-reseda/15 pb-4">
            <div>
              <h2 class="text-xl font-bold text-ink">คำแนะนำการฝึกทักษะ</h2>
              <p class="mt-1 text-sm text-ink/60">ตัวอย่างการสร้างพื้นฐานให้เด็กอายุ 3-5 ปี</p>
            </div>
            <a href="{{ route('assessment.show', $assessment['slug']) }}" class="btn-secondary min-h-10 px-4 py-2 text-xs">ทำแบบประเมินอีกครั้ง</a>
          </div>

          <div class="mt-5 grid gap-4 lg:grid-cols-3">
            <div class="rounded-lg border border-reseda/10 bg-white p-5 shadow-sm">
              <h3 class="font-bold text-ink flex items-center gap-2">
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-reseda/20 text-reseda text-xs">1</span>
                ฝึกให้เด็กรู้จักอารมณ์ตนเอง
              </h3>
              <p class="mt-3 text-sm text-ink/70 leading-6">เป็นพื้นฐานของการควบคุมอารมณ์ เมื่อเด็กมีอารมณ์เกิดขึ้น เช่น โกรธ โมโห ผู้ใหญ่ควรสอนให้เด็กรู้จักอารมณ์ตนเอง และแสดงท่าทีที่เข้าใจ จะทำให้เด็กสงบลงง่ายขึ้น</p>
            </div>
            
            <div class="rounded-lg border border-reseda/10 bg-white p-5 shadow-sm">
              <h3 class="font-bold text-ink flex items-center gap-2">
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-reseda/20 text-reseda text-xs">2</span>
                ฝึกให้เป็นคนมีน้ำใจ แบ่งปัน
              </h3>
              <p class="mt-3 text-sm text-ink/70 leading-6">เพื่อประโยชน์ของตัวเด็กเองและการอยู่ร่วมกับผู้อื่น โดยสอนให้เด็กรู้จักแบ่งปันขนม ของเล่น หรือกล่าวชมเมื่อเด็กช่วยเหลือผู้อื่นทำสิ่งใดสิ่งหนึ่ง</p>
            </div>
            
            <div class="rounded-lg border border-reseda/10 bg-white p-5 shadow-sm">
              <h3 class="font-bold text-ink flex items-center gap-2">
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-reseda/20 text-reseda text-xs">3</span>
                ฝึกให้เด็กรู้ว่าอะไรถูกหรือผิด
              </h3>
              <p class="mt-3 text-sm text-ink/70 leading-6">และยอมรับผิด เมื่อทำผิด เช่น เดินชนผู้อื่นโดยไม่ได้ตั้งใจ ควรชี้แนะให้เด็กรู้จักกล่าวขอโทษ และการขอโทษทำให้ผู้อื่นไม่โกรธเคือง</p>
            </div>
          </div>
        </section>

      </div>
    </section>
  </main>
</x-layouts.app>
