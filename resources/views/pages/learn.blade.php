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
        <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover opacity-60">

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
        
        <div class="border-b border-reseda/20 mb-6 flex overflow-x-auto">
          <button class="px-4 py-3 font-bold text-ink border-b-2 border-ink whitespace-nowrap">Overview</button>
          <button class="px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap">Notes</button>
          <button class="px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap">Announcements</button>
          <button class="px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap">Reviews</button>
          <button class="px-4 py-3 font-bold text-ink/50 hover:text-ink transition border-b-2 border-transparent whitespace-nowrap">Learning tools</button>
        </div>

        <!-- Tab Content -->
        <div>
          <h2 class="text-xl font-bold text-ink mb-4">About this course</h2>
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
              <span class="font-bold">Features</span>
              <ul class="mt-2 text-ink/70 space-y-1">
                <li>Available on iOS and Android</li>
                <li>Certificate of completion</li>
              </ul>
            </div>
          </div>
          
          <div class="mb-8 relative border border-reseda/20 rounded-xl p-6 bg-[#faf8f4]">
            <!-- Progress Mock Popup Simulation -->
            <div class="absolute -top-6 right-6 bg-white shadow-xl rounded-lg border border-reseda/10 p-5 w-64 z-10">
              <h4 class="font-bold text-ink text-center mb-4">Course Auto Completion</h4>
              <button class="w-full bg-[#536442] text-white text-xs font-bold py-2 rounded mb-4">PROGRESS COURSE</button>
              <div class="text-[10px] text-ink/60 font-bold mb-1 text-center">Progress Completed: 60%</div>
              <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                <div class="bg-green-500 h-3 rounded-full" style="width: 60%"></div>
              </div>
            </div>

            <h3 class="font-bold text-ink mb-2">Instructor</h3>
            <div class="flex items-center gap-4 mt-4">
              <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden">
                <img src="{{ asset('assets/images/hero-woman-tea.png') }}" class="w-full h-full object-cover">
              </div>
              <div>
                <div class="font-bold text-ink">Zuzie Mind Wellness</div>
                <div class="text-xs text-ink/60">Psychologist & Life Coach</div>
              </div>
            </div>
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
        <div class="border-b border-reseda/10">
          <button class="w-full flex items-start justify-between p-4 bg-gray-50 hover:bg-gray-100 transition text-left">
            <div>
              <div class="font-bold text-ink text-[15px]">Section 1: ทำความเข้าใจความสัมพันธ์</div>
              <div class="text-[11px] text-ink/60 mt-1">3 / 3 | 25min</div>
            </div>
            <svg class="w-4 h-4 text-ink/60 mt-1 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="py-2">
            <div class="flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30">
              <div>
                <div class="text-[13px] text-ink">1. บทนำ: สัญญาณเตือนที่ต้องรู้</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  8min
                </div>
              </div>
            </div>
            <div class="flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30">
              <div>
                <div class="text-[13px] text-ink">2. วงจรความสัมพันธ์เป็นพิษ</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  12min
                </div>
              </div>
            </div>
            <div class="flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30">
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
        <div class="border-b border-reseda/10">
          <button class="w-full flex items-start justify-between p-4 bg-gray-50 hover:bg-gray-100 transition text-left">
            <div>
              <div class="font-bold text-ink text-[15px]">Section 2: การปกป้องจิตใจและการตั้งขอบเขต</div>
              <div class="text-[11px] text-ink/60 mt-1">1 / 4 | 45min</div>
            </div>
            <svg class="w-4 h-4 text-ink/60 mt-1 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="py-2">
            <div class="flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" checked class="mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30">
              <div>
                <div class="text-[13px] text-ink">4. ขอบเขตคืออะไร? (Boundaries)</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  10min
                </div>
              </div>
            </div>
            <div class="flex items-start gap-3 px-4 py-2 bg-[#f4ebd0]/30 cursor-pointer border-l-4 border-[#b09e86]">
              <input type="checkbox" class="mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30">
              <div>
                <div class="text-[13px] font-bold text-ink">5. วิธีสื่อสารเมื่อถูกล้ำเส้น</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  12min
                </div>
              </div>
            </div>
            <div class="flex items-start gap-3 px-4 py-2 hover:bg-gray-50 cursor-pointer">
              <input type="checkbox" class="mt-1 w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/30">
              <div>
                <div class="text-[13px] text-ink">6. การปฏิเสธโดยไม่รู้สึกผิด</div>
                <div class="text-[11px] text-ink/50 flex items-center gap-1 mt-0.5">
                  <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  15min
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Section 3 (Closed) -->
        <div class="border-b border-reseda/10">
          <button class="w-full flex items-start justify-between p-4 hover:bg-gray-50 transition text-left">
            <div>
              <div class="font-bold text-ink text-[15px]">Section 3: การเยียวยาและสร้างคุณค่าให้ตัวเอง</div>
              <div class="text-[11px] text-ink/60 mt-1">0 / 5 | 1hr 10min</div>
            </div>
            <svg class="w-4 h-4 text-ink/60 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
        </div>

      </div>

    </div>

  </main>
</x-layouts.app>
