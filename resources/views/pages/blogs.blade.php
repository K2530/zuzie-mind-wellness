<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Blogs">
  <main class="bg-[#faf8f4] min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-6xl">
      
      <!-- Header -->
      <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-2">บทความ</h1>
        <p class="text-ink/70">ความรู้ดีๆ เพื่อสุขภาพใจที่ดีขึ้น</p>
      </div>

      <!-- Filters -->
      <div class="flex flex-wrap justify-center gap-3 mb-10">
        <button class="bg-[#536442] text-white px-6 py-2.5 rounded-full font-bold text-sm shadow-sm">ทั้งหมด</button>
        <button class="bg-white border border-reseda/20 text-ink/70 hover:border-[#536442] hover:text-[#536442] transition px-6 py-2.5 rounded-full font-bold text-sm shadow-sm">ความสัมพันธ์</button>
        <button class="bg-white border border-reseda/20 text-ink/70 hover:border-[#536442] hover:text-[#536442] transition px-6 py-2.5 rounded-full font-bold text-sm shadow-sm">สุขภาพใจ</button>
        <button class="bg-white border border-reseda/20 text-ink/70 hover:border-[#536442] hover:text-[#536442] transition px-6 py-2.5 rounded-full font-bold text-sm shadow-sm">พัฒนาตัวเอง</button>
        <button class="bg-white border border-reseda/20 text-ink/70 hover:border-[#536442] hover:text-[#536442] transition px-6 py-2.5 rounded-full font-bold text-sm shadow-sm">การนอน</button>
        <button class="bg-white border border-reseda/20 text-ink/70 hover:border-[#536442] hover:text-[#536442] transition px-6 py-2.5 rounded-full font-bold text-sm shadow-sm">Trauma</button>
      </div>

      <!-- Blog Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
        
        <!-- Blog 1 -->
        <a href="{{ route('article', 1) }}" class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-reseda/10 group cursor-pointer hover:shadow-md transition">
          <div class="relative aspect-[4/3] overflow-hidden">
            <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-[11px] font-bold px-2 py-1 rounded backdrop-blur-sm">
              5 นาที
            </div>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink text-[15px] leading-snug mb-3 group-hover:text-[#536442] transition">10 สัญญาณว่าคุณกำลังอยู่ในความสัมพันธ์ Toxic</h3>
            <p class="text-xs text-ink/50">12 พ.ค. 2024</p>
          </div>
        </a>

        <!-- Blog 2 -->
        <a href="{{ route('article', 2) }}" class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-reseda/10 group cursor-pointer hover:shadow-md transition">
          <div class="relative aspect-[4/3] overflow-hidden">
            <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-[11px] font-bold px-2 py-1 rounded backdrop-blur-sm">
              4 นาที
            </div>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink text-[15px] leading-snug mb-3 group-hover:text-[#536442] transition">ทำไมเราถึงยอมคนที่ทำร้ายเรา?</h3>
            <p class="text-xs text-ink/50">8 พ.ค. 2024</p>
          </div>
        </a>

        <!-- Blog 3 -->
        <a href="{{ route('article', 3) }}" class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-reseda/10 group cursor-pointer hover:shadow-md transition">
          <div class="relative aspect-[4/3] overflow-hidden">
            <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-[11px] font-bold px-2 py-1 rounded backdrop-blur-sm">
              6 นาที
            </div>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink text-[15px] leading-snug mb-3 group-hover:text-[#536442] transition">วิธีรับมือกับความเครียดในชีวิตประจำวัน</h3>
            <p class="text-xs text-ink/50">5 พ.ค. 2024</p>
          </div>
        </a>

        <!-- Blog 4 -->
        <a href="{{ route('article', 4) }}" class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-reseda/10 group cursor-pointer hover:shadow-md transition">
          <div class="relative aspect-[4/3] overflow-hidden">
            <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-[11px] font-bold px-2 py-1 rounded backdrop-blur-sm">
              7 นาที
            </div>
          </div>
          <div class="p-5">
            <h3 class="font-bold text-ink text-[15px] leading-snug mb-3 group-hover:text-[#536442] transition">Burnout คืออะไร? สัญญาณและวิธีรับมือ</h3>
            <p class="text-xs text-ink/50">3 พ.ค. 2024</p>
          </div>
        </a>

      </div>

      <!-- Button -->
      <div class="text-center">
        <button class="bg-[#536442] text-white hover:bg-[#425034] transition rounded-full px-10 py-3.5 text-[15px] font-bold shadow-md w-full sm:w-auto min-w-[200px]">
          ดูบทความทั้งหมด
        </button>
      </div>

    </div>
  </main>
</x-layouts.app>
