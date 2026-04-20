<?php
$pageTitle = 'Delivery & Collection';
$navActive = 'delivery';
include 'inc/head.php';
include 'inc/nav.php';
?>

<main>
  <section class="bg-gradient-to-br from-stone-900 via-red-950 to-red-900 px-4 py-16 text-center text-white sm:py-20">
    <h1 class="font-display text-4xl font-semibold sm:text-5xl">Delivery &amp; collection</h1>
    <p class="mx-auto mt-3 max-w-lg text-red-100/90">Enjoy Royal Nawab at home — or collect from us.</p>
  </section>

  <section class="mx-auto max-w-3xl px-4 py-16 text-center lg:px-8">
    <h2 class="font-display text-2xl font-semibold text-stone-900">Choose an option</h2>
    <div class="mx-auto mt-4 grid gap-6 sm:grid-cols-2">
      <div class="rounded-2xl border border-stone-200 bg-white p-8 shadow-sm transition hover:border-brand/40 hover:shadow-md">
        <div class="text-4xl">🚗</div>
        <h3 class="mt-4 font-display text-lg font-semibold text-stone-900">Delivery</h3>
        <a href="order-delivery.php" class="mt-6 inline-flex rounded-full bg-stone-900 px-6 py-3 text-xs font-bold uppercase tracking-widest text-white transition hover:bg-brand">Order delivery</a>
      </div>
      <div class="rounded-2xl border border-stone-200 bg-white p-8 shadow-sm transition hover:border-brand/40 hover:shadow-md">
        <div class="text-4xl">🛍️</div>
        <h3 class="mt-4 font-display text-lg font-semibold text-stone-900">Collection</h3>
        <a href="order-collection.php" class="mt-6 inline-flex rounded-full bg-stone-900 px-6 py-3 text-xs font-bold uppercase tracking-widest text-white transition hover:bg-brand">Order collection</a>
      </div>
    </div>
  </section>
   <section class="mx-auto max-w-2xl px-4 pb-20 lg:px-8">
    <h2 class="text-center font-display text-sm font-semibold uppercase tracking-[0.2em] text-stone-900">Delivery area</h2>
    <p class="mt-2 text-center text-sm text-stone-600">Enter your postcode to check we deliver to you.</p>
    <div class="mt-6 flex overflow-hidden rounded-2xl border border-stone-300 bg-white shadow-sm">
      <input id="pc" type="text" placeholder="Postcode" class="min-w-0 flex-1 border-0 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-inset focus:ring-brand/30" />
      <button type="button" onclick="checkPostcode()" class="bg-stone-900 px-6 py-3 text-xs font-bold uppercase tracking-widest text-white transition hover:bg-brand">Search</button>
    </div>
    <div class="mt-6 flex h-44 flex-col items-center justify-center gap-3 rounded-2xl bg-stone-200/60 text-stone-600">
      <span>📍 Royal Nawab</span>
      <a href="#" class="inline-flex rounded-full border border-stone-400 px-5 py-2 text-xs font-semibold uppercase tracking-widest text-stone-800 hover:bg-white">Directions</a>
    </div>
  </section>
  </main>
  <script>
function checkPostcode() {
  var pc = document.getElementById('pc').value.trim();
  if (!pc) { alert('Please enter a postcode.'); return; }
  alert('We deliver to ' + pc.toUpperCase() + '. You can place an order.');
}
</script>
  <?php include 'inc/footer.php'; ?>
</body>
</html>