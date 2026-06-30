<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Learning">
  <!-- Set full height layout without scroll for the main wrapper -->
  <main class="bg-white min-h-[calc(100vh-64px)] flex flex-col lg:flex-row">
    
    <!-- Left: Video & Tabs (70%) -->
    <div class="w-full lg:w-[70%] flex flex-col h-auto lg:h-[calc(100vh-64px)] overflow-y-auto">
      
      <!-- Video Player Mockup -->
      <div class="relative w-full bg-black aspect-video flex flex-col justify-between group">
        <!-- Main Play Button -->
        <div class="absolute inset-0 flex items-center justify-center cursor-pointer">
          <div class="w-16 h-16 bg-white/20 hover:bg-[#536442]/80 rounded-full flex items-center justify-center backdrop-blur-sm transition-colors duration-300">
            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
          </div>
        </div>
        
        <!-- Video Mock Thumbnail -->
        <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" class="w-full h-full object-cover opacity-60">

        <!-- Custom Controls Overlay (Bottom) -->
        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <!-- Progress Bar -->
          <div class="w-full h-1 bg-white/30 rounded-full mb-3 cursor-pointer">
            <div class="bg-[#536442] h-1 rounded-full relative" style="width: 30%">
              <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3 h-3 bg-white rounded-full"></div>
            </div>
          </div>
          
          <div class="flex items-center justify-between text-white">
            <div class="flex items-center gap-4">
              <button class="hover:text-[#b09e86] transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
              </button>
              <span class="text-xs font-medium">05:12 / 12:45</span>
            </div>
            
            <div class="flex items-center gap-4">
              <button class="hover:text-[#b09e86] transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/></svg>
              </button>
              <button class="hover:text-[#b09e86] transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
              </button>
              <button class="hover:text-[#b09e86] transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Course Content Tabs -->
      <div class="px-6 py-8">
        <h1 class="text-2xl font-extrabold text-ink mb-6">{{ $course['title'] ?? 'หลุดจากความสัมพันธ์ที่ทำร้ายใจ' }}</h1>
        
        <div class="border-b border-reseda/20 mb-6 flex overflow-x-auto" id="tab-buttons">
          <button class="tab-btn px-4 py-3 font-bold text-ink border-b-2 border-ink whitespace-nowrap active" data-target="tab-overview">Overview</button>
          <button class="tab-btn px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap" data-target="tab-qa">Q&A</button>
          <button class="tab-btn px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap" data-target="tab-notes">Notes</button>
          <button class="tab-btn px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap" data-target="tab-announcements">Announcements</button>
          <button class="tab-btn px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap" data-target="tab-reviews">Reviews</button>
        </div>

        <!-- Tab Content -->
        <div id="tab-content-container">
          <!-- Overview Tab -->
          <div class="tab-pane block" id="tab-overview">
            <h3 class="text-xl font-bold text-ink mb-4" data-i18n="courseContent">About this course</h3>
            <p class="text-ink/70 mb-4 leading-relaxed">{{ $course['desc'] ?? 'เยียวยาใจและสร้างชีวิตใหม่อย่างมั่นคง เรียนรู้ความสัมพันธ์ที่เป็นพิษและวิธีตั้งขอบเขต' }}</p>
            
            <div class="flex items-center gap-6 text-sm text-ink mb-8 border-t border-b border-reseda/10 py-4">
              <div>
                <span class="font-bold">By the numbers</span>
                <ul class="mt-2 text-ink/70 space-y-1">
                  <li>Skill level: All Levels</li>
                  <li>Students: 1,421</li>
                  <li>Languages: Thai</li>
                  <li>Captions: Yes</li>
                </ul>
              </div>
              <div>
                <h4 class="font-bold text-ink mb-3" data-i18n="features">Features</h4>
                <ul class="mt-2 text-ink/70 space-y-1">
                  <li>Available on iOS and Android</li>
                  <li>Certificate of completion</li>
                </ul>
              </div>
            </div>
            
            <div class="mb-8 relative border border-reseda/20 rounded-xl p-6 bg-[#faf8f4]">
              <!-- Progress Mock Popup Simulation -->
              <div class="absolute -top-6 right-6 bg-white shadow-xl rounded-lg border border-reseda/10 p-5 w-64 z-10 hidden sm:block">
                <h4 class="font-bold text-ink text-center mb-4">Course Progress</h4>
                <div class="text-[10px] text-ink/60 font-bold mb-1 text-center">Progress Completed: <span id="progress-text">60%</span></div>
                <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                  <div id="progress-bar" class="bg-[#536442] h-3 rounded-full transition-all duration-500" style="width: 60%"></div>
                </div>
              </div>

              <h3 class="text-xl font-bold text-ink mb-6" data-i18n="instructor">Instructor</h3>
              <div class="flex items-center gap-4 mt-4">
                <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden">
                  <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" class="w-full h-full object-cover">
                </div>
                <div>
                  <div class="font-bold text-ink">Zuzie Mind Wellness</div>
                  <div class="text-xs text-ink/60">Psychologist & Life Coach</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Q&A Tab -->
          <div class="tab-pane hidden" id="tab-qa">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-xl font-bold text-ink">All questions in this course (14)</h2>
              <button class="bg-[#536442] text-white px-4 py-2 rounded-md font-bold text-sm">Ask a new question</button>
            </div>
            <div class="space-y-4">
              <!-- Mock Q1 -->
              <div class="border border-reseda/20 rounded-lg p-4 flex gap-4">
                <div class="w-10 h-10 bg-almond rounded-full flex items-center justify-center font-bold text-ink shrink-0">ก</div>
                <div class="flex-1">
                  <h3 class="font-bold text-ink text-sm">ถ้าเราไม่แน่ใจว่าเราเป็นคน Toxic เองหรือเปล่า ต้องสังเกตยังไงคะ?</h3>
                  <p class="text-xs text-ink/60 mt-1">กมลวรรณ • 2 วันที่แล้ว • ในบทเรียน: วงจรความสัมพันธ์เป็นพิษ</p>
                  <div class="mt-3 text-sm text-ink/80 border-l-2 border-reseda/30 pl-3">
                    <p class="font-bold mb-1">Zuzie Mind Wellness (Instructor)</p>
                    ลองสังเกตว่าเรายอมรับฟังเวลาคนอื่นบอกว่าเราทำผิดไหม หรือเรามักจะปกป้องตัวเองและโทษสถานการณ์ตลอด...
                  </div>
                </div>
              </div>
              <!-- Mock Q2 -->
              <div class="border border-reseda/20 rounded-lg p-4 flex gap-4">
                <div class="w-10 h-10 bg-desert/50 rounded-full flex items-center justify-center font-bold text-ink shrink-0">S</div>
                <div class="flex-1">
                  <h3 class="font-bold text-ink text-sm">ยากมากเลยค่ะที่จะกล้าปฏิเสธ กลัวเขาจะเกลียด</h3>
                  <p class="text-xs text-ink/60 mt-1">Som O • 1 สัปดาห์ที่แล้ว • ในบทเรียน: การปฏิเสธโดยไม่รู้สึกผิด</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Notes Tab -->
          <div class="tab-pane hidden" id="tab-notes">
            <div class="flex items-center gap-4 mb-6">
              <div class="bg-gray-100 rounded-md px-3 py-2 text-sm font-bold border border-gray-200">05:12</div>
              <input type="text" placeholder="Create a new note at 05:12..." class="flex-1 border border-reseda/30 rounded-md px-4 py-2 text-sm focus:ring-[#536442] focus:border-[#536442] outline-none">
              <button class="bg-gray-200 text-ink/50 px-4 py-2 rounded-md font-bold text-sm hover:bg-gray-300">Save</button>
            </div>
            <div class="space-y-4">
              <div class="bg-[#faf8f4] border border-reseda/10 rounded-lg p-4">
                <div class="flex justify-between items-start mb-2">
                  <div class="bg-ink text-white rounded px-2 py-0.5 text-xs font-bold">02:30</div>
                  <div class="flex gap-2">
                    <button class="text-ink/50 hover:text-ink"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                    <button class="text-ink/50 hover:text-red-500"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                  </div>
                </div>
                <p class="text-sm text-ink/80">ขอบเขตไม่ใช่กำแพง แต่เป็นประตูที่เราเลือกว่าจะให้ใครเข้ามาตอนไหน</p>
              </div>
            </div>
          </div>
          
          <div class="tab-pane hidden" id="tab-announcements">
            <p class="text-ink/60">No recent announcements from the instructor.</p>
          </div>
          <div class="tab-pane hidden" id="tab-reviews">
            <p class="text-ink/60">This course has a 4.8/5 rating from 340 reviews.</p>
          </div>

        </div>
      </div>
    </div>

    <!-- Right: Course Content Sidebar (30%) -->
    <div class="w-full lg:w-[30%] border-l border-reseda/20 flex flex-col h-auto lg:h-[calc(100vh-64px)]">
      
      <div class="p-4 border-b border-reseda/20 flex justify-between items-center bg-[#faf8f4]">
        <h2 class="font-bold text-ink text-lg">Course content</h2>
        <button class="text-ink/60 hover:text-ink transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
      </div>

      <div class="overflow-y-auto flex-1 bg-white">
        
        <!-- Section 1 (Open) -->
        <div class="accordion-item border-b border-reseda/10">
          <button class="accordion-btn w-full flex items-start justify-between p-4 bg-gray-50 hover:bg-gray-100 transition text-left">
            <div>
              <div class="font-bold text-ink text-[15px]">Section 1: ทำความเข้าใจความสัมพันธ์</div>
              <div class="text-[11px] text-ink/60 mt-1">3 / 3 | 25min</div>
            </div>
            <svg class="chevron w-4 h-4 text-ink/60 mt-1 transform rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="accordion-content py-2">
            <div class="lesson-item flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] text-ink">1. บทนำ: สัญญาณเตือนที่ต้องรู้</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
                  8min
                </div>
              </div>
            </div>
            <div class="lesson-item flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] text-ink">2. วงจรความสัมพันธ์เป็นพิษ</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
                  12min
                </div>
              </div>
            </div>
            <div class="lesson-item flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] text-ink">3. แบบประเมินตนเอง (Worksheet)</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                  5min
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Section 2 (Active) -->
        <div class="accordion-item border-b border-reseda/10">
          <button class="accordion-btn w-full flex items-start justify-between p-4 bg-gray-50 hover:bg-gray-100 transition text-left">
            <div>
              <div class="font-bold text-ink text-[15px]">Section 2: การปกป้องจิตใจและการตั้งขอบเขต</div>
              <div class="text-[11px] text-ink/60 mt-1">1 / 4 | 45min</div>
            </div>
            <svg class="chevron w-4 h-4 text-ink/60 mt-1 transform rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="accordion-content py-2">
            <div class="lesson-item flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] text-ink">4. ขอบเขตคืออะไร? (Boundaries)</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
                  10min
                </div>
              </div>
            </div>
            <!-- Active Lesson -->
            <div class="lesson-item flex items-start gap-3 px-4 py-2 bg-[#f4ebd0]/30 cursor-pointer border-l-4 border-[#b09e86]">
              <input type="checkbox" class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] font-bold text-ink">5. วิธีสื่อสารเมื่อถูกล้ำเส้น</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
                  12min
                </div>
              </div>
            </div>
            <div class="lesson-item flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] text-ink">6. การปฏิเสธโดยไม่รู้สึกผิด</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
                  15min
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Section 3 (Closed) -->
        <div class="accordion-item border-b border-reseda/10">
          <button class="accordion-btn w-full flex items-start justify-between p-4 hover:bg-gray-50 transition text-left">
            <div>
              <div class="font-bold text-ink text-[15px]">Section 3: การเยียวยาและสร้างคุณค่าให้ตัวเอง</div>
              <div class="text-[11px] text-ink/60 mt-1">0 / 5 | 1hr 10min</div>
            </div>
            <svg class="chevron w-4 h-4 text-ink/60 mt-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="accordion-content py-2 hidden">
            <div class="lesson-item flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" class="progress-check mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30 cursor-pointer">
              <div>
                <div class="text-[13px] text-ink">7. การรักตัวเองเริ่มจากตรงไหน</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path></svg>
                  20min
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. Tab Switching
      const tabBtns = document.querySelectorAll('.tab-btn');
      const tabPanes = document.querySelectorAll('.tab-pane');

      tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          // Remove active states
          tabBtns.forEach(b => {
            b.classList.remove('border-ink', 'active');
            b.classList.add('text-ink/50', 'border-transparent');
          });
          tabPanes.forEach(p => p.classList.add('hidden'));

          // Add active state
          btn.classList.remove('text-ink/50', 'border-transparent');
          btn.classList.add('border-ink', 'active');
          const target = document.getElementById(btn.getAttribute('data-target'));
          if(target) target.classList.remove('hidden');
        });
      });

      // 2. Accordion Toggle
      const accordionBtns = document.querySelectorAll('.accordion-btn');
      accordionBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          const content = btn.nextElementSibling;
          const chevron = btn.querySelector('.chevron');
          if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            chevron.classList.add('rotate-180');
          } else {
            content.classList.add('hidden');
            chevron.classList.remove('rotate-180');
          }
        });
      });

      // 3. Progress Simulation
      const checkboxes = document.querySelectorAll('.progress-check');
      const progressBar = document.getElementById('progress-bar');
      const progressText = document.getElementById('progress-text');
      const totalChecks = checkboxes.length;

      function updateProgress() {
        const checkedCount = document.querySelectorAll('.progress-check:checked').length;
        const percentage = Math.round((checkedCount / totalChecks) * 100);
        if(progressBar) progressBar.style.width = percentage + '%';
        if(progressText) progressText.innerText = percentage + '%';
      }

      checkboxes.forEach(check => {
        check.addEventListener('change', updateProgress);
        // Prevent row click from triggering twice if clicked on checkbox directly
        check.addEventListener('click', (e) => e.stopPropagation());
      });

      // 4. Click row to active lesson
      const lessonItems = document.querySelectorAll('.lesson-item');
      lessonItems.forEach(item => {
        item.addEventListener('click', () => {
          // Reset all items
          lessonItems.forEach(l => {
            l.classList.remove('bg-[#f4ebd0]/30', 'border-l-4', 'border-[#b09e86]');
            l.classList.add('hover:bg-gray-50');
            const title = l.querySelector('.text-[13px]');
            if(title) title.classList.remove('font-bold');
          });

          // Set clicked item as active
          item.classList.remove('hover:bg-gray-50');
          item.classList.add('bg-[#f4ebd0]/30', 'border-l-4', 'border-[#b09e86]');
          const title = item.querySelector('.text-[13px]');
          if(title) title.classList.add('font-bold');
        });
      });
      
      // Initial progress calculation
      updateProgress();
    });
  </script></x-layouts.app>
