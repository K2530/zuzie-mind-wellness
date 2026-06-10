<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - ค้นหาตามหัวข้อ / แฮชแท็ก">
  <main class="bg-milk pb-20">
    <section class="py-16 sm:py-20">
      <div class="container-soft text-center">
        <h1 class="text-3xl font-extrabold text-ink sm:text-4xl">ค้นหาตามหัวข้อ / แฮชแท็ก</h1>
        <p class="mt-4 text-base text-ink/70">รวมแฮชแท็กที่คุณสามารถค้นหาในโซเชียลได้ง่าย ๆ</p>
      </div>

      <div class="container-soft mt-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($categories as $category)
            <div class="{{ $category['bg'] }} rounded-2xl p-6 flex flex-col justify-between shadow-sm min-h-[300px]">
              <div>
                <h2 class="text-xl font-bold text-ink mb-6">{{ $category['title'] }}</h2>
                <ul class="space-y-4">
                  @foreach ($category['tags'] as $tag)
                    <li class="flex items-center gap-2 text-sm font-medium text-ink/80 hover:text-reseda transition cursor-pointer">
                      <svg class="w-4 h-4 text-reseda" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                      </svg>
                      {{ $tag }}
                    </li>
                  @endforeach
                </ul>
              </div>
              <div class="mt-8 text-right">
                <a href="#" class="text-sm font-semibold text-reseda hover:text-ink transition">ดูทั้งหมด &rarr;</a>
              </div>
            </div>
          @endforeach
        </div>

        <div class="mt-16 bg-[#f4efe8] rounded-2xl p-8 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-sm border border-reseda/10">
          <p class="text-lg font-bold text-ink">
            เจอหัวข้อที่ใช่แล้ว?<br>
            <span class="font-medium text-base text-ink/80">ไปค้นหาในโซเชียลแล้วแชร์ประสบการณ์กันนะ</span>
          </p>
          <a href="#" class="btn-primary shrink-0 px-8">ทัก LINE</a>
        </div>
      </div>
    </section>
  </main>
</x-layouts.app>
