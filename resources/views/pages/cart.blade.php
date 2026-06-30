<x-layouts.app :nav-items="$navItems" title="Zuzie Mind Wellness - Shopping Cart">
  <main class="bg-white min-h-screen pb-20 pt-10">
    <div class="container-soft max-w-6xl">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-ink mb-6">Shopping Cart</h1>
      
      @php
        $cart = session('cart', []);
        $totalItems = count($cart);
      @endphp

      <p class="text-ink font-bold mb-4">{{ $totalItems }} Course in Cart</p>

      @if($totalItems > 0)
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-8">
          
          <!-- Cart Items List -->
          <div>
            @foreach($cart as $item)
              <div class="flex flex-col sm:flex-row gap-4 border-t border-reseda/20 py-6">
                <!-- Image -->
                <div class="w-full sm:w-[160px] h-[90px] shrink-0 bg-gray-200 rounded-lg overflow-hidden">
                  <img src="{{ asset('assets/images/hero-woman-tea.webp') }}" alt="" class="w-full h-full object-cover">
                </div>
                
                <!-- Details -->
                <div class="flex-1 flex flex-col justify-between">
                  <div>
                    <h3 class="text-[15px] font-bold text-ink leading-tight mb-1">{{ $item['title'] ?? 'หลุดจากความสัมพันธ์ที่ทำร้ายใจ' }}</h3>
                    <p class="text-xs text-ink/70 mb-1">By Zuzie Mind Wellness</p>
                    <div class="flex items-center gap-2 mb-1">
                      <span class="bg-[#e35641] text-white text-[10px] font-bold px-2 py-0.5 rounded-sm">Bestseller</span>
                      <span class="text-[#b4690e] font-bold text-sm">4.7</span>
                      <span class="text-[#b4690e] flex">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                      </span>
                      <span class="text-xs text-ink/60">(421 ratings)</span>
                    </div>
                    <div class="text-xs text-ink/70">4 total hours • 20 lectures • All Levels</div>
                  </div>
                </div>

                <!-- Actions -->
                <div class="flex sm:flex-col justify-end sm:justify-start gap-4 sm:gap-1 text-right sm:text-left text-sm shrink-0 sm:w-[120px]">
                  <a href="{{ route('cart.remove') }}" class="text-reseda hover:text-ink font-medium transition">Remove</a>
                  <a href="#" class="text-reseda hover:text-ink font-medium transition">Save for Later</a>
                  <a href="#" class="text-reseda hover:text-ink font-medium transition">Move to Wishlist</a>
                </div>

                <!-- Price -->
                <div class="text-right shrink-0 sm:w-[100px] mt-2 sm:mt-0">
                  <div class="text-ink font-bold text-[17px]">
                    ฿{{ $item['price'] ?? '2,990' }}
                  </div>
                  <div class="text-ink/60 text-sm line-through">฿3,500</div>
                </div>
              </div>
            @endforeach
            <hr class="border-reseda/20">
          </div>

          <!-- Checkout Sidebar -->
          <div>
            <div class="text-ink/70 font-bold mb-1">Total:</div>
            <div class="text-4xl font-extrabold text-ink leading-none mb-1">฿{{ $cart[0]['price'] ?? '2,990' }}</div>
            <div class="text-ink/60 text-sm line-through mb-1">฿3,500</div>
            <div class="text-ink text-sm mb-4">14% off</div>

            <a href="{{ route('checkout') }}" class="block w-full bg-[#536442] hover:bg-[#425034] transition text-white font-bold text-center py-3.5 rounded-full mb-2 shadow-sm text-[15px]">Proceed to Checkout <span class="ml-1">→</span></a>
            
            <hr class="border-reseda/10 my-4">
            
            <form action="#" class="flex gap-0">
              <input type="text" placeholder="Enter Coupon" class="flex-1 border border-ink text-ink px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#536442] placeholder:text-ink/50" />
              <button type="button" class="bg-[#536442] hover:bg-[#425034] text-white px-4 py-2 font-bold text-sm transition">Apply</button>
            </form>
          </div>
          
        </div>
      @else
        <div class="border border-reseda/10 bg-white shadow-sm p-8 text-center rounded-lg my-10">
          <p class="text-ink/70 mb-4">Your cart is empty. Keep shopping to find a course!</p>
          <a href="{{ route('home') }}#courses" class="bg-[#536442] hover:bg-[#425034] transition text-white font-bold px-6 py-3 rounded-full shadow-sm">Keep Shopping</a>
        </div>
      @endif

    </div>
  </main>
</x-layouts.app>
