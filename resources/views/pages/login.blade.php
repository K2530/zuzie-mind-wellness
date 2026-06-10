<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - เข้าสู่ระบบ">
  <main class="bg-milk flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-[0_18px_45px_rgba(83,76,65,0.08)] border border-reseda/10">
      <div>
        <h2 class="mt-2 text-center text-3xl font-extrabold text-ink">
          เข้าสู่ระบบ
        </h2>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="rounded-md shadow-sm space-y-4">
          <div>
            <label for="username" class="block text-sm font-medium text-ink mb-1">ชื่อผู้ใช้งาน (Username)</label>
            <input id="username" name="username" type="text" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-reseda/20 placeholder-ink/40 text-ink focus:outline-none focus:ring-reseda focus:border-reseda focus:z-10 sm:text-sm bg-milk/50" placeholder="กรอกชื่อผู้ใช้งาน">
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-ink mb-1">รหัสผ่าน (Password)</label>
            <input id="password" name="password" type="password" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-reseda/20 placeholder-ink/40 text-ink focus:outline-none focus:ring-reseda focus:border-reseda focus:z-10 sm:text-sm bg-milk/50" placeholder="กรอกรหัสผ่าน">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-reseda focus:ring-reseda border-gray-300 rounded accent-reseda">
            <label for="remember-me" class="ml-2 block text-sm text-ink/80">
              จดจำฉันในระบบ
            </label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-reseda hover:text-ink transition">
              ลืมรหัสผ่าน?
            </a>
          </div>
        </div>

        <div>
          <button type="submit" class="w-full btn-primary flex justify-center py-3">
            เข้าสู่ระบบ
          </button>
        </div>

        <p class="mt-4 text-center text-sm text-ink/70">
          ไม่มีบัญชีใช่หรือไม่
          <a href="{{ route('register') }}" class="font-medium text-reseda hover:text-ink transition">
            สมัครบัญชี
          </a>
        </p>
      </form>
    </div>
  </main>
</x-layouts.app>
