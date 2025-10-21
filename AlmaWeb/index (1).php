<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Kipas Angin Portable Imuet</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="font-sans bg-gray-50 text-gray-800">
    <!-- Hero -->
    <section
      class="bg-gradient-to-r from-pink-500 to-rose-600 text-white text-center py-20"
    >
      <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Toko Kipas Angin Portable Imuet
      </h1>
      <p class="mb-6 text-lg md:text-xl">
        Rasakan kesejukan di mana saja dengan kipas portable lucu & berkualitas ✨
      </p>
      <a
        href="#produk"
        class="bg-white text-pink-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-100"
      >
        Lihat Koleksi
      </a>
    </section>

    <!-- Tentang -->
    <section class="py-16 px-6 max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Tentang Kami</h2>
      <p class="text-gray-700 leading-relaxed">
        Kami menyediakan berbagai jenis kipas angin portable dengan desain imut,
        praktis, dan efisien. Cocok untuk menemani aktivitas Anda di rumah,
        kampus, kantor, hingga saat bepergian. Produk kami tersedia dalam
        berbagai warna dan bentuk yang menggemaskan, tapi tetap powerful dalam
        meniupkan angin sejuk!
      </p>
    </section>

    <!-- Produk -->
    <section id="produk" class="py-16 px-6 bg-gray-100">
      <h2 class="text-3xl font-bold text-center">Koleksi Kipas Angin Portable</h2>
      <div class="flex items-center justify-center py-6">
        <a
          href="dashboard.php"
          class="bg-pink-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-pink-700"
        >
          Pergi ke Dashboard
        </a>
      </div>

      <?php
      include 'db.php';
      $sql = "SELECT * FROM produk ORDER BY created_at DESC";
      $result = $conn->query($sql);
      ?>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
        <div
          class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-105 transition"
        >
          <img
            src="gambar/<?= htmlspecialchars($row['gambar']) ?>"
            alt="<?= htmlspecialchars($row['nama']) ?>"
            class="w-full h-60 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold text-lg"><?= htmlspecialchars($row['nama']) ?></h3>
            <p class="text-gray-600">Rp.<?= htmlspecialchars($row['harga']) ?></p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <p class="text-center text-gray-500">Belum ada data produk!</p>
        <?php endif; ?>
      </div>

      <?php $conn->close(); ?>
    </section>

    <!-- Testimoni -->
    <section class="py-16 px-6 max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Apa Kata Pembeli</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow-md rounded-xl p-6">
          <p class="italic">
            "Kipasnya lucu banget! Anginnya kencang, bisa dibawa ke mana-mana 🩷"
          </p>
          <h4 class="mt-4 font-semibold">– Nisa, Bandung</h4>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
          <p class="italic">
            "Desainnya imut tapi fungsinya maksimal. Wajib punya pokoknya!"
          </p>
          <h4 class="mt-4 font-semibold">– Daffa, Jakarta</h4>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
          <p class="italic">
            "Baterainya awet dan mudah di-charge. Cocok banget buat dibawa kuliah 😍"
          </p>
          <h4 class="mt-4 font-semibold">– Laila, Yogyakarta</h4>
        </div>
      </div>
    </section>

    <!-- Kontak -->
    <section class="py-16 px-6 bg-gray-100" id="kontak">
      <h2 class="text-3xl font-bold text-center mb-10">Hubungi Kami</h2>
      <div class="max-w-lg mx-auto bg-white shadow-md rounded-xl p-8">
        <form class="space-y-6">
          <div>
            <label class="block mb-2 font-semibold">Nama</label>
            <input
              type="text"
              class="w-full border p-3 rounded-lg"
              placeholder="Masukkan nama"
            />
          </div>
          <div>
            <label class="block mb-2 font-semibold">Email</label>
            <input
              type="email"
              class="w-full border p-3 rounded-lg"
              placeholder="Masukkan email"
            />
          </div>
          <div>
            <label class="block mb-2 font-semibold">Pesan</label>
            <textarea
              class="w-full border p-3 rounded-lg"
              rows="3"
              placeholder="Tulis pesan Anda..."
            ></textarea>
          </div>
          <button
            class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700"
          >
            Kirim Pesan
          </button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-rose-600 text-white text-center py-6">
      <p>&copy; 2025 Toko Kipas Angin Imuet. All rights reserved.</p>
      <p>📞 0821-1796-3167 | ✉ kipasimuet@gmail.com</p>
    </footer>
  </body>
</html>
