<x-layouts.app :nav-items="config('zuzie.nav_items')" title="Zuzie Mind Wellness - {{ $assessment['title'] }}">
  <main class="bg-milk">
    <section class="bg-gradient-to-b from-white to-almond/35 py-10 sm:py-12">
      <div class="container-soft">
        
        <div class="mb-8 rounded-lg border border-reseda/10 bg-white p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
          <p class="text-sm font-semibold text-persian">
            <span class="lang-th">{{ $assessment['title'] }}</span>
          </p>
          <h1 class="mt-2 text-3xl font-extrabold text-ink" data-i18n="yourResult">ผลการประเมินความฉลาดทางอารมณ์ของคุณ</h1>
          
          <div class="mt-10 grid gap-10">
            <!-- ด้านดี -->
            <div class="rounded-xl border border-reseda/15 bg-white p-6 shadow-sm sm:p-8">
              <div class="mb-6 flex items-center justify-between border-b border-reseda/15 pb-4">
                <div>
                  <h2 class="text-2xl font-bold text-ink">ด้านดี</h2>
                  <p class="mt-1 text-sm text-ink/70">ความพร้อมทางอารมณ์ที่จะอยู่ร่วมกับผู้อื่น (คะแนนรวม: {{ $totalGood }} / 92)</p>
                </div>
              </div>
              
              <div class="grid gap-6 sm:grid-cols-3">
                <!-- 1.1 ควบคุมอารมณ์ -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">1.1 ควบคุมอารมณ์</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s11']['band']['tone'] }} 0deg {{ ($scores['s11']['score']/$scores['s11']['max'])*360 }}deg, #efe3d7 {{ ($scores['s11']['score']/$scores['s11']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s11']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s11']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s11']['band']['tone'] }};">{{ $scores['s11']['band']['label'] }}</p>
                </div>

                <!-- 1.2 ใส่ใจและเข้าใจอารมณ์ผู้อื่น -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">1.2 ใส่ใจและเข้าใจอารมณ์ผู้อื่น</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s12']['band']['tone'] }} 0deg {{ ($scores['s12']['score']/$scores['s12']['max'])*360 }}deg, #efe3d7 {{ ($scores['s12']['score']/$scores['s12']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s12']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s12']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s12']['band']['tone'] }};">{{ $scores['s12']['band']['label'] }}</p>
                </div>

                <!-- 1.3 ยอมรับผิด -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">1.3 ยอมรับผิด</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s13']['band']['tone'] }} 0deg {{ ($scores['s13']['score']/$scores['s13']['max'])*360 }}deg, #efe3d7 {{ ($scores['s13']['score']/$scores['s13']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s13']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s13']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s13']['band']['tone'] }};">{{ $scores['s13']['band']['label'] }}</p>
                </div>
              </div>
            </div>

            <!-- ด้านเก่ง -->
            <div class="rounded-xl border border-reseda/15 bg-white p-6 shadow-sm sm:p-8">
              <div class="mb-6 flex items-center justify-between border-b border-reseda/15 pb-4">
                <div>
                  <h2 class="text-2xl font-bold text-ink">ด้านเก่ง</h2>
                  <p class="mt-1 text-sm text-ink/70">ความพร้อมที่จะพัฒนาตนไปสู่ความสำเร็จ (คะแนนรวม: {{ $totalSmart }} / 76)</p>
                </div>
              </div>
              
              <div class="grid gap-6 sm:grid-cols-3">
                <!-- 2.1 มุ่งมั่นพยายาม -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">2.1 มุ่งมั่นพยายาม</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s21']['band']['tone'] }} 0deg {{ ($scores['s21']['score']/$scores['s21']['max'])*360 }}deg, #efe3d7 {{ ($scores['s21']['score']/$scores['s21']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s21']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s21']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s21']['band']['tone'] }};">{{ $scores['s21']['band']['label'] }}</p>
                </div>

                <!-- 2.2 ปรับตัวต่อปัญหา -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">2.2 ปรับตัวต่อปัญหา</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s22']['band']['tone'] }} 0deg {{ ($scores['s22']['score']/$scores['s22']['max'])*360 }}deg, #efe3d7 {{ ($scores['s22']['score']/$scores['s22']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s22']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s22']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s22']['band']['tone'] }};">{{ $scores['s22']['band']['label'] }}</p>
                </div>

                <!-- 2.3 กล้าแสดงออกอย่างเหมาะสม -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">2.3 กล้าแสดงออกอย่างเหมาะสม</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s23']['band']['tone'] }} 0deg {{ ($scores['s23']['score']/$scores['s23']['max'])*360 }}deg, #efe3d7 {{ ($scores['s23']['score']/$scores['s23']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s23']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s23']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s23']['band']['tone'] }};">{{ $scores['s23']['band']['label'] }}</p>
                </div>
              </div>
            </div>

            <!-- ด้านสุข -->
            <div class="rounded-xl border border-reseda/15 bg-white p-6 shadow-sm sm:p-8">
              <div class="mb-6 flex items-center justify-between border-b border-reseda/15 pb-4">
                <div>
                  <h2 class="text-2xl font-bold text-ink">ด้านสุข</h2>
                  <p class="mt-1 text-sm text-ink/70">ความพร้อมทางอารมณ์ที่ทำให้เกิดความสุข (คะแนนรวม: {{ $totalHappy }} / 72)</p>
                </div>
              </div>
              
              <div class="grid gap-6 sm:grid-cols-3">
                <!-- 3.1 พอใจในตนเอง -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">3.1 พอใจในตนเอง</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s31']['band']['tone'] }} 0deg {{ ($scores['s31']['score']/$scores['s31']['max'])*360 }}deg, #efe3d7 {{ ($scores['s31']['score']/$scores['s31']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s31']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s31']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s31']['band']['tone'] }};">{{ $scores['s31']['band']['label'] }}</p>
                </div>

                <!-- 3.2 รู้จักปรับใจ -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">3.2 รู้จักปรับใจ</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s32']['band']['tone'] }} 0deg {{ ($scores['s32']['score']/$scores['s32']['max'])*360 }}deg, #efe3d7 {{ ($scores['s32']['score']/$scores['s32']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s32']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s32']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s32']['band']['tone'] }};">{{ $scores['s32']['band']['label'] }}</p>
                </div>

                <!-- 3.3 รื่นเริงเบิกบาน -->
                <div class="flex flex-col items-center rounded-lg bg-milk/50 p-5">
                  <h3 class="text-sm font-bold text-ink text-center h-10">3.3 รื่นเริงเบิกบาน</h3>
                  <div class="mt-4 flex h-24 w-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $scores['s33']['band']['tone'] }} 0deg {{ ($scores['s33']['score']/$scores['s33']['max'])*360 }}deg, #efe3d7 {{ ($scores['s33']['score']/$scores['s33']['max'])*360 }}deg 360deg);">
                    <div class="flex h-20 w-20 flex-col items-center justify-center rounded-full bg-white shadow-inner">
                      <span class="text-xl font-bold text-ink">{{ $scores['s33']['score'] }}</span>
                      <span class="text-[10px] text-ink/55">/ {{ $scores['s33']['max'] }}</span>
                    </div>
                  </div>
                  <p class="mt-4 rounded-full px-3 py-1 text-xs font-bold text-white" style="background-color: {{ $scores['s33']['band']['tone'] }};">{{ $scores['s33']['band']['label'] }}</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-[1fr_420px]">
          <section class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <h2 class="text-xl font-bold text-ink">แนวทางการพัฒนาความฉลาดทางอารมณ์เด็ก</h2>
            <div class="mt-5 grid gap-4 text-sm leading-7 text-ink/70">
              <p>กราฟนี้จะทำให้ทราบโดยสังเขปว่าเด็กมีระดับการพัฒนาความฉลาดทางอารมณ์อยู่ในระดับใด มีความจำเป็นต้องพัฒนาความฉลาดทางอารมณ์ในด้านนั้น ๆ มากน้อยเพียงใด</p>
              
              <div class="mt-2 rounded-lg border border-[#5f8b61]/25 bg-[#5f8b61]/10 px-4 py-3">
                <h4 class="font-bold text-[#446646]">เด็กที่มีความฉลาดทางอารมณ์อยู่ในเกณฑ์ สูงกว่าปกติ / ปกติ</h4>
                <p class="mt-1">บ่งบอกว่าเด็กมีความฉลาดทางอารมณ์อยู่ในเกณฑ์ที่ดี <strong>ควรส่งเสริมและรักษาคุณลักษณะนี้ให้คงไว้</strong> ผู้ใหญ่ควรร่วมกันส่งเสริมให้เด็กพัฒนาความฉลาดทางอารมณ์ในด้านนั้น ๆ อย่างต่อเนื่อง</p>
              </div>

              <div class="mt-2 rounded-lg border border-[#c85f36]/25 bg-[#c85f36]/10 px-4 py-3">
                <h4 class="font-bold text-[#8d3f24]">เด็กที่มีความฉลาดทางอารมณ์ ต่ำกว่าปกติ</h4>
                <p class="mt-1">บ่งบอกว่าเด็ก <strong>จำเป็นต้องได้รับการพัฒนาความฉลาดทางอารมณ์ในด้านนั้น ๆ ให้ดียิ่งขึ้น</strong> ผู้ใหญ่ต้องช่วยกันเอาใจใส่พัฒนาความฉลาดทางอารมณ์เด็กอย่างจริงจังและสม่ำเสมอ</p>
              </div>

              <div class="mt-4">
                <p><strong>กล่าวโดยสรุป:</strong> หากคะแนนของเด็กแตกต่างจากช่วงคะแนนของเด็กส่วนใหญ่ ไม่ว่าเด็กจะได้คะแนนมากหรือน้อยกว่าก็ตาม พ่อแม่ควรตระหนักถึงการส่งเสริมให้เด็กประพฤติปฏิบัติตนให้เหมาะสมตามแนวทางการพัฒนาความฉลาดทางอารมณ์แต่ละด้าน</p>
              </div>
            </div>
          </section>

          <aside class="rounded-lg border border-reseda/10 bg-white/92 p-7 shadow-[0_18px_45px_rgba(83,76,65,0.08)] sm:p-9">
            <h2 class="text-xl font-bold text-ink">รายละเอียดเกณฑ์การให้คะแนน</h2>
            
            <div class="mt-5 grid gap-4">
              <div class="rounded-lg border border-reseda/10 bg-milk p-4">
                <h3 class="text-sm font-bold text-ink">ด้านดี</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">1.1 ควบคุมอารมณ์:</strong> ปกติ 18-24</li>
                  <li><strong class="text-ink">1.2 ใส่ใจผู้อื่น:</strong> ปกติ 22-31</li>
                  <li><strong class="text-ink">1.3 ยอมรับผิด:</strong> ปกติ 19-25</li>
                </ul>
              </div>

              <div class="rounded-lg border border-reseda/10 bg-milk p-4">
                <h3 class="text-sm font-bold text-ink">ด้านเก่ง</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">2.1 มุ่งมั่นพยายาม:</strong> ปกติ 20-25</li>
                  <li><strong class="text-ink">2.2 ปรับตัวต่อปัญหา:</strong> ปกติ 16-21</li>
                  <li><strong class="text-ink">2.3 กล้าแสดงออก:</strong> ปกติ 14-20</li>
                </ul>
              </div>

              <div class="rounded-lg border border-reseda/10 bg-milk p-4">
                <h3 class="text-sm font-bold text-ink">ด้านสุข</h3>
                <ul class="mt-2 grid gap-1 text-sm leading-6 text-ink/70">
                  <li><strong class="text-ink">3.1 พอใจในตนเอง:</strong> ปกติ 16-21</li>
                  <li><strong class="text-ink">3.2 รู้จักปรับใจ:</strong> ปกติ 15-20</li>
                  <li><strong class="text-ink">3.3 รื่นเริงเบิกบาน:</strong> ปกติ 16-21</li>
                </ul>
              </div>
            </div>
          </aside>
        </div>
        
        <div class="mt-8 flex justify-end border-t border-reseda/15 pt-4">
          <a href="{{ route('assessment.show', $assessment['slug']) }}" class="btn-secondary min-h-10 px-4 py-2 text-sm">ทำแบบประเมินอีกครั้ง</a>
        </div>

      </div>
    </section>
  </main>
</x-layouts.app>
