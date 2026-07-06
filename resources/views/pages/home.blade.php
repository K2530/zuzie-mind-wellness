<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness">
  <main id="home">
    <section class="relative overflow-hidden bg-almond">
      <div class="absolute inset-0">
        <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="Woman holding tea in a warm wellness room" class="h-full w-full object-cover object-[68%_50%]">
      </div>

      <div class="container-soft relative grid min-h-[760px] items-center pb-36 pt-16 sm:min-h-[800px] lg:min-h-[780px]">
        <div class="max-w-2xl pt-8 drop-shadow-[0_2px_18px_rgba(255,252,248,0.65)]">
          <span class="section-kicker bg-white/82" data-i18n="heroBadge"></span>
          <h1 class="mt-6 max-w-xl text-4xl font-extrabold leading-tight tracking-normal text-ink sm:text-5xl lg:text-6xl" data-i18n="heroTitle"></h1>
          <p class="mt-2 font-serif text-4xl font-light italic text-persian sm:text-5xl" data-i18n="heroScript"></p>
          <p class="mt-7 max-w-lg text-base leading-8 text-ink sm:text-lg" data-i18n="heroCopy"></p>
          <div class="mt-8 grid gap-3 sm:grid-cols-3">
            <a href="{{ route('assessment') }}" class="btn-primary" data-i18n="startAssessment"></a>
            <a href="{{ route('booking') }}" class="btn-consult" data-i18n="talkPsych"></a>
            <a href="{{ route('videos') }}" class="btn-secondary" data-i18n="heroVideoCta"></a>
          </div>
        </div>
      </div>
    </section>

    <section aria-label="Trust highlights" class="relative z-10 -mt-20 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto grid max-w-6xl gap-3 rounded-[24px] border border-reseda/10 bg-white/94 px-4 py-5 shadow-[0_18px_45px_rgba(83,76,65,0.10)] sm:grid-cols-2 lg:grid-cols-6 lg:px-7 lg:py-6">
        @foreach ($trustItems as $item)
          <div class="grid justify-items-center gap-2 rounded-md px-2 py-1 text-center">
            <span class="icon-shell" data-icon="{{ $item['icon'] }}" aria-hidden="true"></span>
            <p class="text-[13px] font-medium leading-5 text-ink" data-i18n="{{ $item['key'] }}"></p>
          </div>
        @endforeach
      </div>
    </section>

    <section id="assessment" class="container-soft grid gap-8 pb-16 pt-20 lg:grid-cols-[260px_1fr] lg:items-start">
      <div>
        <h2 class="text-3xl font-bold leading-tight sm:text-4xl" data-i18n="assessTitle"></h2>
        <p class="mt-5 text-base leading-7 text-ink/72" data-i18n="assessCopy"></p>
        <a href="{{ route('assessment') }}" class="btn-primary mt-7" data-i18n="viewAllAssessments"></a>
      </div>

      <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[58%_42%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเฉพาะทาง</p>
            <h3 class="mt-1 text-xl font-bold">โรคเครียดหลังเหตุการณ์สะเทือนขวัญ (2P)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความเสี่ยงต่อการเกิดโรคเครียดหลังเหตุการณ์สะเทือนขวัญ (PTSD)</p>
            <a href="{{ route('assessment.show', '2p') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[60%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเฉพาะทาง</p>
            <h3 class="mt-1 text-xl font-bold">ผลกระทบจิตใจหลังเหตุสะเทือนขวัญ</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินผลกระทบทางจิตใจหลังเกิดเหตุการณ์สะเทือนขวัญ (PISCES-10)</p>
            <a href="{{ route('assessment.show', 'pisces10') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[61%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเฉพาะทาง</p>
            <h3 class="mt-1 text-xl font-bold">อาการเมเนีย (TMRS)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">แบบประเมิน Thai Young Mania Rating Scale (TMRS) ความรุนแรงของความผิดปกติที่เกิดขึ้นกับผู้ป่วย</p>
            <a href="{{ route('assessment.show', 'tmrs') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[62%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเฉพาะทาง</p>
            <h3 class="mt-1 text-xl font-bold">แบบวัดความเครียด (SPST-20)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความเครียดในช่วง 6 เดือนที่ผ่านมา (แบบวัดความเครียด กรมสุขภาพจิต)</p>
            <a href="{{ route('assessment.show', 'spst20') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>
      </div>

      <div class="mt-8 flex items-center gap-4">
        <h2 class="text-2xl font-bold text-ink">แบบประเมินสำหรับเด็ก</h2>
        <div class="h-px flex-1 bg-reseda/20"></div>
      </div>
      
      <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[63%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเบื้องต้น</p>
            <h3 class="mt-1 text-xl font-bold">พฤติกรรมเด็ก 4 ภาวะ (6-12 ปี)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">แบบสังเกตพฤติกรรม สมาธิสั้น ออทิสซึม แอลดี และเรียนรู้ช้า (สถาบันราชานุกูล)</p>
            <a href="{{ route('assessment.show', 'rajanukul40') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบทดสอบการติดเกม</p>
            <h3 class="mt-1 text-xl font-bold">แบบทดสอบ GAST</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">คัดกรองพฤติกรรมติดเกม สำหรับเด็กอายุ 8 ปีขึ้นไป และผู้ปกครอง</p>
            <div class="mt-4 flex flex-col gap-2">
              <a href="{{ route('assessment.show', 'gast-boy') }}" class="btn-secondary w-full text-sm">👦 สำหรับเด็ก (ชาย)</a>
              <a href="{{ route('assessment.show', 'gast-girl') }}" class="btn-secondary w-full text-sm">👧 สำหรับเด็ก (หญิง)</a>
              <a href="{{ route('assessment.show', 'gast-parent') }}" class="btn-secondary w-full text-sm">👨‍👩‍👧 สำหรับผู้ปกครองประเมิน</a>
            </div>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบคัดกรองความบกพร่องทางการเรียนรู้</p>
            <h3 class="mt-1 text-xl font-bold">แบบคัดกรอง LD (กระทรวงศึกษาธิการ)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินเพื่อค้นหาแนวโน้มความบกพร่องทางการเรียนรู้ 4 ด้าน: การอ่าน, การเขียน, การคำนวณ, พฤติกรรม</p>
            <div class="mt-4 flex flex-col gap-2">
              <a href="{{ route('assessment.show', 'ld-primary') }}" class="btn-secondary w-full text-sm">🎒 ระดับประถมศึกษา</a>
              <a href="{{ route('assessment.show', 'ld-secondary') }}" class="btn-secondary w-full text-sm">🎓 ระดับมัธยมศึกษา</a>
            </div>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">คัดกรองออทิซึม (PDDSQ)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">แบบประเมิน PDDSQ ฉบับย่อ 25 ข้อ สำหรับเด็กช่วงอายุ 1-4 ปี</p>
            <a href="{{ route('assessment.show', 'pddsq') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็กและวัยรุ่น</p>
            <h3 class="mt-1 text-xl font-bold">แบบประเมินจุดแข็งและจุดอ่อน (SDQ)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินปัญหาอารมณ์, พฤติกรรมเกเร, สมาธิสั้น, ปัญหาเพื่อน และสัมพันธภาพทางสังคม</p>
            <div class="mt-4 flex flex-col gap-2">
              <a href="{{ route('assessment.show', 'sdq-self') }}" class="btn-secondary w-full text-sm">🙋 นักเรียนประเมินตนเอง (11-16 ปี)</a>
              <a href="{{ route('assessment.show', 'sdq-parent') }}" class="btn-secondary w-full text-sm">👨‍👩‍👧 ผู้ปกครองประเมินเด็ก (4-16 ปี)</a>
              <a href="{{ route('assessment.show', 'sdq-teacher') }}" class="btn-secondary w-full text-sm">👩‍🏫 ครูประเมินนักเรียน (4-16 ปี)</a>
            </div>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[65%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเบื้องต้น</p>
            <h3 class="mt-1 text-xl font-bold">แบบประเมินความเครียด (ST-5)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความเครียดเบื้องต้น 5 ข้อ อาการหรือความรู้สึกที่เกิดในระยะ 2 - 4 สัปดาห์</p>
            <a href="{{ route('assessment.show', 'st5') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[70%_50%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ความวิตกกังวล (SCARED)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความวิตกกังวลสำหรับเด็ก (SCARED-Thai version) ชุดใหญ่ 41 ข้อ</p>
            <a href="{{ route('assessment.show', 'scared') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[70%_52%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">สำหรับครู / ผู้ปกครอง</p>
            <h3 class="mt-1 text-xl font-bold">แบบสังเกตพฤติกรรม 4 โรค</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">คัดกรองความเสี่ยงภาวะเรียนรู้ช้า แอลดี สมาธิสั้น และออทิสติก (40 ข้อ)</p>
            <a href="{{ route('assessment.show', 'observe4') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[68%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเบื้องต้น</p>
            <h3 class="mt-1 text-xl font-bold">ภาวะวิตกกังวล (GAD-7)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินระดับความวิตกกังวลทั่วไป 7 ข้อ ในช่วง 2 สัปดาห์ที่ผ่านมา</p>
            <a href="{{ route('assessment.show', 'gad7') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[70%_52%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับวัยรุ่น 11-20 ปี</p>
            <h3 class="mt-1 text-xl font-bold">ภาวะซึมเศร้าในวัยรุ่น (PHQ-A)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินภาวะซึมเศร้าและคัดกรองความเสี่ยงในการทำร้ายตนเอง</p>
            <a href="{{ route('assessment.show', 'phqa') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[70%_52%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ผลกระทบจากเหตุการณ์ภัยพิบัติ (CRIES-13)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความเสี่ยงบาดแผลทางใจ (PTSD) ในเด็กที่เจอเหตุการณ์รุนแรง</p>
            <a href="{{ route('assessment.show', 'cries13') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>
      </div>
    </section>

  <!-- Section 3 -->
  <section class="py-10 sm:py-20 bg-milk/50">
    <div class="mx-auto max-w-7xl px-5 sm:px-10">
      <div class="mb-10 sm:text-center">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">แบบประเมินสำหรับวัยผู้ใหญ่</h2>
        <p class="mt-4 text-lg text-ink/70">
          เครื่องมือประเมินสุขภาพจิตที่ออกแบบมาเพื่อวัยทำงานและผู้ใหญ่
        </p>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินเฉพาะด้าน</p>
            <h3 class="mt-1 text-xl font-bold">พลังสุขภาพจิต (RQ)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความสามารถในการปรับตัวและฟื้นตัวจากวิกฤต (ความอึด ฮึด สู้)</p>
            <a href="{{ route('assessment.show', 'rq') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_46%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินต่อเนื่อง</p>
            <h3 class="mt-1 text-xl font-bold">โรคซึมเศร้าและฆ่าตัวตาย (2Q/9Q/8Q)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความเสี่ยงต่อการเกิดโรคซึมเศร้าและแนวโน้มการฆ่าตัวตาย</p>
            <a href="{{ route('assessment.show', '2q') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[64%_48%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">สำหรับบุคลากรสาธารณสุข</p>
            <h3 class="mt-1 text-xl font-bold">ภาวะหมดไฟ (MBI)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินสภาวะ Burnout ของคนทำงานแบบละเอียดด้วย 3 มิติ (22 ข้อ)</p>
            <a href="{{ route('assessment.show', 'mbi') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[70%_50%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ภาวะซึมเศร้าในเด็ก (CDI)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินภาวะซึมเศร้าสำหรับเด็ก (Children's Depression Inventory)</p>
            <a href="{{ route('assessment.show', 'cdi') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[71%_50%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ความวิตกกังวล (SCARED)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">คัดกรองโรควิตกกังวล 5 กลุ่มโรค สำหรับเด็กและวัยรุ่น (41 ข้อ)</p>
            <a href="{{ route('assessment.show', 'scared') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[80%_60%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ความฉลาดทางอารมณ์เด็ก 3-5 ปี</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความฉลาดทางอารมณ์เด็กอายุ 3-5 ปี (ฉบับย่อ)</p>
            <a href="{{ route('assessment.show', 'eq35') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[90%_70%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ความฉลาดทางอารมณ์เด็ก 6-11 ปี</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความฉลาดทางอารมณ์เด็กอายุ 6-11 ปี (ฉบับสมบูรณ์ 60 ข้อ)</p>
            <a href="{{ route('assessment.show', 'eq611') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[100%_80%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสำหรับเด็ก</p>
            <h3 class="mt-1 text-xl font-bold">ความฉลาดทางอารมณ์วัยรุ่น 12-17 ปี</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินความฉลาดทางอารมณ์วัยรุ่นอายุ 12-17 ปี (52 ข้อ)</p>
            <a href="{{ route('assessment.show', 'eq1217') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>

        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[68%_45%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสุขภาพจิต</p>
            <h3 class="mt-1 text-xl font-bold">ความสุขคนไทย (THI-15)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินระดับความสุขและสุขภาพจิตของคนไทยในช่วง 1 เดือนที่ผ่านมา (15 ข้อ)</p>
            <a href="{{ route('assessment.show', 'thi15') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>
      </div>
    </section>


  <!-- Section 4 -->
  <section class="py-10 sm:py-20 bg-white border-t border-reseda/10">
    <div class="mx-auto max-w-7xl px-5 sm:px-10">
      <div class="mb-10 sm:text-center">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-ink">แบบประเมินสำหรับผู้สูงอายุ (60 ปีขึ้นไป)</h2>
        <p class="mt-4 text-lg text-ink/70">
          เครื่องมือประเมินสุขภาพจิตที่ออกแบบมาเพื่อผู้สูงอายุโดยเฉพาะ
        </p>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <article class="soft-card overflow-hidden">
          <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover object-[70%_52%]">
          <div class="p-5">
            <p class="text-sm text-ink/65">แบบประเมินสุขภาพจิต</p>
            <h3 class="mt-1 text-xl font-bold">สุขภาพจิตผู้สูงอายุ (T-GMHA-15)</h3>
            <p class="mt-3 min-h-14 text-sm leading-6 text-ink/70">ประเมินสุขภาพจิตสำหรับผู้สูงอายุ 60 ปีขึ้นไป ฉบับสั้น (15 ข้อ)</p>
            <a href="{{ route('assessment.show', 'tgmha15') }}" class="btn-secondary mt-4 w-full">เริ่มทำแบบประเมิน</a>
          </div>
        </article>
      </div>
    </div>
  </section>

    <section id="videos" class="border-y border-reseda/10 bg-white py-14">
      <div class="container-soft grid gap-8 lg:grid-cols-[260px_1fr]">
        <div>
          <h2 class="text-3xl font-bold leading-tight" data-i18n="videoTitle"></h2>
          <p class="mt-5 text-base leading-7 text-ink/72" data-i18n="videoCopy"></p>
          <a href="{{ route('videos') }}" class="btn-primary mt-7" data-i18n="viewAllVideos"></a>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
          @foreach ($videos as $index => $video)
            <a href="{{ route('video.show', $index) }}" class="group block">
              <div class="relative overflow-hidden rounded-lg bg-reseda">
                <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="h-36 w-full object-cover opacity-75 transition group-hover:scale-105 {{ $index % 2 ? 'object-[72%_48%]' : 'object-[62%_44%]' }}">
                <div class="absolute inset-0 bg-gradient-to-t from-ink/68 to-transparent"></div>
                <span class="absolute bottom-3 right-3 rounded bg-ink/80 px-2 py-1 text-xs font-bold text-white">{{ $video['time'] }}</span>
              </div>
              <h3 class="mt-3 line-clamp-2 text-sm font-bold leading-6">{{ $video['title'] }}</h3>
              <p class="mt-1 text-sm text-ink/55">{{ $video['source'] }}</p>
            </a>
          @endforeach
        </div>
      </div>
    </section>

    <section id="hashtags" class="relative overflow-hidden bg-almond/45 py-14">
      <div class="absolute right-0 top-0 hidden h-full w-1/3 bg-gradient-to-l from-desert/35 to-transparent lg:block"></div>
      <div class="container-soft relative">
        <h2 class="text-3xl font-bold" data-i18n="hashtagTitle"></h2>
        <p class="mt-3 max-w-2xl text-base leading-7 text-ink/72" data-i18n="hashtagCopy"></p>
        <div class="mt-8 flex flex-wrap gap-3">
          @foreach ($hashtags as $tag)
            <a href="{{ route('blogs') }}" class="pill">{{ $tag }}</a>
          @endforeach
          <a href="#hashtags" class="pill bg-desert/30" data-i18n="allHashtags"></a>
        </div>
      </div>
    </section>

    <section id="services" class="container-soft grid gap-5 py-14 lg:grid-cols-3">
      <article class="service-mini-card after:bg-[url('/assets/images/hero-woman-tea.webp')] after:bg-[62%_48%]">
        <div>
          <h2 class="text-xl font-semibold" data-i18n="serviceTitle"></h2>
          <p class="mt-3 text-sm leading-6 text-ink/70" data-i18n="serviceCopy"></p>
          <a href="{{ route('booking') }}" class="btn-secondary service-card-cta mt-5" data-i18n="seeAllServices"></a>
        </div>
      </article>
      <article id="courses" class="service-mini-card after:bg-[url('/assets/images/hero-woman-tea.webp')] after:bg-[74%_50%]">
        <div>
          <h2 class="text-xl font-semibold" data-i18n="courseTitle"></h2>
          <p class="mt-3 text-sm leading-6 text-ink/70" data-i18n="courseCopy"></p>
          <a href="/courses" class="btn-secondary service-card-cta mt-5" data-i18n="seeCourses"></a>
        </div>
      </article>
      <article id="booking" class="service-mini-card after:bg-[url('/assets/images/hero-woman-tea.webp')] after:bg-[82%_48%]">
        <div>
          <h2 class="text-xl font-semibold" data-i18n="communityTitle"></h2>
          <p class="mt-3 text-sm leading-6 text-ink/70" data-i18n="communityCopy"></p>
          <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-secondary service-card-cta mt-5" rel="noopener" data-i18n="seeDetails"></a>
        </div>
      </article>
    </section>

    <section id="subscribe" class="bg-reseda py-6 text-white">
      <div class="container-soft grid gap-4 lg:grid-cols-[1fr_520px] lg:items-center">
        <div class="flex items-center gap-4">
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border border-white/30 text-2xl" aria-hidden="true">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/></svg>
          </span>
          <h2 class="text-lg font-semibold" data-i18n="subscribeTitle"></h2>
        </div>
        <form action="#subscribe" method="get" class="grid gap-3 sm:grid-cols-[1fr_150px]" data-mock-form>
          <label class="sr-only" for="email">Email</label>
          <input id="email" name="email" type="email" autocomplete="email" class="min-h-12 rounded-md border-0 bg-white px-4 text-ink shadow-sm outline-none focus:ring-2 focus:ring-desert" data-i18n-placeholder="emailPlaceholder">
          <button class="min-h-12 rounded-md bg-ink px-5 text-sm font-bold text-white transition hover:bg-persian" type="submit" data-i18n="subscribe"></button>
        </form>
      </div>
    </section>
  </main>
</x-layouts.app>
