<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - คอร์สออนไลน์">
  <main class="bg-milk pb-20">
    <section class="py-16 sm:py-20">
      <div class="container-soft text-center">
        <h1 class="text-3xl font-extrabold text-ink sm:text-4xl" data-i18n="courseTitle">คอร์สออนไลน์</h1>
        <p class="mt-4 text-base text-ink/70" data-i18n="courseSubtitle">เรียนรู้ เข้าใจ และเยียวยาใจตัวเองได้จากที่บ้าน</p>
      </div>

      <div class="container-soft mt-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($courses as $index => $course)
            @if ($index === 0)
              {{-- First Card: Dark Green Gradient --}}
              <div class="rounded-2xl p-6 flex flex-col justify-between shadow-[0_18px_45px_rgba(83,76,65,0.08)] bg-gradient-to-b from-[#404c3e] to-[#2a3429] text-white min-h-[400px] relative overflow-hidden">
                @if ($course['badge'])
                  <span class="absolute top-6 left-6 bg-[#d9534f] text-white text-xs font-bold px-3 py-1 rounded-full">
                    <span class="lang-th">{{ $course['badge'] }}</span>
                    <span class="lang-en hidden">{{ $course['badge_en'] ?? $course['badge'] }}</span>
                  </span>
                @endif
                <div class="mt-12">
                  <h2 class="text-2xl font-bold mb-3">
                    <span class="lang-th">{{ $course['title'] }}</span>
                    <span class="lang-en hidden">{{ $course['title_en'] ?? $course['title'] }}</span>
                  </h2>
                  <p class="text-sm text-white/80 leading-relaxed">
                    <span class="lang-th">{{ $course['desc'] }}</span>
                    <span class="lang-en hidden">{{ $course['desc_en'] ?? $course['desc'] }}</span>
                  </p>
                </div>
                <div class="mt-8">
                  <div class="flex items-end gap-2 mb-4">
                    <span class="text-xl font-bold">{{ $course['price'] }} <span data-i18n="baht">บาท</span></span>
                    @if ($course['old_price'])
                      <span class="text-sm line-through text-white/60">{{ $course['old_price'] }} <span data-i18n="baht">บาท</span></span>
                    @endif
                  </div>
                  <a href="{{ route('course.detail', 1) }}" class="block w-full text-center bg-white text-ink font-bold py-3 rounded-lg hover:bg-milk transition" data-i18n="seeDetails">
                    ดูรายละเอียด
                  </a>
                </div>
              </div>
            @else
              {{-- Other Cards: Image Background --}}
              <a href="{{ route('course.detail', $index + 1) }}" class="rounded-2xl flex flex-col justify-between shadow-[0_18px_45px_rgba(83,76,65,0.08)] relative overflow-hidden min-h-[400px] group cursor-pointer">
                <img src="{{ asset($course['image']) }}" alt="{{ $course['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                
                <div class="relative z-10 p-6 flex flex-col justify-end h-full text-white">
                  @if ($course['badge'])
                    <span class="self-start bg-[#d9534f] text-white text-xs font-bold px-3 py-1 rounded-full mb-auto">
                      <span class="lang-th">{{ $course['badge'] }}</span>
                      <span class="lang-en hidden">{{ $course['badge_en'] ?? $course['badge'] }}</span>
                    </span>
                  @endif
                  <div>
                    <h2 class="text-xl font-bold mb-2 group-hover:text-reseda transition-colors">
                      <span class="lang-th">{{ $course['title'] }}</span>
                      <span class="lang-en hidden">{{ $course['title_en'] ?? $course['title'] }}</span>
                    </h2>
                    <p class="text-sm text-white/80 leading-relaxed mb-4">
                      <span class="lang-th">{{ $course['desc'] }}</span>
                      <span class="lang-en hidden">{{ $course['desc_en'] ?? $course['desc'] }}</span>
                    </p>
                    <div class="flex items-center gap-2">
                      <span class="text-lg font-bold">{{ $course['price'] }} <span data-i18n="baht">บาท</span></span>
                      @if ($course['old_price'])
                        <span class="text-xs line-through text-white/60">{{ $course['old_price'] }} <span data-i18n="baht">บาท</span></span>
                      @endif
                    </div>
                  </div>
                </div>
              </a>
            @endif
          @endforeach
        </div>

        <div class="mt-12 text-center">
          <a href="#" class="btn-primary inline-block px-12" data-i18n="seeAllCoursesBtn">ดูคอร์สทั้งหมด</a>
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>
