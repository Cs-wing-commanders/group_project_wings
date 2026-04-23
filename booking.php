<main>
  <section class="bg-gradient-to-br from-stone-900 via-red-950 to-red-900 px-4 py-16 text-center text-white sm:py-20">
    <h1 class="font-display text-4xl font-semibold sm:text-5xl">Reservations</h1>
    <p class="mx-auto mt-3 max-w-lg text-red-100/90">Book your table at Royal Nawab.</p>
  </section>

  <?php if (isset($_GET['status'])): ?>
  <div class="mx-auto max-w-2xl px-4 pt-8">
    <?php if ($_GET['status'] === 'success'): ?>
    <p class="rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">✅ Table reserved — we’ll confirm shortly.</p>
    <?php else: ?>
    <p class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-900">❌ <?php echo htmlspecialchars($_GET['msg'] ?? 'Something went wrong.'); ?></p>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <section class="mx-auto max-w-xl px-4 py-14 lg:px-8">
    <h2 class="text-center font-display text-2xl font-semibold text-stone-900">Reserve a table</h2>
    <div class="mx-auto mt-3 h-px w-16 bg-brand/50"></div>
    <form action="submit_booking.php" method="POST" class="mt-10 space-y-5">
      <div class="grid gap-5 sm:grid-cols-2">
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">First name *</label>
          <input type="text" name="first_name" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" placeholder="First name" />
        </div>
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Last name *</label>
          <input type="text" name="last_name" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" placeholder="Last name" />
        </div>
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Email *</label>
          <input type="email" name="email" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" placeholder="you@email.com" />
        </div>
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Phone *</label>
          <input type="tel" name="phone" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" placeholder="Phone" />
        </div>
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Guests</label>
          <select name="num_guests" class="w-full rounded-xl border border-stone-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20">
            <option>1</option><option>2</option><option>3</option><option>4</option>
            <option selected>5</option><option>6</option><option>7</option><option>8+</option>
          </select>
        </div>
        <div>
          <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Date *</label>
          <input type="date" name="booking_date" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" />
        </div>
      </div>
      <div>
        <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Time</label>
        <select name="booking_time" class="w-full rounded-xl border border-stone-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20">
          <option>10:00 AM</option><option>11:00 AM</option><option>12:00 PM</option>
          <option>1:00 PM</option><option>2:00 PM</option><option>5:00 PM</option>
          <option>6:00 PM</option><option>7:00 PM</option><option>8:00 PM</option>
          <option>9:00 PM</option><option>10:00 PM</option><option>11:00 PM</option>
        </select>
      </div>
      <div>
        <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-stone-600">Special requests</label>
        <textarea name="special_requests" rows="3" class="w-full resize-y rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" placeholder="Dietary needs, occasion, seating…"></textarea>
      </div>
      <button type="submit" class="w-full rounded-full bg-stone-900 py-4 text-xs font-bold uppercase tracking-widest text-white transition hover:bg-brand">Reserve now</button>
    </form>
  </section>

  <section class="mx-auto max-w-4xl px-4 pb-20 lg:px-8">
    <div class="grid gap-6 sm:grid-cols-2">
      <div class="rounded-2xl border border-stone-200 bg-white p-6 shadow-sm">
        <h4 class="font-display text-sm font-semibold uppercase tracking-widest text-stone-900">Opening hours</h4>
        <p class="mt-3 text-sm text-stone-600">Mon–Sat: 10:00 am – 12:00 am<br/>Sun: 2:00 pm – 10:00 pm</p>
      </div>
      <div class="rounded-2xl border border-stone-200 bg-white p-6 shadow-sm">
        <h4 class="font-display text-sm font-semibold uppercase tracking-widest text-stone-900">Tips</h4>
        <ul class="mt-3 list-disc space-y-1 pl-5 text-sm text-stone-600">
          <li>Book ahead for weekends</li>
          <li>Large groups — call in advance</li>
          <li>Please arrive on time</li>
        </ul>
      </div>
    </div>
  </section>
</main>

<?php include 'inc/footer.php'; ?>
</body>
</html>
