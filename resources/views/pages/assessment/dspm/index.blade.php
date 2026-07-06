<x-layouts.app :nav-items="config('zuzie.nav_items')" title="คัดกรองพัฒนาการเด็กปฐมวัย (DSPM)">
  
  <div class="relative bg-milk pt-[70px] sm:pt-[90px]">
    <div class="container mx-auto px-4 py-8 lg:max-w-3xl">
      <a href="/" class="text-sm font-semibold text-reseda hover:text-ink">‹ กลับสู่หน้าแรก</a>

      <div class="card p-6 sm:p-8 border-t-4 mb-6" style="border-top-color: #2b6cb0">
        <h1 class="text-2xl font-bold text-ink mb-2">
          แบบบันทึกการเฝ้าระวังและส่งเสริมพัฒนาการเด็กปฐมวัย (DSPM)
        </h1>
        <p class="text-ink/80 mb-6">
          โปรดเลือกระบุช่วงอายุของเด็กที่ต้องการประเมินพัฒนาการ เพื่อให้ระบบแสดงข้อคำถามที่เหมาะสมกับช่วงวัยของเด็ก
        </p>

        <form action="{{ route('dspm.select') }}" method="POST">
          @csrf
          <div class="mb-6">
            <label for="age_slug" class="block text-sm font-semibold text-ink/80 mb-2">เลือกช่วงอายุของเด็ก</label>
            <select name="age_slug" id="age_slug" class="w-full rounded-xl border border-reseda/20 bg-white px-4 py-3 text-ink/80 focus:border-primary focus:ring focus:ring-primary/20">
              <option value="">-- กรุณาเลือกช่วงอายุ --</option>
              @foreach($ranges as $slug => $range)
                <option value="{{ $slug }}">{{ $range['label'] }}</option>
              @endforeach
            </select>
            @error('age_slug')
              <p class="mt-2 text-sm text-warning-dark">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary w-full py-3 text-base">
            เริ่มทำแบบประเมิน
          </button>
        </form>
      </div>
    </div>
  </div>
</x-layouts.app>
