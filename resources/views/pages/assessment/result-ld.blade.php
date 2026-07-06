<x-layouts.app :nav-items="config('zuzie.nav_items')" title="ผลการประเมิน">
  <div class="px-5 pb-8 pt-5 sm:px-10 sm:pt-10">
    <div class="mx-auto max-w-4xl space-y-6">
      
      <section class="card">
        <div class="flex items-center justify-between border-b border-reseda/10 pb-5">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-ink">{{ $assessment['title'] }}</h1>
            <p class="mt-2 text-sm text-ink/70">ผลการประเมินคัดกรองเบื้องต้น</p>
          </div>
          <a href="{{ route('home') }}" class="btn-secondary hidden sm:flex">
            กลับหน้าหลัก
          </a>
        </div>

        <div class="py-5">
          @if(!$passPreScreen)
            <div class="flex items-center gap-3 rounded-lg bg-success/10 p-4 text-success">
              <i class="ph ph-check-circle text-2xl"></i>
              <p class="font-bold">ไม่พบความบกพร่องทางการเรียนรู้</p>
            </div>
            <p class="mt-4 text-base text-ink/80 leading-7">
              จากการประเมินส่วนที่ 1 (การวิเคราะห์เบื้องต้น) พบว่าผู้รับการประเมินไม่เข้าข่ายที่มีปัญหาทางการเรียนรู้ หรือมีสาเหตุอื่นที่ทำให้เกิดปัญหาทางการเรียน จึงถือว่าไม่พบความบกพร่องทางการเรียนรู้ (LD) ตามเกณฑ์เบื้องต้น
            </p>
          @else
            <div class="flex items-center gap-3 rounded-lg bg-warning/10 p-4 text-warning">
              <i class="ph ph-warning-circle text-2xl"></i>
              <p class="font-bold">เข้าข่ายที่ต้องประเมินวิเคราะห์รายด้าน</p>
            </div>
            <p class="mt-4 text-base text-ink/80 leading-7">
              ผู้รับการประเมินผ่านเกณฑ์ส่วนที่ 1 จึงนำผลประเมินส่วนที่ 2 มาวิเคราะห์ความบกพร่องรายด้าน ดังนี้:
            </p>
          @endif
        </div>
      </section>

      @if($passPreScreen)
      <section class="grid gap-5 md:grid-cols-2">
        @php
            $categories = [
                'reading' => ['title' => '1. ด้านการอ่าน'],
                'writing' => ['title' => '2. ด้านการเขียน'],
                'math' => ['title' => '3. ด้านการคำนวณ'],
                'behavior' => ['title' => '4. ด้านพฤติกรรมทั่วไป'],
            ];
        @endphp

        @foreach($categories as $key => $cat)
            @php 
                $s = $scores[$key];
                $cutOff = $cutOffs[$key];
                $isAtRisk = $s >= $cutOff;
                $statusText = $isAtRisk ? 'มีแนวโน้มความบกพร่อง' : 'ปกติ';
                $statusColor = $isAtRisk ? '#c85f36' : '#5f8b61';
                $percent = ($s / 10) * 100;
            @endphp
            <div class="card flex flex-col items-center justify-center p-6 text-center border-t-4" style="border-top-color: {{ $statusColor }}">
                <h3 class="text-lg font-bold">{{ $cat['title'] }}</h3>
                <div class="mt-1 text-sm text-ink/50">เกณฑ์ประเมิน: {{ $cutOff }} คะแนนขึ้นไป</div>
                <div class="relative mt-4 flex size-32 items-center justify-center rounded-full" style="background: conic-gradient({{ $statusColor }} {{ $percent }}%, #e2e8f0 0)">
                    <div class="absolute flex size-[116px] flex-col items-center justify-center rounded-full bg-milk shadow-inner">
                        <span class="text-3xl font-bold" style="color: {{ $statusColor }}">{{ $s }}</span>
                        <span class="text-xs text-ink/50">คะแนน</span>
                    </div>
                </div>
                <p class="mt-4 text-lg font-semibold" style="color: {{ $statusColor }}">
                    {{ $statusText }}
                </p>
            </div>
        @endforeach
      </section>
      
      @php
          $anyRisk = false;
          foreach($scores as $key => $s) {
              if($s >= $cutOffs[$key]) $anyRisk = true;
          }
      @endphp
      
      @if($anyRisk)
      <div class="rounded-xl border border-error/20 bg-error/5 p-5">
        <h3 class="text-lg font-bold text-error">คำแนะนำเพิ่มเติม</h3>
        <p class="mt-2 text-ink/80 leading-7">
          หากพบว่ามีแนวโน้มที่จะเป็นบุคคลที่มีความบกพร่องทางการเรียนรู้ด้านใดด้านหนึ่ง หรือหลายด้าน ควรให้การช่วยเหลือตามความต้องการจำเป็นพิเศษทางการศึกษาของผู้เรียน และ <strong>ส่งต่อให้แพทย์ตรวจวินิจฉัยต่อไป</strong>
        </p>
      </div>
      @endif
      
      @endif

      <section class="card pb-8">
        <h2 class="mb-5 border-b border-reseda/10 pb-5 text-xl font-bold text-ink">
          สรุปคำตอบของคุณ
        </h2>
        
        <div class="space-y-4">
          @foreach ($assessment['questions'] as $index => $q)
            @if($index === 0)
              <h3 class="font-bold mt-6 mb-2 text-primary">ส่วนที่ 1: การวิเคราะห์เบื้องต้น</h3>
            @elseif($index === 3)
              <h3 class="font-bold mt-6 mb-2 text-primary">ส่วนที่ 2: ด้านการอ่าน</h3>
            @elseif($index === 13)
              <h3 class="font-bold mt-6 mb-2 text-primary">ส่วนที่ 2: ด้านการเขียน</h3>
            @elseif($index === 23)
              <h3 class="font-bold mt-6 mb-2 text-primary">ส่วนที่ 2: ด้านการคำนวณ</h3>
            @elseif($index === 33)
              <h3 class="font-bold mt-6 mb-2 text-primary">ส่วนที่ 2: ด้านพฤติกรรมทั่วไป</h3>
            @endif
            <div class="flex items-start gap-4 rounded-xl border border-reseda/10 bg-milk/50 p-4">
              <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-reseda/20 text-sm font-bold text-ink/80">
                {{ $index + 1 }}
              </span>
              <div class="flex-1 pt-1">
                <p class="text-base text-ink/80">{{ is_array($q) ? $q['text'] : $q }}</p>
                <div class="mt-3 flex items-center gap-2">
                  <span class="rounded-full px-3 py-1 text-sm font-semibold {{ $answers[$index] == 1 ? 'bg-primary/20 text-primary' : 'bg-reseda/10 text-ink/60' }}">
                    {{ $answers[$index] == 1 ? 'ใช่ (1)' : 'ไม่ใช่ (0)' }}
                  </span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>

    </div>
  </div>
</x-layouts.app>
