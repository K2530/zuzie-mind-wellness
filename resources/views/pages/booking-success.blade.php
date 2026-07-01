<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Booking Successful">
  <main class="bg-milk min-h-screen pb-20 pt-20 flex items-center justify-center">
    <div class="container-soft max-w-2xl text-center">
      
      <div class="w-24 h-24 bg-[#536442]/10 rounded-full flex items-center justify-center mx-auto mb-8">
        <svg class="w-12 h-12 text-[#536442]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
      </div>

      <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-4" data-i18n="bookingSuccessTitle">จองคิวสำเร็จ!</h1>
      <p class="text-ink/80 mb-8 text-lg" data-i18n="bookingSuccessDesc">ขอบคุณที่ไว้วางใจให้เราดูแล เราได้ส่งรายละเอียดการจองไปยังอีเมลของคุณเรียบร้อยแล้ว</p>

      @if(session('booking'))
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-reseda/10 max-w-md mx-auto mb-10 text-left">
          <h3 class="font-bold text-ink text-lg mb-4 text-center border-b border-gray-100 pb-4" data-i18n="bookingDetails">รายละเอียดการจอง</h3>
          
          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-almond/50 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-reseda" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
              </div>
              <div>
                <p class="text-xs font-bold text-ink/50 uppercase tracking-wider mb-1" data-i18n="serviceLabel">บริการ</p>
                <p class="font-bold text-ink"><span class="lang-th">{{ session('booking')['service'] ?? 'คุยกับนักจิตวิทยา' }}</span><span class="lang-en hidden">{{ session('booking')['service_en'] ?? (session('booking')['service'] ?? 'Talk with Psychologist') }}</span></p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-almond/50 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-reseda" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              </div>
              <div>
                <p class="text-xs font-bold text-ink/50 uppercase tracking-wider mb-1" data-i18n="dateTimeLabel">วันที่และเวลา</p>
                <p class="font-bold text-ink">{{ session('booking')['date'] ?? '15 พฤษภาคม 2024' }}</p>
                <p class="text-ink/80 text-sm mt-0.5"><span data-i18n="timeLabel">เวลา</span> {{ session('booking')['time'] ?? '18:00' }} <span data-i18n="timeUnit">น.</span></p>
              </div>
            </div>
          </div>
        </div>
      @endif

      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('home') }}" class="bg-[#536442] text-white hover:bg-[#425034] transition rounded-full px-10 py-3.5 text-[15px] font-bold w-full sm:w-auto text-center shadow-md" data-i18n="backToHome">
          กลับหน้าหลัก
        </a>
      </div>
      
    </div>
  </main>
</x-layouts.app>
