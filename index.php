<?php $pageTitle = 'Home'; $navActive = ''; include 'inc/head.php'; include 'inc/nav.php'; ?>

<main>
  <section class="relative overflow-hidden bg-gradient-to-br from-stone-900 via-red-950 to-red-900 px-4 py-24 text-center text-white sm:py-32">
    <div class="pointer-events-none absolute inset-0 opacity-30" style="background-image:radial-gradient(circle at 20% 50%, rgba(255,255,255,.12) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255,200,200,.08) 0%, transparent 40%);"></div>
    <div class="relative mx-auto max-w-3xl">
      <p class="mb-3 text-xs font-semibold uppercase tracking-[0.35em] text-red-200/90">Est. Royal Dining</p>
      <h1 class="font-display text-4xl font-semibold leading-tight tracking-tight sm:text-5xl md:text-6xl">Welcome to Royal Nawab</h1>
      <p class="mx-auto mt-5 max-w-xl text-lg text-red-100/95">Authentic Indian &amp; Pakistani cuisine — refined plates, warm hospitality.</p>
      <div class="mt-10 flex flex-wrap justify-center gap-4">
        <a href="booking.php" class="inline-flex rounded-full bg-white px-8 py-3.5 text-xs font-bold uppercase tracking-widest text-stone-900 shadow-lg transition hover:bg-red-50">Book a table</a>
        <a href="delivery.php" class="inline-flex rounded-full border border-white/50 bg-white/10 px-8 py-3.5 text-xs font-bold uppercase tracking-widest text-white backdrop-blur transition hover:bg-white hover:text-stone-900">Delivery &amp; collection</a>
      </div>
    </div>
  </section>

  <section class="mx-auto max-w-6xl px-4 py-20 text-center lg:px-8">

</section>
    <h2 class="font-display text-3xl font-semibold text-stone-900 sm:text-4xl">About us</h2>
    <div class="mx-auto mt-4 h-px w-20 bg-brand/40"></div>
    <p class="mx-auto mt-8 max-w-2xl text-base leading-relaxed text-stone-600">Experience the finest Indian and Pakistani cuisine at Royal Nawab — a calm dining room, bold flavours, and service that stays with you.</p>
    <div class="mt-14 grid gap-8 sm:grid-cols-3">
      <div class="rounded-2xl border border-stone-200 bg-white p-8 shadow-sm transition hover:border-brand/30 hover:shadow-md">
        <div class="text-4xl">🍹</div>
        <h3 class="mt-4 font-display text-lg font-semibold uppercase tracking-widest text-stone-900">Lounge</h3>
        <p class="mt-2 text-sm leading-relaxed text-stone-600">Spacious, relaxed seating for long evenings.</p>
      </div>
      <div class="rounded-2xl border border-stone-200 bg-white p-8 shadow-sm transition hover:border-brand/30 hover:shadow-md">
        <div class="text-4xl">🍛</div>
        <h3 class="mt-4 font-display text-lg font-semibold uppercase tracking-widest text-stone-900">Cuisine</h3>
        <p class="mt-2 text-sm leading-relaxed text-stone-600">Classics and house specials, cooked to order.</p>
      </div>
      <div class="rounded-2xl border border-stone-200 bg-white p-8 shadow-sm transition hover:border-brand/30 hover:shadow-md">
        <div class="text-4xl">🔔</div>
        <h3 class="mt-4 font-display text-lg font-semibold uppercase tracking-widest text-stone-900">Service</h3>
        <p class="mt-2 text-sm leading-relaxed text-stone-600">Attentive hosts — from welcome to goodbye.</p>
      </div>
    </div>
  </section>

  <section class="border-y border-stone-200 bg-stone-100/80 py-20">
    <div class="mx-auto grid max-w-6xl gap-12 px-4 lg:grid-cols-2 lg:items-center lg:px-8">
      <div>
        <h2 class="font-display text-3xl font-semibold text-stone-900">Location &amp; hours</h2>
        <p class="mt-6 text-stone-600"><span class="font-medium text-stone-800">Mon – Sat</span> · 10:00 am – 12:00 am</p>
        <p class="mt-2 text-stone-600"><span class="font-medium text-stone-800">Sunday</span> · 2:00 pm – 10:00 pm</p>
      </div>
      <div class="rounded-2xl border border-stone-200 bg-white p-8 shadow-sm">
        <p class="text-stone-700">📍 123 Street Name, City, Post Code</p>
        <p class="mt-3 text-stone-600">📞 +44 1234 567890 · +44 9876 543210</p>
        <a href="#" class="mt-6 inline-flex rounded-full border border-stone-300 px-6 py-2.5 text-xs font-semibold uppercase tracking-widest text-stone-800 transition hover:border-brand hover:text-brand">Get directions</a>
      </div>
    </div>
  </section>

  <div class="border-b border-stone-200 bg-white py-10">
    <div class="mx-auto flex max-w-2xl flex-col gap-3 px-4 sm:flex-row sm:items-center">
      <input type="email" placeholder="Your email for news &amp; offers" class="min-w-0 flex-1 rounded-full border border-stone-300 px-5 py-3 text-sm outline-none ring-brand/0 transition focus:border-brand focus:ring-2 focus:ring-brand/20" />
      <button type="button" class="rounded-full bg-stone-900 px-8 py-3 text-xs font-bold uppercase tracking-widest text-white transition hover:bg-brand">Subscribe</button>
    </div>
  </div>
</main>

<?php include 'inc/footer.php'; ?>
</body>
</html>
