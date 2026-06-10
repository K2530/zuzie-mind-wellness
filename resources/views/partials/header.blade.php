<header class="sticky top-0 z-40 border-b border-reseda/10 bg-white/92 backdrop-blur">
  <div class="container-header flex min-h-20 items-center justify-between gap-3">
    <a href="{{ route('home') }}#home" class="shrink-0 leading-none" aria-label="Zuzie Mind Wellness">
      <span class="block font-serif text-4xl leading-8 tracking-normal text-reseda">Zuzie</span>
      <span class="block text-[10px] font-semibold uppercase tracking-[0.28em] text-reseda/70">Mind Wellness</span>
    </a>

    <nav class="hidden items-center gap-8 text-[13px] font-semibold text-ink lg:flex" aria-label="Main navigation">
      @foreach ($navItems as $item)
        <a class="whitespace-nowrap transition hover:text-reseda" href="{{ $item['href'] }}" data-i18n="{{ $item['key'] }}"></a>
      @endforeach
    </nav>

    <div class="hidden items-center gap-2 lg:flex">
      @if(session('logged_in'))
        <a href="{{ route('booking') }}" class="btn-consult min-h-11 px-3 py-2" data-i18n="bookConsult"></a>
        <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line min-h-11 px-3 py-2" rel="noopener" data-i18n="line"></a>
        <a href="{{ route('cart') }}" class="text-ink hover:text-reseda transition relative ml-2" aria-label="Cart">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          @if(session('cart'))
            <span class="absolute -top-1 -right-1 bg-[#e35641] text-white text-[9px] font-bold w-4 h-4 flex items-center justify-center rounded-full">{{ count(session('cart')) }}</span>
          @endif
        </a>
        <div class="relative ml-2">
            <button type="button" id="user-menu-btn" class="relative flex items-center justify-center w-9 h-9 rounded-full bg-[#1c1d1f] text-white font-bold hover:bg-black transition focus:outline-none" aria-expanded="false">
              {{ session('user.initial') }}
              <span class="absolute top-0 right-0 w-3 h-3 bg-[#9547d4] border-2 border-white rounded-full"></span>
            </button>
            <div id="user-menu" class="absolute right-0 mt-3 w-[260px] bg-white rounded-lg shadow-[0_4px_16px_rgba(0,0,0,0.1)] py-2 border border-gray-100 hidden z-50">
              <div class="px-4 py-3 flex items-center gap-3">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#1c1d1f] text-white font-bold text-xl shrink-0">
                  {{ session('user.initial') }}
                </div>
                <div class="overflow-hidden">
                  <p class="text-[15px] font-bold text-ink truncate">{{ session('user.name') }}</p>
                  <p class="text-[13px] text-ink/70 truncate">{{ session('user.email') }}</p>
                </div>
              </div>
              <hr class="border-gray-100 my-1">
              <a href="{{ route('my.courses') }}" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="myLearning">คอร์สเรียนของฉัน</a>
              <a href="{{ route('cart') }}" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition flex justify-between items-center">
                <span data-i18n="myCart">ตะกร้าสินค้า</span>
                @if(session('cart'))
                  <span class="bg-[#e35641] text-white text-[10px] font-bold w-5 h-5 flex items-center justify-center rounded-full">{{ count(session('cart')) }}</span>
                @endif
              </a>
              <a href="#" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="wishlist">รายการโปรด</a>
              <hr class="border-gray-100 my-1">
              <a href="#" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="notifications">การแจ้งเตือน</a>
              <a href="#" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="messages">ข้อความ</a>
              <hr class="border-gray-100 my-1">
              <a href="#" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="accountSettings">ตั้งค่าบัญชี</a>
              <a href="#" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="purchaseHistory">ประวัติการสั่งซื้อ</a>
              <hr class="border-gray-100 my-1">
              <button type="button" class="w-full text-left px-4 py-2 text-[15px] text-ink hover:text-reseda transition flex justify-between items-center" onclick="openLangModal()">
                <span data-i18n="language">ภาษา (Language)</span>
                <span class="flex items-center gap-1 text-ink/60">
                  <span id="current-lang-text">ไทย</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </span>
              </button>
              <hr class="border-gray-100 my-1">
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-[15px] text-ink hover:text-reseda transition" data-i18n="logout">ออกจากระบบ</a>
            </div>
        </div>
      @else
        <div>
          <button type="button" id="lang-btn" class="flex items-center justify-center p-2 rounded-full text-reseda hover:bg-almond transition" aria-expanded="false">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </button>
        </div>
        <a href="{{ route('booking') }}" class="btn-consult min-h-11 px-3 py-2" data-i18n="bookConsult"></a>
        <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line min-h-11 px-3 py-2" rel="noopener" data-i18n="line"></a>
        <a href="{{ route('login') }}" class="btn-secondary border-reseda text-reseda hover:bg-reseda hover:text-white min-h-11 px-4 py-2" data-i18n="navLogin">เข้าสู่ระบบ</a>
      @endif
    </div>

    <button class="btn-secondary px-3 lg:hidden" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-button>
      <span class="sr-only">Open menu</span>
      <span class="text-2xl leading-none">&#9776;</span>
    </button>
  </div>

  <div id="mobile-menu" class="hidden border-t border-reseda/10 bg-white lg:hidden" data-mobile-menu>
    <div class="container-header grid gap-2 py-4">
      @foreach ($navItems as $item)
        <a class="rounded-md px-3 py-3 text-base font-semibold hover:bg-almond" href="{{ $item['href'] }}" data-i18n="{{ $item['key'] }}"></a>
      @endforeach
      <div class="mt-2 grid grid-cols-2 gap-2">
        @if(session('logged_in'))
          <div class="col-span-2 px-3 py-4 border border-reseda/10 rounded-lg mb-2">
            <div class="flex items-center gap-3 mb-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#1c1d1f] text-white font-bold text-lg shrink-0 relative">
                {{ session('user.initial') }}
                <span class="absolute top-0 right-0 w-3 h-3 bg-[#9547d4] border-2 border-[#1c1d1f] rounded-full"></span>
              </div>
              <div class="overflow-hidden">
                <p class="text-sm font-bold text-ink truncate">{{ session('user.name') }}</p>
                <p class="text-[12px] text-ink/70 truncate">{{ session('user.email') }}</p>
              </div>
            </div>
            <a href="{{ route('my.courses') }}" class="block py-2 text-sm text-ink hover:text-reseda transition" data-i18n="myLearning">คอร์สเรียนของฉัน</a>
            <a href="{{ route('cart') }}" class="block py-2 text-sm text-ink hover:text-reseda transition flex justify-between items-center">
              <span data-i18n="myCart">ตะกร้าสินค้า</span>
              @if(session('cart'))
                <span class="bg-[#e35641] text-white text-[10px] font-bold w-5 h-5 flex items-center justify-center rounded-full">{{ count(session('cart')) }}</span>
              @endif
            </a>
            <a href="#" class="block py-2 text-sm text-ink hover:text-reseda transition" data-i18n="wishlist">รายการโปรด</a>
            <a href="#" class="block py-2 text-sm text-ink hover:text-reseda transition" data-i18n="accountSettings">ตั้งค่าบัญชี</a>
            <hr class="border-reseda/10 my-2">
            <button type="button" class="w-full text-left py-2 text-sm text-ink hover:text-reseda transition flex justify-between items-center" onclick="openLangModal()">
              <span data-i18n="language">ภาษา (Language)</span>
              <svg class="w-4 h-4 text-ink/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </button>
            <hr class="border-reseda/10 my-2">
            <a href="{{ route('logout') }}" class="block py-2 text-sm text-ink hover:text-reseda transition" data-i18n="logout">ออกจากระบบ</a>
          </div>
          <a href="{{ route('booking') }}" class="btn-consult col-span-2" data-i18n="bookConsult"></a>
          <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line col-span-2" rel="noopener" data-i18n="line"></a>
        @else
          <div class="col-span-2">
            <button type="button" id="lang-btn-mobile" class="w-full flex items-center justify-center gap-2 btn-secondary" aria-expanded="false">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <span id="lang-current-mobile">ภาษา (Language)</span>
            </button>
          </div>
          <a href="{{ route('login') }}" class="btn-secondary border-reseda text-reseda col-span-2" data-i18n="navLogin">เข้าสู่ระบบ</a>
          <a href="{{ route('booking') }}" class="btn-consult col-span-2" data-i18n="bookConsult"></a>
          <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line col-span-2" rel="noopener" data-i18n="line"></a>
        @endif
      </div>
    </div>
  </div>
</header>

<div id="lang-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
  <div class="absolute inset-0 bg-ink/30 backdrop-blur-sm" id="lang-modal-backdrop"></div>
  <div class="relative w-[95%] max-w-2xl bg-white rounded-2xl shadow-[0_18px_45px_rgba(83,76,65,0.15)] p-6 md:p-8 transform transition-transform duration-300 scale-95" id="lang-modal-content">
    <div class="flex items-center justify-between mb-8">
      <h3 class="text-xl font-bold text-ink" data-i18n="selectLanguage">เลือกภาษา</h3>
      <button type="button" id="lang-modal-close" class="p-2 text-ink/50 hover:text-ink transition rounded-full hover:bg-almond/50">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
      </button>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-y-4 gap-x-2">
      <button type="button" class="lang-select-btn px-4 py-2.5 text-sm text-left rounded-lg border border-transparent hover:bg-almond/30 transition text-ink/70" data-lang="th">ภาษาไทย</button>
      <button type="button" class="lang-select-btn px-4 py-2.5 text-sm text-left rounded-lg border border-transparent hover:bg-almond/30 transition text-ink/70" data-lang="en">English</button>
    </div>
  </div>
</div>
