<x-layouts.app :nav-items="$navItems" title="{{ $video['title'] }} - Zuzie Mind Wellness">
  <main class="bg-[#faf8f4] min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-5xl">
      
      <!-- Breadcrumb -->
      <nav class="mb-6 flex text-sm font-medium text-ink/60">
        <a href="{{ route('videos') }}" class="hover:text-reseda transition">วิดีโอฮีลใจ</a>
        <span class="mx-2">/</span>
        <span class="text-ink truncate max-w-[200px] sm:max-w-md">{{ $video['title'] }}</span>
      </nav>

      <!-- Video Player Area -->
      <div class="bg-black rounded-2xl overflow-hidden shadow-lg aspect-video relative group mb-8">
        <!-- Mock Video Thumbnail -->
        <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover opacity-80" alt="{{ $video['title'] }}">
        
        <!-- Play Button Overlay -->
        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition cursor-pointer">
          <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border-2 border-white/50 group-hover:scale-110 transition-transform">
            <svg class="w-10 h-10 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
          </div>
        </div>
      </div>

      <!-- Video Details -->
      <div class="mb-12">
        <div class="flex flex-wrap items-center gap-3 mb-4">
          <span class="px-3 py-1 bg-reseda/10 text-reseda rounded-full text-xs font-bold">{{ $video['category'] }}</span>
          <span class="text-sm text-ink/60 font-medium flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            {{ $video['time'] }}
          </span>
          <span class="text-sm text-ink/60 font-medium">|</span>
          <span class="text-sm text-ink/60 font-medium">โดย {{ $video['source'] }}</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-6 leading-tight">{{ $video['title'] }}</h1>
        <p class="text-ink/80 leading-relaxed max-w-3xl text-lg">
          วิดีโอนี้จะช่วยให้คุณเข้าใจและหาวิธีรับมือกับความรู้สึกในแบบของคุณ พร้อมให้กำลังใจในการก้าวผ่านช่วงเวลาที่ยากลำบาก
          เรียนรู้เทคนิคและวิธีการปรับมุมมองเพื่อสุขภาพใจที่แข็งแรงขึ้น
        </p>

        <!-- Actions -->
        <div class="flex items-center gap-4 mt-8 pt-8 border-t border-reseda/10">
          <button class="flex items-center gap-2 text-ink/70 hover:text-[#536442] transition font-bold text-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            <span data-i18n="save">บันทึก</span>
          </button>
          <button class="flex items-center gap-2 text-ink/70 hover:text-[#536442] transition font-bold text-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6.632l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
            <span data-i18n="share">แชร์</span>
          </button>
        </div>
      </div>

      <!-- Related Videos -->
      <div>
        <h3 class="text-xl font-bold text-ink mb-6" data-i18n="relVideos">วิดีโออื่นๆ ที่เกี่ยวข้อง</h3>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          @foreach ($relatedVideos as $index => $relVideo)
            <a href="{{ route('video.show', $index) }}" class="group block">
              <div class="relative overflow-hidden rounded-xl bg-reseda mb-3">
                <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="aspect-[16/10] w-full object-cover opacity-80 transition-transform duration-500 group-hover:scale-105" alt="{{ $relVideo['title'] }}">
                <span class="absolute bottom-2 right-2 rounded bg-black/70 px-1.5 py-0.5 text-[10px] font-bold text-white">{{ $relVideo['time'] }}</span>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black/20">
                  <div class="w-10 h-10 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                  </div>
                </div>
              </div>
              <h4 class="text-sm font-bold text-ink line-clamp-2 leading-snug group-hover:text-reseda transition-colors">{{ $relVideo['title'] }}</h4>
            </a>
          @endforeach
        </div>
      </div>

    </div>
  </main>
</x-layouts.app>
