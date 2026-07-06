<x-app-layout>
  @section('title', 'ประเมินพัฒนาการเด็ก | ช่วงอายุ ' . $range['label'])

  <div class="relative bg-milk pt-[70px] sm:pt-[90px]">
    <div class="container mx-auto px-4 py-8 lg:max-w-4xl">
      <x-breadcrumb :items="[
          ['label' => 'หน้าแรก', 'url' => '/'],
          ['label' => 'ประเมินพัฒนาการเด็กปฐมวัย (DSPM)', 'url' => route('dspm.index')],
          ['label' => 'ประเมินพัฒนาการ']
      ]" class="mb-6" />

      <form action="{{ route('dspm.submit', $age_slug) }}" method="POST">
        @csrf
        <div class="card p-6 sm:p-8 border-t-4 mb-6" style="border-top-color: #2b6cb0">
          <div class="flex items-center gap-4 border-b border-reseda/10 pb-4 mb-6">
            <div>
              <h1 class="text-xl font-bold text-ink">ช่วงอายุ: {{ $range['label'] }}</h1>
              <p class="text-sm text-ink/70 mt-1">ให้ผู้ปกครองประเมินว่าเด็กสามารถทำทักษะต่อไปนี้ได้หรือไม่</p>
            </div>
          </div>

          <div class="space-y-6">
            @foreach($range['items'] as $index => $item)
              <div class="p-4 rounded-xl border {{ $errors->has('answers.'.$index) ? 'border-warning-dark bg-warning/5' : 'border-reseda/20 bg-white' }}">
                <div class="mb-2">
                  <span class="inline-block px-2 py-1 text-xs font-semibold rounded bg-primary/10 text-primary">
                    {{ $item['domain'] }}
                  </span>
                </div>
                <h3 class="text-base font-medium text-ink mb-4">{{ $item['text'] }}</h3>
                
                <div class="flex flex-wrap gap-4">
                  <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="answers[{{ $index }}]" value="pass" class="text-primary focus:ring-primary/20"
                           {{ old("answers.$index") === 'pass' ? 'checked' : '' }}>
                    <span class="text-ink/80 text-sm">ผ่าน (ทำได้)</span>
                  </label>
                  <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="answers[{{ $index }}]" value="fail" class="text-warning-dark focus:ring-warning-dark/20"
                           {{ old("answers.$index") === 'fail' ? 'checked' : '' }}>
                    <span class="text-ink/80 text-sm">ไม่ผ่าน (ทำไม่ได้)</span>
                  </label>
                </div>
                @error('answers.'.$index)
                  <p class="mt-2 text-xs text-warning-dark">{{ $message }}</p>
                @enderror
              </div>
            @endforeach
          </div>

          <div class="mt-8 flex justify-end">
             <button type="submit" class="btn btn-primary px-8 py-3">ประมวลผลการประเมิน</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</x-app-layout>
