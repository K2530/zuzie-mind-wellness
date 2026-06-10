<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - บริการของเรา">
  <main class="bg-[#faf8f4] py-16">
    <div class="container mx-auto px-6 lg:px-8 max-w-6xl">
      <div class="text-center mb-16">
        <h1 class="text-4xl font-extrabold text-ink mb-4" data-i18n="servicesPageTitle">บริการของเรา</h1>
        <p class="text-lg text-ink/70 max-w-2xl mx-auto" data-i18n="servicesPageDesc">เลือกรูปแบบการดูแลจิตใจที่เหมาะกับคุณ ไม่ว่าจะเป็นการพูดคุยส่วนตัว, การเรียนรู้ด้วยตัวเอง หรือการเข้าร่วมกลุ่มสนับสนุน</p>
      </div>

      <div class="grid gap-8 lg:grid-cols-3">
        <!-- Service 1: Consultation -->
        <article class="bg-white rounded-3xl p-8 border border-reseda/20 shadow-sm hover:shadow-md transition">
          <div class="w-14 h-14 bg-[#f4ebd0] rounded-2xl flex items-center justify-center text-[#536442] mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
          </div>
          <h2 class="text-2xl font-bold text-ink mb-3" data-i18n="consultTitle">ปรึกษากับเรา (Consultation)</h2>
          <p class="text-ink/70 mb-6 min-h-[80px]" data-i18n="consultDesc">พูดคุย 1-on-1 อย่างเป็นส่วนตัวและปลอดภัย เพื่อสำรวจความรู้สึกและหาทางออกร่วมกันกับผู้เชี่ยวชาญ</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="consultF1">วิดีโอคอลหรือโทรศัพท์ 60 นาที</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="consultF2">พื้นที่ปลอดภัย ไม่มีการตัดสิน</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="consultF3">รับฟังปัญหาครอบครัว, ความรัก, และความเครียด</span>
            </li>
          </ul>
          <a href="{{ route('booking') }}" class="block w-full text-center bg-[#536442] text-white py-3 rounded-full font-bold hover:bg-[#3f4b32] transition" data-i18n="btnBookConsult">จองเวลาปรึกษา</a>
        </article>

        <!-- Service 2: Courses -->
        <article class="bg-white rounded-3xl p-8 border border-reseda/20 shadow-sm hover:shadow-md transition">
          <div class="w-14 h-14 bg-[#f4ebd0] rounded-2xl flex items-center justify-center text-[#536442] mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
          </div>
          <h2 class="text-2xl font-bold text-ink mb-3" data-i18n="coursesTitle">คอร์สเรียน (Courses)</h2>
          <p class="text-ink/70 mb-6 min-h-[80px]" data-i18n="coursesDesc">เรียนรู้วิธีจัดการอารมณ์และดูแลใจตัวเองตามหัวข้อเฉพาะเจาะจง ผ่านบทเรียนออนไลน์ที่เข้าถึงได้ตลอด 24 ชม.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="coursesF1">เรียนย้อนหลังได้ตลอดชีพ</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="coursesF2">แบบฝึกหัด (Worksheet) ให้ทำจริง</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="coursesF3">หัวข้อเจาะลึกที่ไม่มีสอนทั่วไป</span>
            </li>
          </ul>
          <a href="{{ route('courses') }}" class="block w-full text-center bg-transparent border-2 border-[#536442] text-[#536442] py-3 rounded-full font-bold hover:bg-[#536442] hover:text-white transition" data-i18n="seeCourses">ดูคอร์สทั้งหมด</a>
        </article>

        <!-- Service 3: Community -->
        <article class="bg-white rounded-3xl p-8 border border-reseda/20 shadow-sm hover:shadow-md transition">
          <div class="w-14 h-14 bg-[#f4ebd0] rounded-2xl flex items-center justify-center text-[#536442] mb-6">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <h2 class="text-2xl font-bold text-ink mb-3" data-i18n="communityPageTitle">คอมมูนิตี้ (Community)</h2>
          <p class="text-ink/70 mb-6 min-h-[80px]" data-i18n="communityPageDesc">พื้นที่ปลอดภัยในการพูดคุยแลกเปลี่ยนประสบการณ์ และเรียนรู้ว่าคุณไม่ได้อยู่คนเดียวกับปัญหาที่เจอ</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="communityF1">เข้ากลุ่มปิด Facebook ฟรี</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="communityF2">การจัดกิจกรรม Group Therapy รายเดือน</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-[#536442] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span class="text-ink/80 text-sm" data-i18n="communityF3">พูดคุยแลกเปลี่ยนแบบไม่เปิดเผยตัวตน (หากต้องการ)</span>
            </li>
          </ul>
          <a href="{{ route('community') }}" class="block w-full text-center bg-transparent border-2 border-reseda/30 text-ink/70 py-3 rounded-full font-bold hover:border-[#536442] hover:text-[#536442] transition" data-i18n="seeDetails">ดูรายละเอียด</a>
        </article>
      </div>

    </div>
  </main>
</x-layouts.app>
