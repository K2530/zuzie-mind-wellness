<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - ชำระเงิน">
  <main class="bg-[#faf8f4] min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-3xl">
      
      <!-- Header -->
      <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-2" data-i18n="paymentTitle">ชำระเงิน</h1>
        <p class="text-ink/70" data-i18n="paymentSubtitle">กรุณาตรวจสอบข้อมูลและชำระเงินเพื่อยืนยันการจอง</p>
      </div>

      <!-- Progress Steps -->
      <div class="flex items-center justify-between text-sm sm:text-base font-bold relative z-10 mb-12">
        <!-- Connecting Line -->
        <div class="absolute top-5 left-[16%] right-[16%] h-0.5 bg-[#536442]/20 -z-10 mx-auto"></div>
        <div class="absolute top-5 left-[16%] w-[34%] h-0.5 bg-[#536442] -z-10 mx-auto"></div>

        <div class="flex flex-col items-center gap-2 text-[#536442]">
          <div class="w-10 h-10 rounded-full bg-[#536442] text-white flex items-center justify-center shadow-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
          </div>
          <span data-i18n="bookStep1">จองคิว</span>
        </div>
        <div class="flex flex-col items-center gap-2 text-[#536442]">
          <div class="w-10 h-10 rounded-full bg-[#f4ebd0] border-2 border-[#536442] flex items-center justify-center">2</div>
          <span data-i18n="bookStep2">ชำระเงิน</span>
        </div>
        <div class="flex flex-col items-center gap-2 text-ink/40">
          <div class="w-10 h-10 rounded-full bg-white border-2 border-reseda/20 flex items-center justify-center">3</div>
          <span data-i18n="bookStep3">สำเร็จ</span>
        </div>
      </div>

      <!-- Summary & Payment -->
      <form action="{{ route('booking.payment.submit') }}" method="POST">
        @csrf
        <div class="bg-white rounded-3xl p-6 md:p-10 shadow-sm border border-reseda/10">
          
          <h3 class="text-xl font-bold text-ink mb-4 border-b border-reseda/10 pb-4" data-i18n="bookingSummary">สรุปรายการจอง</h3>
          
          <div class="flex justify-between items-start mb-2">
            <div>
              <p class="font-bold text-ink text-lg"><span class="lang-th">{{ session('booking.service') ?? 'คุยกับนักจิตวิทยา' }}</span><span class="lang-en hidden">{{ session('booking.service_en') ?? (session('booking.service') ?? 'Talk with Psychologist') }}</span></p>
              <p class="text-ink/60">{{ session('booking.date') ?? '15 พฤษภาคม 2024' }} <span data-i18n="timeLabel">เวลา</span> {{ session('booking.time') ?? '18:00' }} <span data-i18n="timeUnit">น.</span></p>
            </div>
            <div class="text-right">
              <p class="font-bold text-2xl text-[#b09e86]">1,300 <span class="text-sm" data-i18n="baht">บาท</span></p>
            </div>
          </div>
          
          <div class="mt-8 mb-6">
            <h3 class="font-bold text-ink mb-3" data-i18n="paymentMethod">วิธีชำระเงิน</h3>
            <div class="flex gap-3 mb-6">
              <label class="flex-1 border-2 border-[#536442] bg-[#faf8f4] p-4 rounded-xl cursor-pointer text-center font-bold text-[#536442] transition shadow-sm">
                <input type="radio" name="payment_method" value="promptpay" checked class="hidden">
                <span data-i18n="qrPromptPay">QR PromptPay</span>
              </label>
              <label class="flex-1 border-2 border-transparent bg-gray-50 hover:bg-gray-100 p-4 rounded-xl cursor-pointer text-center font-bold text-ink/40 transition">
                <input type="radio" name="payment_method" value="credit" disabled class="hidden">
                <span data-i18n="creditCardSoon">บัตรเครดิต (เร็วๆ นี้)</span>
              </label>
            </div>

            <!-- Mock QR Code -->
            <div class="bg-white border-2 border-dashed border-[#b09e86]/30 p-8 rounded-2xl flex flex-col items-center justify-center text-center">
              <div class="w-48 h-48 bg-gray-50 border border-gray-100 mb-4 flex items-center justify-center rounded-xl overflow-hidden relative shadow-sm">
                <!-- QR Code pattern using CSS grid as a mock -->
                <div class="absolute inset-4 grid grid-cols-5 grid-rows-5 gap-1 opacity-30">
                  <div class="bg-ink col-span-2 row-span-2 rounded-sm"></div><div class="bg-ink col-start-4 col-span-2 row-span-2 rounded-sm"></div>
                  <div class="bg-ink row-start-4 col-span-2 row-span-2 rounded-sm"></div><div class="bg-ink col-start-4 row-start-4 col-span-2 row-span-2 rounded-sm"></div>
                  <div class="bg-ink col-start-3 row-start-3 rounded-sm"></div><div class="bg-ink col-start-3 row-start-5 rounded-sm"></div>
                </div>
                <div class="relative bg-white font-bold text-[#b09e86] px-4 py-1.5 rounded-full shadow-md text-sm z-10 border border-[#b09e86]/20">Scan to Pay</div>
              </div>
              <p class="font-bold text-ink mb-1" data-i18n="companyName">บจก. ซูซี่ มายด์ เวลเนส</p>
              <p class="text-ink/60 text-sm"><span data-i18n="paymentAmount">ยอดชำระ:</span> 1,300.00 <span data-i18n="baht">บาท</span></p>
              <p class="text-reseda text-xs mt-3 font-semibold px-4 py-2 bg-reseda/10 rounded-full" data-i18n="mockPaymentNote">*นี่คือระบบจำลอง (Mock) กดปุ่มชำระเงินด้านล่างเพื่อผ่านไปยังหน้าสำเร็จได้เลยครับ*</p>
            </div>
          </div>

          <div class="mt-8 flex flex-col-reverse sm:flex-row gap-3">
            <a href="{{ route('booking') }}" class="w-full sm:w-1/3 flex items-center justify-center text-center border-2 border-[#536442]/20 text-ink/70 hover:bg-gray-50 font-bold py-3.5 sm:py-4 rounded-xl transition" data-i18n="goBack">
              ย้อนกลับ
            </a>
            <button type="submit" class="w-full sm:w-2/3 bg-[#536442] text-white font-bold py-3.5 sm:py-4 rounded-xl hover:bg-[#3f4b32] transition shadow-md sm:text-lg flex justify-center items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <span data-i18n="confirmPayment">ยืนยันการชำระเงิน</span>
            </button>
          </div>

        </div>
      </form>

    </div>
  </main>
</x-layouts.app>
