<?php
include 'config.php';
$result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Boneka Imuet 🎀</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800">

  <!-- Header -->
  <header class="bg-pink-300 text-white py-10 shadow-md text-center">
    <h1 class="text-4xl font-bold mb-2">Toko Boneka</h1>
    <p class="text-lg">Boneka lucu & lembut untuk menemani harimu</p>
    <div class="mt-4">
      <a href="dashboard.php" class="bg-white text-pink-500 px-4 py-2 rounded-full font-semibold hover:bg-pink-100">Admin Dashboard</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-10 px-4">
    <h2 class="text-2xl md:text-3xl font-bold text-pink-600 mb-2">Temukan Boneka Favoritmu!</h2>
    <p class="text-gray-600 max-w-xl mx-auto mb-6">Koleksi boneka imut dan lembut cocok untuk hadiah atau teman tidur. Semua boneka dibuat dengan cinta 💖</p>
    <img src="img/hero-boneka.jpg" alt="Boneka Lucu" class="mx-auto rounded-3xl shadow-md w-full max-w-3xl">
  </section>

  <!-- Daftar Produk -->
  <section class="p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
      <img src="img/<?php echo $row['gambar']; ?>" class="w-full h-56 object-cover" alt="<?php echo $row['nama']; ?>">
      <div class="p-4">
        <h2 class="text-lg font-semibold text-pink-600"><?php echo $row['nama']; ?></h2>
        <p class="text-gray-600 font-bold mb-3">Rp<?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
        <button class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600">Tambah ke Keranjang 🛒</button>
      </div>
    </div>
    <?php } ?>
  </section>

  <!-- Tentang Kami -->
  <section class="bg-white py-12 mt-10 text-center shadow-inner">
    <h2 class="text-3xl font-bold text-pink-600 mb-4">Tentang Toko Boneka Imuet 🎀</h2>
    <p class="max-w-2xl mx-auto text-gray-600">
      Toko Boneka Imuet hadir untuk kamu yang suka dengan hal-hal lembut, lucu, dan manis.
      Semua boneka kami dibuat dari bahan berkualitas tinggi agar aman dan nyaman untuk semua usia.
      💗 Temukan boneka favoritmu dan buat hari-harimu lebih berwarna!
    </p>
  </section>

  <!-- Footer -->
  <footer class="bg-pink-200 text-center py-6 mt-10 text-sm text-gray-700">
    © 2025 Toko Boneka | Dibuat dengan 💕 oleh Admin
  </footer>

</body>
</html>
