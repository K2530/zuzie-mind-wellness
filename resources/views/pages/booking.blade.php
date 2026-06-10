<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Booking">
  <main class="bg-[#faf8f4] min-h-screen pb-20 pt-10">
    <form action="{{ route('booking.submit') }}" method="POST" class="container-soft max-w-5xl">
      @csrf
      <input type="hidden" name="date" id="selected-date" value="15 พฤษภาคม 2024">
      <input type="hidden" name="time" id="selected-time" value="18:00">
      
      <!-- Header -->
      <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-2">จองคิวปรึกษา</h1>
        <p class="text-ink/70">เลือกผู้เชี่ยวชาญและเวลาที่สะดวก</p>
      </div>

      <!-- Progress Steps -->
      <div class="flex items-center justify-center mb-12 overflow-x-auto text-[13px] sm:text-sm font-bold whitespace-nowrap px-4">
        <div class="flex items-center text-ink">
          <div class="w-6 h-6 rounded-full bg-[#536442] text-white flex items-center justify-center mr-2 text-xs">1</div>
          <span>เลือกบริการ</span>
        </div>
        <div class="w-8 sm:w-16 h-px bg-reseda/20 mx-2 sm:mx-4"></div>
        <div class="flex items-center text-[#536442]">
          <div class="w-6 h-6 rounded-full bg-[#536442] text-white flex items-center justify-center mr-2 text-xs">2</div>
          <span>เลือกผู้เชี่ยวชาญ</span>
        </div>
        <div class="w-8 sm:w-16 h-px bg-reseda/20 mx-2 sm:mx-4"></div>
        <div class="flex items-center text-[#536442]">
          <div class="w-6 h-6 rounded-full bg-[#536442] text-white flex items-center justify-center mr-2 text-xs">3</div>
          <span>เลือกวันและเวลา</span>
        </div>
        <div class="w-8 sm:w-16 h-px bg-reseda/20 mx-2 sm:mx-4"></div>
        <div class="flex items-center text-ink/40">
          <div class="w-6 h-6 rounded-full border border-ink/30 text-ink/40 flex items-center justify-center mr-2 text-xs">4</div>
          <span>ยืนยันการจอง</span>
        </div>
      </div>

      <!-- Main Layout -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Left: Services -->
        <div class="bg-[#f2efe9] rounded-2xl p-6">
          <h3 class="font-bold text-ink mb-4">เลือกบริการ</h3>
          <div class="space-y-3">
            <!-- Service 1 -->
            <label class="service-label flex items-start gap-3 p-4 bg-white rounded-xl cursor-pointer border border-[#536442] shadow-sm transition">
              <input type="radio" name="service" value="คุยกับนักจิตวิทยา" checked class="mt-1 w-4 h-4 text-[#536442] focus:ring-[#536442] border-gray-300">
              <div>
                <div class="font-bold text-ink">คุยกับนักจิตวิทยา</div>
                <div class="text-sm text-ink/60">(50 นาที) <span class="text-[#b09e86] font-bold">1,300 บาท</span></div>
              </div>
            </label>
            <!-- Service 2 -->
            <label class="service-label flex items-start gap-3 p-4 bg-white rounded-xl cursor-pointer border border-transparent hover:border-reseda/30 transition">
              <input type="radio" name="service" value="คุยกับจิตแพทย์" class="mt-1 w-4 h-4 text-[#536442] focus:ring-[#536442] border-gray-300">
              <div>
                <div class="font-bold text-ink">คุยกับจิตแพทย์</div>
                <div class="text-sm text-ink/60">(50 นาที) <span class="text-[#b09e86] font-bold">1,800 บาท</span></div>
              </div>
            </label>
            <!-- Service 3 -->
            <label class="service-label flex items-start gap-3 p-4 bg-white rounded-xl cursor-pointer border border-transparent hover:border-reseda/30 transition">
              <input type="radio" name="service" value="ปรึกษาออนไลน์" class="mt-1 w-4 h-4 text-[#536442] focus:ring-[#536442] border-gray-300">
              <div>
                <div class="font-bold text-ink">ปรึกษาออนไลน์</div>
                <div class="text-sm text-ink/60">(45 นาที) <span class="text-[#b09e86] font-bold">1,300 บาท</span></div>
              </div>
            </label>
          </div>
        </div>

        <!-- Middle: Calendar -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-reseda/10">
          <div class="flex items-center justify-between mb-6">
            <button class="text-ink/60 hover:text-ink"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
            <h3 class="font-bold text-ink">พฤษภาคม 2024</h3>
            <button class="text-ink/60 hover:text-ink"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
          </div>

          <div class="grid grid-cols-7 gap-1 text-center text-sm font-bold text-ink/60 mb-2">
            <div>จ</div><div>อ</div><div>พ</div><div>พฤ</div><div>ศ</div><div>ส</div><div>อา</div>
          </div>
          
          <!-- Calendar Grid Mockup -->
          <div class="grid grid-cols-7 gap-1 text-center text-sm">
            <div class="p-2 text-transparent">29</div><div class="p-2 text-transparent">30</div><div class="p-2 text-ink/40">1</div><div class="p-2 text-ink/40">2</div><div class="p-2 text-ink/40">3</div><div class="p-2 text-ink/40">4</div><div class="p-2 text-ink/40">5</div>
            <div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">6</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">7</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">8</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">9</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">10</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">11</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">12</div>
            <div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">13</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">14</div>
            <!-- Selected Date -->
            <div class="date-btn p-2 bg-[#536442] text-white cursor-pointer rounded-full font-bold shadow-md transition">15</div>
            <div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">16</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">17</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">18</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">19</div>
            <div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">20</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">21</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">22</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">23</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">24</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">25</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">26</div>
            <div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">27</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">28</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">29</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">30</div><div class="date-btn p-2 hover:bg-[#faf8f4] cursor-pointer rounded-full transition">31</div><div class="p-2 text-transparent">1</div><div class="p-2 text-transparent">2</div>
          </div>
        </div>

        <!-- Right: Time Slots -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-reseda/10">
          <h3 class="font-bold text-ink mb-4">เลือกเวลา</h3>
          <div class="grid grid-cols-2 gap-3">
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl border border-[#b09e86] text-[#b09e86] font-bold text-sm hover:bg-[#faf8f4] transition">09:00</button>
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl border border-[#b09e86] text-[#b09e86] font-bold text-sm hover:bg-[#faf8f4] transition">10:30</button>
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl border border-[#b09e86] text-[#b09e86] font-bold text-sm hover:bg-[#faf8f4] transition">13:00</button>
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl border border-[#b09e86] text-[#b09e86] font-bold text-sm hover:bg-[#faf8f4] transition">14:30</button>
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl border border-[#b09e86] text-[#b09e86] font-bold text-sm hover:bg-[#faf8f4] transition">16:00</button>
            <!-- Selected Time -->
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl bg-[#536442] text-white font-bold text-sm shadow-md transition">18:00</button>
            <button type="button" class="time-btn py-2.5 px-4 rounded-xl border border-[#b09e86] text-[#b09e86] font-bold text-sm hover:bg-[#faf8f4] transition">17:30</button>
          </div>
        </div>

      </div>

      <!-- Submit Button -->
      <div class="mt-10 text-center">
        <button type="submit" class="bg-[#536442] text-white hover:bg-[#425034] transition rounded-full px-12 py-4 text-lg font-bold shadow-md w-full sm:w-auto min-w-[250px]">
          ยืนยันการจอง
        </button>
      </div>

    </form>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Services
      const serviceLabels = document.querySelectorAll('.service-label');
      serviceLabels.forEach(label => {
        const radio = label.querySelector('input[type="radio"]');
        radio.addEventListener('change', () => {
          serviceLabels.forEach(l => {
            l.classList.remove('border-[#536442]', 'shadow-sm');
            l.classList.add('border-transparent', 'hover:border-reseda/30');
          });
          if (radio.checked) {
            label.classList.add('border-[#536442]', 'shadow-sm');
            label.classList.remove('border-transparent', 'hover:border-reseda/30');
          }
        });
      });

      // Date
      const dateInput = document.getElementById('selected-date');
      const dateBtns = document.querySelectorAll('.date-btn');
      dateBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          dateBtns.forEach(b => {
            b.classList.remove('bg-[#536442]', 'text-white', 'shadow-md', 'font-bold');
            b.classList.add('hover:bg-[#faf8f4]');
          });
          btn.classList.add('bg-[#536442]', 'text-white', 'shadow-md', 'font-bold');
          btn.classList.remove('hover:bg-[#faf8f4]');
          dateInput.value = btn.innerText + ' พฤษภาคม 2024';
        });
      });

      // Time
      const timeInput = document.getElementById('selected-time');
      const timeBtns = document.querySelectorAll('.time-btn');
      timeBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          timeBtns.forEach(b => {
            b.classList.remove('bg-[#536442]', 'text-white', 'shadow-md');
            b.classList.add('border', 'border-[#b09e86]', 'text-[#b09e86]', 'hover:bg-[#faf8f4]');
          });
          btn.classList.add('bg-[#536442]', 'text-white', 'shadow-md');
          btn.classList.remove('border', 'border-[#b09e86]', 'text-[#b09e86]', 'hover:bg-[#faf8f4]');
          timeInput.value = btn.innerText;
        });
      });
    });
  </script>
</x-layouts.app>
