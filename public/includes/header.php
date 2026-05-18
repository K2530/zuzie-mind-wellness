<?php
/** @var array<int, array{href: string, key: string}> $navItems */
?>
<header class="sticky top-0 z-40 border-b border-reseda/10 bg-white/92 backdrop-blur">
  <div class="container-header flex min-h-20 items-center justify-between gap-3">
    <a href="#home" class="shrink-0 leading-none" aria-label="Zuzie Mind Wellness">
      <span class="block font-serif text-4xl leading-8 tracking-normal text-reseda">Zuzie</span>
      <span class="block text-[10px] font-semibold uppercase tracking-[0.28em] text-reseda/70">Mind Wellness</span>
    </a>

    <nav class="hidden items-center gap-8 text-[13px] font-semibold text-ink lg:flex" aria-label="Main navigation">
      <?php foreach ($navItems as $item): ?>
        <a class="whitespace-nowrap transition hover:text-reseda" href="<?= e($item['href']) ?>" data-i18n="<?= e($item['key']) ?>"></a>
      <?php endforeach; ?>
    </nav>

    <div class="hidden items-center gap-2 lg:flex">
      <div class="flex rounded-md border border-reseda/15 bg-almond/40 p-1 text-xs font-bold">
        <button type="button" class="rounded px-2.5 py-1.5" data-lang="th" aria-pressed="true">TH</button>
        <button type="button" class="rounded px-2.5 py-1.5" data-lang="en" aria-pressed="false">EN</button>
      </div>
      <a href="#booking" class="btn-consult min-h-11 px-3 py-2" data-i18n="bookConsult"></a>
      <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line min-h-11 px-3 py-2" rel="noopener" data-i18n="line"></a>
    </div>

    <button class="btn-secondary px-3 lg:hidden" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-button>
      <span class="sr-only">Open menu</span>
      <span class="text-2xl leading-none">&#9776;</span>
    </button>
  </div>

  <div id="mobile-menu" class="hidden border-t border-reseda/10 bg-white lg:hidden" data-mobile-menu>
    <div class="container-header grid gap-2 py-4">
      <?php foreach ($navItems as $item): ?>
        <a class="rounded-md px-3 py-3 text-base font-semibold hover:bg-almond" href="<?= e($item['href']) ?>" data-i18n="<?= e($item['key']) ?>"></a>
      <?php endforeach; ?>
      <div class="mt-2 grid grid-cols-2 gap-2">
        <button type="button" class="btn-secondary" data-lang="th" aria-pressed="true">TH</button>
        <button type="button" class="btn-secondary" data-lang="en" aria-pressed="false">EN</button>
        <a href="#booking" class="btn-consult col-span-2" data-i18n="bookConsult"></a>
        <a href="https://line.me/R/ti/p/@zuziewellness" class="btn-line col-span-2" rel="noopener" data-i18n="line"></a>
      </div>
    </div>
  </div>
</header>
