<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - วิดีโอฮีลใจ">
  <main id="videos-page" class="py-12 sm:py-16">
    <div class="container-soft mx-auto px-4">
      <div class="mb-8 text-center">
        <h1 class="text-3xl font-bold text-ink sm:text-4xl" data-i18n="videosPageTitle">วิดีโอฮีลใจ</h1>
        <p class="mt-3 text-base text-ink/70 sm:text-lg" data-i18n="videosPageDesc">คลิปดี ๆ ที่เราอยากส่งต่อให้คุณ</p>
      </div>

      <div class="mb-10 flex flex-wrap justify-center gap-2 sm:gap-3" id="video-tabs">
        @foreach ($videoCategories as $index => $cat)
          <button
            type="button"
            data-category="{{ $cat['id'] }}"
            data-i18n="{{ $cat['key'] }}"
            class="video-tab rounded-full px-5 py-2 text-sm font-medium transition-colors {{ $index === 0 ? 'active-tab bg-[#5F6A53] text-white shadow-sm' : 'border border-gray-200 bg-white text-ink/70 hover:bg-gray-50' }}">
            {{ $cat['label'] }}
          </button>
        @endforeach
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="video-grid">
        @foreach ($videos as $video)
          <article class="video-item video-card-visible group flex-col cursor-pointer overflow-hidden rounded-[20px] border border-gray-100/50 bg-white shadow-[0_4px_20px_rgba(0,0,0,0.04)] transition-all hover:shadow-lg" data-video-category="{{ $video['category'] }}">
            <div class="relative aspect-[16/10] overflow-hidden bg-reseda">
              <img src="{{ asset('assets/images/hero-woman-tea.png') }}" alt="{{ $video['title'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
              <div class="absolute inset-0 bg-black/5 transition-opacity duration-300 group-hover:bg-black/15"></div>

              <div class="absolute inset-0 flex items-center justify-center">
                <div class="flex h-12 w-12 items-center justify-center rounded-full border-[1.5px] border-white/60 bg-white/20 shadow-sm backdrop-blur-sm transition-all duration-300 group-hover:scale-110 group-hover:bg-white/30">
                  <svg class="ml-0.5 h-5 w-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                  </svg>
                </div>
              </div>

              <span class="absolute bottom-3 right-3 rounded-md bg-black/70 px-2 py-1 text-[11px] font-bold tracking-wide text-white">
                {{ $video['time'] }}
              </span>
            </div>

            <div class="flex flex-1 flex-col justify-between p-4">
              <h3 class="line-clamp-2 text-sm font-bold leading-relaxed text-ink transition-colors duration-200 group-hover:text-[#5F6A53] sm:text-base">
                {{ $video['title'] }}
              </h3>
              <p class="mt-2 text-sm text-ink/55">{{ $video['source'] }}</p>
            </div>
          </article>
        @endforeach
      </div>

      <div class="mt-12 flex justify-center">
        <a href="#" class="inline-flex items-center justify-center rounded-md bg-[#5F6A53] px-12 py-3.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-[#4d5643]" data-i18n="btnViewAllVideos">
          ดูวิดีโอทั้งหมด
        </a>
      </div>
    </div>
  </main>
</x-layouts.app>
