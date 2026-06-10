<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - {{ $course['title'] ?? 'รายละเอียดคอร์ส' }}">
  <main class="bg-milk min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-5xl">
      <div class="bg-white rounded-[2rem] p-6 sm:p-10 shadow-[0_18px_45px_rgba(83,76,65,0.06)] border border-reseda/10">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
          <!-- Left: Image -->
          <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-sm group cursor-pointer">
            <img src="{{ asset('assets/images/hero-woman-tea.png') }}" alt="{{ $course['title'] ?? 'Course Image' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            <!-- Play Button Overlay -->
            <div class="absolute inset-0 flex items-center justify-center bg-black/10 group-hover:bg-black/20 transition-colors">
              <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white/90 rounded-full flex items-center justify-center shadow-lg backdrop-blur-sm group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-ink/70 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </div>

          <!-- Right: Details -->
          <div class="flex flex-col h-full justify-center">
            <div class="flex flex-wrap items-center gap-3 mb-4">
              <h1 class="text-3xl sm:text-4xl font-extrabold text-ink leading-tight">{{ $course['title'] ?? 'หลุดจากความสัมพันธ์ที่ทำร้ายใจ' }}</h1>
              <span class="shrink-0 bg-[#e35641] text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">ขายดี!</span>
            </div>
            
            <p class="text-lg text-ink/70 mb-8 font-medium">{{ $course['desc'] ?? 'เยียวยาใจและสร้างชีวิตใหม่อย่างมั่นคง' }}</p>
            
            <h3 class="text-lg font-bold text-ink mb-4">คุณจะได้เรียนรู้</h3>
            <ul class="space-y-3 mb-8">
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-reseda shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span class="text-ink/80 font-medium">เข้าใจสัญญาณเตือนความสัมพันธ์เป็นพิษ</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-reseda shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span class="text-ink/80 font-medium">วิธีตั้งขอบเขตและปกป้องตัวเอง</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-reseda shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span class="text-ink/80 font-medium">เยียวยาใจและให้คุณค่าตัวเอง</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-reseda shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                <span class="text-ink/80 font-medium">สร้างชีวิตใหม่ที่มีความสุข</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- 4 Info Items -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-0 text-center divide-x-0 md:divide-x divide-reseda/10 mt-10 mb-8 bg-[#faf8f4] border border-reseda/15 p-6 rounded-2xl">
          <div class="flex flex-col items-center justify-center p-2">
            <svg class="w-7 h-7 text-ink/60 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            <span class="text-sm font-bold text-ink">บทเรียนทั้งหมด</span>
            <span class="text-sm text-ink/70">20 บทเรียน</span>
          </div>
          <div class="flex flex-col items-center justify-center p-2">
            <svg class="w-7 h-7 text-ink/60 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-sm font-bold text-ink">ความยาว</span>
            <span class="text-sm text-ink/70">4 ชั่วโมง</span>
          </div>
          <div class="flex flex-col items-center justify-center p-2">
            <svg class="w-7 h-7 text-ink/60 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="text-sm font-bold text-ink">แบบฝึกหัด</span>
            <span class="text-sm text-ink/70">Worksheet</span>
          </div>
          <div class="flex flex-col items-center justify-center p-2">
            <svg class="w-7 h-7 text-ink/60 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-sm font-bold text-ink">เรียนได้ตลอดชีพ</span>
          </div>
        </div>

        <hr class="border-reseda/10 my-8">

        <!-- Bottom Action Bar -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-6 px-2">
          <div class="text-3xl font-extrabold text-ink">{{ $course['price'] ?? '2,990' }} บาท</div>
          <div class="flex flex-col sm:flex-row w-full sm:w-auto gap-4">
            <form action="{{ route('cart.add') }}" method="POST" class="w-full sm:w-auto">
              @csrf
              <button type="submit" class="bg-[#536442] text-white hover:bg-[#425034] transition rounded-full px-10 py-3.5 text-lg font-bold w-full text-center shadow-md">ซื้อคอร์สนี้</button>
            </form>
            <button type="button" class="px-8 py-3.5 text-lg rounded-full border-2 border-[#b09e86]/30 text-[#b09e86] font-bold hover:bg-[#faf8f4] hover:border-[#b09e86] transition w-full sm:w-auto text-center">ทดลองเรียนฟรี</button>
          </div>
        </div>

      </div>
    </div>
  </main>
</x-layouts.app>
