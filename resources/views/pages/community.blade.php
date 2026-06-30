<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - VIP Community">
  <main class="bg-[#faf8f4] relative min-h-[calc(100vh-64px)] overflow-hidden">
    <!-- Split Background Layout -->
    <div class="absolute inset-0 z-0 flex flex-col lg:flex-row">
      <div class="w-full lg:w-1/2 h-full bg-[#faf8f4]"></div>
      <!-- Right Side Image with gradient fade -->
      <div class="w-full lg:w-1/2 h-full relative">
        <div class="absolute inset-0 bg-gradient-to-b lg:bg-gradient-to-r from-[#faf8f4] via-[#faf8f4]/80 to-transparent z-10 w-full lg:w-32"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#faf8f4] to-transparent z-10 h-32 bottom-0"></div>
        <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" class="w-full h-full object-cover opacity-90 object-[70%_50%]">
      </div>
    </div>

    <div class="container mx-auto px-6 lg:px-8 max-w-6xl relative z-10 pt-16 lg:pt-24 pb-12">
      <div class="max-w-xl">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-ink mb-3 tracking-tight" data-i18n="vipTitle">กลุ่มซูซี่ VIP Community</h1>
        <p class="text-xl sm:text-2xl text-ink/80 font-medium mb-10" data-i18n="vipSub">พื้นที่ปลอดภัยสำหรับคนที่อยากเติบโตไปด้วยกัน</p>

        <div class="bg-white/80 backdrop-blur-md border border-white/50 rounded-3xl p-8 shadow-sm mb-10">
          <h2 class="text-lg font-bold text-ink mb-5" data-i18n="youWillGet">คุณจะได้อะไร</h2>
          <ul class="space-y-4">
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-[#536442]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#536442]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <span class="text-ink font-medium text-lg" data-i18n="vipF1">Live พูดคุยกับนักจิตวิทยาและผู้เชี่ยวชาญ</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-[#536442]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#536442]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <span class="text-ink font-medium text-lg" data-i18n="vipF2">Workshop และกิจกรรมฮีลใจ</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-[#536442]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#536442]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <span class="text-ink font-medium text-lg" data-i18n="vipF3">คอร์สและคอนเทนต์เฉพาะสมาชิก</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-[#536442]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#536442]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <span class="text-ink font-medium text-lg" data-i18n="vipF4">กลุ่มพูดคุย แชร์ประสบการณ์</span>
            </li>
            <li class="flex items-center gap-3">
              <div class="w-6 h-6 rounded-full bg-[#536442]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#536442]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <span class="text-ink font-medium text-lg" data-i18n="vipF5">ส่วนลดพิเศษสำหรับบริการและคอร์ส</span>
            </li>
          </ul>
        </div>

        <div class="bg-white/90 backdrop-blur-md rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-md border border-reseda/20 max-w-lg">
          <div>
            <p class="text-ink/60 font-bold mb-1" data-i18n="onlyPerMonth">เพียงเดือนละ</p>
            <div class="text-4xl font-extrabold text-ink">990 <span class="text-2xl font-bold" data-i18n="baht">บาท</span></div>
          </div>
          <a href="{{ route('checkout', ['course_id' => 999]) }}" class="w-full sm:w-auto bg-[#3f4b32] text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-[#2c3523] transition text-center shadow-lg hover:shadow-xl transform hover:-translate-y-0.5" data-i18n="btnSubscribe">
            สมัครสมาชิกเลย
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Features Bar -->
    <div class="relative z-20 bg-white/60 backdrop-blur-md border-t border-reseda/20 py-8 lg:absolute lg:bottom-0 lg:w-full">
      <div class="container mx-auto px-6 lg:px-8 max-w-6xl">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center divide-x divide-reseda/20">
          <div class="px-4">
            <h4 class="font-bold text-ink mb-1" data-i18n="teamExpert">ทีมผู้เชี่ยวชาญกว่า</h4>
            <p class="text-xs sm:text-sm text-ink/70" data-i18n="teamDesc">ปรึกษาสุขภาพจิต<br>อย่างปลอดภัย</p>
          </div>
          <div class="px-4">
            <h4 class="font-bold text-ink mb-1" data-i18n="liveWeekly">กิจกรรม Live</h4>
            <p class="text-xs sm:text-sm text-ink/70" data-i18n="liveDesc">ทุกสัปดาห์</p>
          </div>
          <div class="px-4">
            <div class="w-8 h-8 mx-auto mb-2 text-[#536442]">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            </div>
            <h4 class="font-bold text-ink mb-1" data-i18n="healSchedule">ตารางฮีลใจ</h4>
            <p class="text-xs sm:text-sm text-ink/70" data-i18n="healDesc">จัดการตนเอง</p>
          </div>
          <div class="px-4">
            <h4 class="font-bold text-ink mb-1" data-i18n="safeSpace">พื้นที่ส่วนตัว</h4>
            <p class="text-xs sm:text-sm text-ink/70" data-i18n="safeDesc">ปลอดภัย เป็นกันเอง<br>และมีเพื่อนรับฟัง</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-layouts.app>
