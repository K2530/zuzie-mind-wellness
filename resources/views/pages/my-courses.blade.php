<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - My Learning">
  <main class="bg-[#faf8f4] min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-6xl">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-8" data-i18n="myLearning">คอร์สเรียนของฉัน</h1>
      
      @php
        $myCourses = session('my_courses', []);
      @endphp

      @if(count($myCourses) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          @foreach($myCourses as $item)
            <a href="{{ route('learn', 1) }}" class="block bg-white rounded-xl overflow-hidden shadow-sm border border-reseda/10 group cursor-pointer hover:shadow-md transition">
              <!-- Image -->
              <div class="relative aspect-video overflow-hidden bg-gray-200">
                <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition"></div>
                <!-- Play button -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <div class="w-12 h-12 bg-white/90 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-ink/80 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                  </div>
                </div>
              </div>
              
              <!-- Content -->
              <div class="p-4">
                <h3 class="font-bold text-ink text-[15px] leading-snug mb-1 line-clamp-2">{{ $item['title'] ?? 'หลุดจากความสัมพันธ์ที่ทำร้ายใจ' }}</h3>
                <p class="text-xs text-ink/60 mb-3">Zuzie Mind Wellness</p>
                
                <!-- Progress -->
                <div class="w-full bg-gray-200 rounded-full h-1.5 mb-2">
                  <div class="bg-[#536442] h-1.5 rounded-full" style="width: 60%"></div>
                </div>
                <div class="flex justify-between items-center text-[11px] text-ink/60 font-medium">
                  <span>60% Complete</span>
                  <span>Continue</span>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      @else
        <div class="bg-white rounded-2xl p-12 text-center shadow-sm border border-reseda/10 my-10 max-w-2xl mx-auto">
          <div class="w-20 h-20 bg-[#faf8f4] text-[#b09e86] rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
          </div>
          <h2 class="text-2xl font-bold text-ink mb-3">คุณยังไม่มีคอร์สเรียน</h2>
          <p class="text-ink/70 mb-8">เริ่มต้นการเรียนรู้และพัฒนาจิตใจไปกับคอร์สของเราได้เลยครับ</p>
          <a href="{{ route('home') }}#courses" class="bg-[#536442] hover:bg-[#425034] transition text-white font-bold px-8 py-3.5 rounded-full shadow-sm inline-block">ดูคอร์สเรียนทั้งหมด</a>
        </div>
      @endif

    </div>
  </main>
</x-layouts.app>
