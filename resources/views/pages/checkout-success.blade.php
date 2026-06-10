<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Payment Successful">
  <main class="bg-milk min-h-screen pb-20 pt-20 flex items-center justify-center">
    <div class="container-soft max-w-2xl text-center">
      
      <div class="bg-white rounded-[2rem] p-10 sm:p-16 shadow-[0_18px_45px_rgba(83,76,65,0.06)] border border-reseda/10 flex flex-col items-center">
        
        <!-- Success Icon -->
        <div class="w-24 h-24 bg-[#536442]/10 text-[#536442] rounded-full flex items-center justify-center mb-8">
          <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </div>

        <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-4">ชำระเงินสำเร็จ!</h1>
        <p class="text-lg text-ink/70 mb-10 max-w-md mx-auto">ขอบคุณสำหรับการสั่งซื้อคอร์สเรียน<br>คุณสามารถเริ่มต้นบทเรียนแรกของคุณได้ทันทีในหน้าคอร์สเรียนของฉัน</p>

        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
          <a href="{{ route('my.courses') }}" class="bg-[#536442] text-white hover:bg-[#425034] transition rounded-full px-10 py-3.5 text-lg font-bold w-full sm:w-auto text-center shadow-md">
            เริ่มเรียนเลย
          </a>
          <a href="{{ route('home') }}" class="px-8 py-3.5 text-lg rounded-full border-2 border-[#b09e86]/30 text-[#b09e86] font-bold hover:bg-[#faf8f4] hover:border-[#b09e86] transition w-full sm:w-auto text-center">
            กลับหน้าแรก
          </a>
        </div>

      </div>

    </div>
  </main>
</x-layouts.app>
