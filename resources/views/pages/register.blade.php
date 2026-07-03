<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - สมัครสมาชิก">
  <main class="bg-milk flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-[0_18px_45px_rgba(83,76,65,0.08)] border border-reseda/10">
      <div>
        <h2 class="mt-2 text-center text-3xl font-extrabold text-ink" data-i18n="registerTitle">
          สมัครสมาชิกใหม่
        </h2>
        <p class="mt-2 text-center text-sm text-ink/70">
          <span data-i18n="or">หรือ</span>
          <a href="{{ route('login') }}" class="font-medium text-reseda hover:text-ink transition" data-i18n="loginLink">
            เข้าสู่ระบบบัญชีเดิม
          </a>
        </p>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('register.submit') }}" method="POST">
        @csrf

        @if ($errors->any())
          <div class="rounded-lg border border-[#c85f36]/25 bg-[#c85f36]/10 px-4 py-3 text-sm font-semibold text-[#8d3f24]">
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif

        <div class="rounded-md shadow-sm space-y-4">
          <div>
            <label for="username" class="block text-sm font-medium text-ink mb-1" data-i18n="usernameLabel">ชื่อผู้ใช้งาน (Username)</label>
            <input id="username" name="username" type="text" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-reseda/20 placeholder-ink/40 text-ink focus:outline-none focus:ring-reseda focus:border-reseda focus:z-10 sm:text-sm bg-milk/50" placeholder="ตั้งชื่อผู้ใช้งานของคุณ" data-i18n-placeholder="usernameRegisterPlaceholder">
          </div>
          <div>
            <label for="fullname" class="block text-sm font-medium text-ink mb-1" data-i18n="fullnameLabel">ชื่อ-นามสกุล</label>
            <input id="fullname" name="fullname" type="text" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-reseda/20 placeholder-ink/40 text-ink focus:outline-none focus:ring-reseda focus:border-reseda focus:z-10 sm:text-sm bg-milk/50" placeholder="กรอกชื่อและนามสกุลจริง" data-i18n-placeholder="fullnamePlaceholder">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-ink mb-1" data-i18n="phoneLabel">เบอร์โทรศัพท์</label>
            <input id="phone" name="phone" type="tel" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-reseda/20 placeholder-ink/40 text-ink focus:outline-none focus:ring-reseda focus:border-reseda focus:z-10 sm:text-sm bg-milk/50" placeholder="กรอกเบอร์โทรศัพท์ 10 หลัก" data-i18n-placeholder="phonePlaceholder">
          </div>
        </div>

        <div class="flex items-center">
          <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-reseda focus:ring-reseda border-gray-300 rounded accent-reseda">
          <label for="terms" class="ml-2 block text-sm text-ink/80" data-i18n="acceptTerms">
            ฉันยอมรับเงื่อนไขการใช้งานและนโยบายความเป็นส่วนตัว
          </label>
        </div>

        <div>
          <button type="submit" class="w-full btn-primary flex justify-center py-3" data-i18n="registerBtn">
            ยืนยันการสมัครสมาชิก
          </button>
        </div>
      </form>
    </div>
  </main>
</x-layouts.app>
