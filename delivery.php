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
  </main>
  <?php include 'inc/footer.php'; ?>
</body>
</html>