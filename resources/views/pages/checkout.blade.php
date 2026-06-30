<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Checkout">
  <main class="bg-white min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-5xl">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_380px] gap-10">
        
        <!-- Left Column: Forms -->
        <div>
          <h1 class="text-3xl font-bold text-ink mb-8">Checkout</h1>
          
          <h2 class="text-lg font-bold text-ink mb-4">Billing address</h2>
          <div class="mb-8">
            <label class="block text-sm font-bold text-ink mb-2">Country</label>
            <div class="relative">
              <select class="w-full appearance-none border border-ink/80 rounded-sm px-4 py-3 bg-white text-ink font-medium focus:outline-none focus:ring-2 focus:ring-[#536442]">
                <option>Thailand</option>
                <option>United States</option>
                <option>United Kingdom</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-ink">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </div>
            </div>
            <p class="text-[11px] text-ink/60 mt-2 leading-tight">Zuzie Mind Wellness is required by law to collect applicable transaction taxes for purchases made in certain tax jurisdictions.</p>
          </div>

          <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold text-ink">Payment method</h2>
            <span class="text-sm text-ink/70 flex items-center gap-1">
              Secure and encrypted
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2v-8a2 2 0 00-2-2h-1V7c0-2.757-2.243-5-5-5zm-3 5c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm3 10c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"></path></svg>
            </span>
          </div>

          <div class="border border-reseda/20 rounded-md overflow-hidden bg-[#f7f9fa] mb-8">
            <!-- Cards Option -->
            <label class="flex items-center gap-3 p-4 border-b border-reseda/20 cursor-pointer">
              <input type="radio" name="payment_method" checked class="w-4 h-4 text-[#536442] focus:ring-[#536442] border-gray-300">
              <svg class="w-6 h-6 text-ink" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
              <span class="font-bold text-ink">Cards</span>
            </label>
            
            <div class="p-4 bg-white border-b border-reseda/20">
              <div class="grid gap-4">
                <div>
                  <label class="block text-sm font-bold text-ink mb-1">Card number</label>
                  <input type="text" placeholder="1234 5678 9012 3456" class="w-full border border-ink/40 rounded-sm px-4 py-3 bg-white text-ink placeholder-ink/40 focus:outline-none focus:ring-2 focus:ring-[#536442]">
                  <div class="flex items-center gap-1 mt-2 opacity-60">
                    <!-- Fake CC icons -->
                    <div class="w-8 h-5 bg-blue-600 rounded-[2px]"></div>
                    <div class="w-8 h-5 bg-red-500 rounded-[2px]"></div>
                    <div class="w-8 h-5 bg-yellow-400 rounded-[2px]"></div>
                  </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label class="block text-sm font-bold text-ink mb-1">Expiry date</label>
                    <input type="text" placeholder="MM/YY" class="w-full border border-ink/40 rounded-sm px-4 py-3 bg-white text-ink placeholder-ink/40 focus:outline-none focus:ring-2 focus:ring-[#536442]">
                  </div>
                  <div>
                    <label class="block text-sm font-bold text-ink mb-1">CVC / CVV</label>
                    <input type="text" placeholder="CVC" class="w-full border border-ink/40 rounded-sm px-4 py-3 bg-white text-ink placeholder-ink/40 focus:outline-none focus:ring-2 focus:ring-[#536442]">
                  </div>
                </div>
                
                <div>
                  <label class="block text-sm font-bold text-ink mb-1">Name on card</label>
                  <input type="text" placeholder="Name on card" class="w-full border border-ink/40 rounded-sm px-4 py-3 bg-white text-ink placeholder-ink/40 focus:outline-none focus:ring-2 focus:ring-[#536442]">
                </div>

                <label class="flex items-center gap-2 cursor-pointer mt-2">
                  <input type="checkbox" checked class="w-4 h-4 text-[#536442] rounded-sm focus:ring-[#536442] border-ink/40">
                  <span class="text-sm text-ink/80">Securely save this card for my later purchase</span>
                </label>
              </div>
            </div>

            <!-- PayPal Option -->
            <label class="flex items-center gap-3 p-4 cursor-pointer hover:bg-white transition">
              <input type="radio" name="payment_method" class="w-4 h-4 text-[#536442] focus:ring-[#536442] border-gray-300">
              <span class="font-bold text-blue-800 italic">PayPal</span>
            </label>
          </div>

          <h2 class="text-lg font-bold text-ink mb-4">Order details (1 course)</h2>
          @php $cart = session('cart', []); @endphp
          @if(count($cart) > 0)
            @foreach($cart as $item)
              <div class="flex items-start gap-4">
                <div class="w-16 h-12 bg-gray-200 shrink-0">
                  <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                  <h3 class="text-sm font-bold text-ink leading-tight">{{ $item['title'] ?? 'Course Title' }}</h3>
                </div>
                <div class="text-right shrink-0">
                  <div class="text-sm font-bold text-ink">฿{{ $item['price'] ?? '2,990' }}</div>
                  <div class="text-[13px] text-ink/50 line-through">฿3,500</div>
                </div>
              </div>
            @endforeach
          @endif
        </div>

        <!-- Right Column: Summary -->
        <div>
          <div class="bg-[#f7f9fa] p-6 border border-reseda/10">
            <h2 class="text-2xl font-bold text-ink mb-4">Order summary</h2>
            
            <div class="flex justify-between text-ink/80 mb-2">
              <span>Original Price:</span>
              <span>฿3,500</span>
            </div>
            <div class="flex justify-between text-ink/80 mb-4 pb-4 border-b border-reseda/20">
              <span>Discounts (14% Off):</span>
              <span>-฿510</span>
            </div>
            <div class="flex justify-between items-center mb-6">
              <span class="font-bold text-ink">Total (1 course):</span>
              <span class="text-2xl font-bold text-ink">฿{{ $cart[0]['price'] ?? '2,990' }}</span>
            </div>

            <p class="text-[11px] text-ink/70 mb-4 leading-tight">By completing your purchase, you agree to these <a href="#" class="text-reseda underline">Terms of Use</a>.</p>

            <form action="{{ route('checkout.submit') }}" method="POST">
              @csrf
              <button type="submit" class="w-full bg-[#536442] hover:bg-[#425034] transition text-white font-bold py-4 rounded-full flex items-center justify-center gap-2 shadow-sm">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2v-8a2 2 0 00-2-2h-1V7c0-2.757-2.243-5-5-5zm-3 5c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm3 10c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"></path></svg>
                Pay ฿{{ $cart[0]['price'] ?? '2,990' }}
              </button>
            </form>

            <div class="text-center mt-6">
              <p class="font-bold text-sm text-ink mb-1">30-Day Money-Back Guarantee</p>
              <p class="text-xs text-ink/70">Not satisfied? Get a full refund within 30 days.<br>Simple and straightforward!</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </main>
</x-layouts.app>
