<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - ติดต่อเรา">
  <main class="bg-[#faf8f4] py-16 min-h-screen">
    <div class="container mx-auto px-6 lg:px-8 max-w-6xl">
      <div class="text-center mb-16">
        <h1 class="text-4xl font-extrabold text-ink mb-4" data-i18n="contactPageTitle">ติดต่อเรา</h1>
        <p class="text-lg text-ink/70 max-w-2xl mx-auto" data-i18n="contactPageDesc">หากคุณมีคำถามเกี่ยวกับการจองคิว คอร์สเรียน หรือต้องการความช่วยเหลือ สามารถฝากข้อความไว้ได้เลยครับ</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <!-- Contact Information -->
        <div>
          <h2 class="text-2xl font-bold text-ink mb-6" data-i18n="contactChannels">ช่องทางการติดต่อ</h2>
          <div class="space-y-8">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#536442] shadow-sm shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
              </div>
              <div>
                <h3 class="font-bold text-ink" data-i18n="emailSupport">อีเมล</h3>
                <p class="text-ink/70 mt-1">support@zuziemindwellness.com</p>
                <p class="text-sm text-ink/50 mt-1" data-i18n="replyIn24">เราจะตอบกลับภายใน 24 ชั่วโมง</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#536442] shadow-sm shrink-0">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/></svg>
              </div>
              <div>
                <h3 class="font-bold text-ink">Facebook Page</h3>
                <p class="text-ink/70 mt-1">Zuzie Mind Wellness</p>
                <a href="#" class="text-sm font-bold text-[#536442] hover:underline mt-1 inline-block" data-i18n="sendMessenger">ส่งข้อความทาง Messenger</a>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#536442] shadow-sm shrink-0">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
              </div>
              <div>
                <h3 class="font-bold text-ink">Instagram</h3>
                <p class="text-ink/70 mt-1">@zuziemindwellness</p>
                <a href="#" class="text-sm font-bold text-[#536442] hover:underline mt-1 inline-block" data-i18n="followNews">ติดตามข่าวสารและบทความฮีลใจ</a>
              </div>
            </div>
          </div>
          
          <div class="mt-12 bg-[#f4ebd0]/50 p-6 rounded-2xl border border-[#b09e86]/30">
            <h4 class="font-bold text-ink mb-2" data-i18n="emergency">กรณีฉุกเฉิน (สายด่วนสุขภาพจิต)</h4>
            <p class="text-sm text-ink/80 leading-relaxed" data-i18n="emergencyDesc">หากคุณมีความรู้สึกอยากทำร้ายตัวเอง หรือต้องการความช่วยเหลือเร่งด่วน โปรดติดต่อ:</p>
            <ul class="text-sm text-ink/80 mt-3 space-y-2 font-bold">
              <li data-i18n="hotline1">📞 สายด่วนสุขภาพจิต 1323 (ตลอด 24 ชม.)</li>
              <li data-i18n="hotline2">📞 สมาคมสะมาริตันส์ 02-113-6789</li>
            </ul>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-3xl border border-reseda/20 shadow-sm">
          <h2 class="text-2xl font-bold text-ink mb-6" data-i18n="sendMessage">ส่งข้อความถึงเรา</h2>
          <form action="#" method="POST" class="space-y-6">
            <div>
              <label class="block text-sm font-bold text-ink mb-2" data-i18n="namePlaceholder">ชื่อ - นามสกุล</label>
              <input type="text" class="w-full px-4 py-3 rounded-lg border border-reseda/30 focus:outline-none focus:ring-2 focus:ring-[#536442] bg-[#faf8f4]" placeholder="กรอกชื่อของคุณ">
            </div>
            
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-bold text-ink mb-2" data-i18n="emailTitle">อีเมล</label>
                <input type="email" class="w-full px-4 py-3 rounded-lg border border-reseda/30 focus:outline-none focus:ring-2 focus:ring-[#536442] bg-[#faf8f4]" placeholder="example@email.com">
              </div>
              <div>
                <label class="block text-sm font-bold text-ink mb-2" data-i18n="phoneTitle">เบอร์โทรศัพท์</label>
                <input type="tel" class="w-full px-4 py-3 rounded-lg border border-reseda/30 focus:outline-none focus:ring-2 focus:ring-[#536442] bg-[#faf8f4]" placeholder="08x-xxx-xxxx">
              </div>
            </div>

            <div>
              <label class="block text-sm font-bold text-ink mb-2" data-i18n="subjectTitle">เรื่องที่ต้องการติดต่อ</label>
              <select class="w-full px-4 py-3 rounded-lg border border-reseda/30 focus:outline-none focus:ring-2 focus:ring-[#536442] bg-[#faf8f4]">
                <option value="">เลือกหัวข้อ...</option>
                <option value="booking" data-i18n="subject1">สอบถามเรื่องการจองคิวปรึกษา</option>
                <option value="course" data-i18n="subject2">ปัญหาเกี่ยวกับคอร์สเรียน</option>
                <option value="payment" data-i18n="subject3">แจ้งปัญหาการชำระเงิน</option>
                <option value="other" data-i18n="subject4">อื่นๆ</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-bold text-ink mb-2" data-i18n="detailTitle">รายละเอียดข้อความ</label>
              <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-reseda/30 focus:outline-none focus:ring-2 focus:ring-[#536442] bg-[#faf8f4]" placeholder="..."></textarea>
            </div>

            <button type="button" onclick="alert('ข้อความจำลองถูกส่งเรียบร้อยแล้ว (Mock Form)')" class="w-full bg-[#536442] text-white font-bold py-4 rounded-xl hover:bg-[#3f4b32] transition shadow-md" data-i18n="btnSendMsg">
              ส่งข้อความ
            </button>
          </form>
        </div>

      </div>
    </div>
  </main>
</x-layouts.app>
