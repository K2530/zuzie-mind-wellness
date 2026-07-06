<x-layouts.app :nav-items="$navItems" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-4xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">สรุปผลประเมินพลังสุขภาพจิต (อึด ฮึด สู้)</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          @php
            $isTotalHigh = $total_score > $cutoffs['total']['high'];
            $isTotalLow = $total_score < $cutoffs['total']['low'];
            $isTotalNormal = !$isTotalHigh && !$isTotalLow;
            $totalStatusText = $isTotalHigh ? 'สูงกว่าเกณฑ์ปกติ (ดีเยี่ยม)' : ($isTotalLow ? 'ต่ำกว่าเกณฑ์ปกติ (ควรพัฒนา)' : 'เกณฑ์ปกติ');
            $totalColor = $isTotalHigh ? '#2b6cb0' : ($isTotalLow ? '#c85f36' : '#5f8b61');
            $totalPercent = min(100, ($total_score / 80) * 100);
          @endphp
          
          <div class="flex flex-col items-center justify-center p-6 text-center">
            <h3 class="text-xl font-bold">คะแนนรวมพลังสุขภาพจิต (Total RQ Score)</h3>
            
            <div class="relative mt-6 flex size-40 items-center justify-center rounded-full" style="background: conic-gradient({{ $totalColor }} {{ $totalPercent }}%, #e2e8f0 0)">
                <div class="absolute flex size-[148px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                    <span class="text-4xl font-bold" style="color: {{ $totalColor }}">{{ $total_score }}</span>
                    <span class="text-sm text-ink/50">เต็ม 80</span>
                </div>
            </div>
            
            <p class="mt-6 text-xl font-bold" style="color: {{ $totalColor }}">
                {{ $totalStatusText }}
            </p>
          </div>
          
          @if($isTotalHigh)
            <div class="mt-4 rounded-lg bg-[#2b6cb0]/10 p-4 text-sm text-[#2b6cb0] leading-6">
              <strong>คำแนะนำ:</strong> ท่านจัดอยู่ในกลุ่มคนที่มีพลังสุขภาพจิตดีเยี่ยม ขอให้ท่านรักษาศักยภาพด้านนี้ไว้
            </div>
          @elseif($isTotalNormal)
            <div class="mt-4 rounded-lg bg-success/10 p-4 text-sm text-success leading-6">
              <strong>คำแนะนำ:</strong> ท่านอาจพัฒนาตนเองโดยการแสวงหาความรู้เพื่อเสริมสร้างพลังสุขภาพจิตให้คงอยู่ เช่น การฝึกทักษะในการแก้ไขปัญหา การสร้างกำลังใจให้ตนเอง
            </div>
          @endif
        </div>
      </section>

      <section class="grid gap-5 md:grid-cols-3">
        @php
            $categories = [
                'emotional' => [
                    'title' => 'ความทนทานทางอารมณ์ (อึด)', 
                    'desc' => 'การมีอารมณ์มั่นคง ไม่หวั่นไหวง่าย ไม่ถูกกระตุ้นง่าย',
                    'advice' => 'ท่านสามารถพัฒนาศักยภาพด้านนี้ได้โดย ฝึกควบคุมอารมณ์ตนเอง ให้มีสติและสงบ เริ่มต้นจากการควบคุมอารมณ์ เมื่อเผชิญกับความเครียด ความผิดหวังเล็ก ๆ น้อย ๆ ฝึกหายใจ เข้าออกช้า ๆ ลึก ๆ หรือฝึกมองส่วนดี ๆ ที่มีอยู่'
                ],
                'morale' => [
                    'title' => 'กำลังใจ (ฮึด)', 
                    'desc' => 'การมีจิตใจที่มุ่งมั่นสู่เป้าหมายที่ต้องการ ไม่ย่อท้อ มีที่พึ่งที่ปรึกษา',
                    'advice' => 'ท่านสามารถพัฒนาศักยภาพด้านนี้ได้ โดยคิดถึงสิ่งดี ๆ ที่ท่านมีอยู่ เช่น มีคนที่รักและห่วงใย เคยผ่านประสบการณ์ความยากลำบากมาก่อน หมั่นพูดให้กำลังใจตนเอง เช่น เราต้องผ่านมันไปได้ ชีวิตย่อมมีขึ้นมีลง คิดถึงโอกาสก้าวหน้า หากฝ่าฟันอุปสรรคไปได้'
                ],
                'problem' => [
                    'title' => 'การจัดการกับปัญหา (สู้)', 
                    'desc' => 'การมีมุมมองทางบวกต่อปัญหา ไม่หนีปัญหา มีการหาข้อมูล และมีแนวทาง',
                    'advice' => 'ท่านสามารถพัฒนาศักยภาพด้านนี้ได้โดย ฝึกทิศทางของมุมมองในการแก้ไขปัญหา เริ่มจากเรื่องที่มีปัญหาน้อย ๆ มองหาทางออกให้มากที่สุด หาข้อดีข้อเสียในแต่ละวิธีการ เลือกวิธีการที่ดีที่สุด และคิดหาวิธีสำรองไว้ เผื่อวิธีที่เลือกใช้ไม่ได้ผล การแก้ไขปัญหาได้สำเร็จ จะช่วยให้ท่านเห็นว่าการแก้ปัญหาไม่ใช่เรื่องยาก และมีทักษะที่ดีในการแก้ปัญหาได้'
                ],
            ];
            $hasLowScore = false;
        @endphp

        @foreach($categories as $key => $cat)
            @php 
                $s = $scale_scores[$key];
                $c = $cutoffs[$key];
                
                $isHigh = $s > $c['high'];
                $isLow = $s < $c['low'];
                $isNormal = !$isHigh && !$isLow;
                
                if ($isLow) $hasLowScore = true;
                
                $statusText = $isHigh ? 'สูงกว่าเกณฑ์' : ($isLow ? 'ต่ำกว่าเกณฑ์' : 'เกณฑ์ปกติ');
                $statusColor = $isHigh ? '#2b6cb0' : ($isLow ? '#c85f36' : '#5f8b61');
                
                // Max scores: Emotional=40, Morale=20, Problem=20
                $max = $key === 'emotional' ? 40 : 20;
                $percent = ($s / $max) * 100;
            @endphp
            <div class="card flex flex-col p-5 border-t-4" style="border-top-color: {{ $statusColor }}">
                <h3 class="text-base font-bold text-center">{{ $cat['title'] }}</h3>
                <div class="flex justify-center">
                  <div class="relative mt-4 flex size-24 items-center justify-center rounded-full" style="background: conic-gradient({{ $statusColor }} {{ $percent }}%, #e2e8f0 0)">
                      <div class="absolute flex size-[84px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                          <span class="text-2xl font-bold" style="color: {{ $statusColor }}">{{ $s }}</span>
                      </div>
                  </div>
                </div>
                <p class="mt-4 text-base font-semibold text-center" style="color: {{ $statusColor }}">
                    {{ $statusText }}
                </p>
                <p class="mt-3 text-xs text-ink/70 text-center leading-5">{{ $cat['desc'] }}</p>
                
                @if($isLow)
                <div class="mt-4 rounded bg-warning/10 p-3 text-xs text-warning-dark leading-5">
                  <strong>คำแนะนำ:</strong> {{ $cat['advice'] }}
                </div>
                @endif
            </div>
        @endforeach
      </section>

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปคำตอบของคุณ
        </h2>
        
        <div class="space-y-4">
          @foreach ($assessment['questions'] as $index => $q)
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/50 p-4">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/20 text-sm font-bold text-ink/80">
                {{ $index + 1 }}
              </span>
              <div class="flex-1 pt-1">
                <p class="text-base text-ink/80">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="mt-3 flex flex-wrap items-center gap-2">
                  <span class="rounded-full px-3 py-1 text-sm font-semibold bg-primary/20 text-primary">
                    {{ $assessment['options'][$answers[$index]] }}
                  </span>
                  @if(in_array($index, [0, 4, 13, 14, 15]))
                  <span class="text-xs text-ink/50 bg-ink/5 px-2 py-1 rounded-md ml-2">
                    คะแนนที่ได้: {{ $scored_answers[$index] }} (Reverse Scored)
                  </span>
                  @else
                  <span class="text-xs text-ink/50 bg-ink/5 px-2 py-1 rounded-md ml-2">
                    คะแนนที่ได้: {{ $scored_answers[$index] }}
                  </span>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>

    </div>
  </div>
</x-layouts.app>
