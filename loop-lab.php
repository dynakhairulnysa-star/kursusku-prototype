<?php
require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loop Lab - KursusKu</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <canvas id="tech-bg"></canvas>
  <div class="tech-overlay"></div>
  <div class="tech-binary">
    <span style="top:15%; left:5%;">010101101001</span>
    <span style="top:30%; left:12%;">SYSTEM // TI</span>
    <span style="top:60%; left:8%;">110010110110</span>
    <span style="top:75%; left:15%;">SYSTEM // TI</span>
    <span style="top:25%; right:8%;">SYSTEM // TI</span>
    <span style="top:55%; right:5%;">010101101001</span>
    <span style="top:85%; right:12%;">010101101001</span>
  </div>
  <div class="tech-panel">
    <div class="tech-panel-title">TI SYSTEM // ONLINE</div>
    <div class="tech-bar"><span style="width:85%"></span></div>
    <div class="tech-bar"><span style="width:62%"></span></div>
    <div class="tech-bar"><span style="width:93%"></span></div>
  </div>
  <script src="assets/js/tech-bg.js"></script>

<header class="site-header">
  <div class="container top-bar">
    <div class="brand-wrap">
      <div class="logo-badge">K</div>
      <div class="brand-text">
        <h1>KursusKu</h1>
        <p>Pemrograman Web III</p>
      </div>
    </div>
    <span class="milestone-badge">Milestone 6</span>
  </div>
  <div class="nav-bar">
    <div class="container">
      <nav class="nav-links" aria-label="Navigasi utama">
        <a href="index.php">Beranda</a>
        <a href="index.php#kursus">Katalog</a>
        <a href="index.php#tentang">Keunggulan</a>
        <a href="registration.php">Cara Daftar</a>
        <a href="index.php#media">Media</a>
        <a href="index.php#kontak">Kontak</a>
        <a href="test-matrix.php">Form P5</a>
        <a href="registration.php">Daftar P6</a>
        <a href="history.php">History</a>
      </nav>
      <a class="btn-estimasi" href="fee-calculator.php">Estimasi Biaya</a>
    </div>
  </div>
</header>

<main class="container">
  <section class="page-intro">
    <p class="eyebrow">Loop Lab</p>
    <h1>Latihan Perulangan PHP</h1>
    <p>Contoh <code>for</code>, <code>while</code>, <code>do-while</code>, dan <code>foreach</code>.</p>
  </section>

  <section class="summary-card">
    <h2>1. Loop <code>for</code> — Pertemuan 1-5</h2>
    <ul>
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <li>Pertemuan ke-<?= $i ?></li>
      <?php endfor; ?>
    </ul>
  </section>

  <section class="summary-card">
    <h2>2. Loop <code>while</code> — Nomor Antrean</h2>
    <ul>
      <?php
      $i = 1;
      while ($i <= 5):
      ?>
        <li>Nomor antrean: <?= $i ?></li>
      <?php
        $i++;
      endwhile;
      ?>
    </ul>
  </section>

  <section class="summary-card">
    <h2>3. Loop <code>do-while</code> — Percobaan</h2>
    <ul>
      <?php
      $i = 1;
      do {
      ?>
        <li>Percobaan ke-<?= $i ?></li>
      <?php
        $i++;
      } while ($i <= 5);
      ?>
    </ul>
  </section>

  <section class="summary-card">
    <h2>4. Loop <code>foreach</code> — Daftar Kursus</h2>
    <p>Data dari <code>data.php</code>:</p>
    <ul>
      <?php foreach ($courses as $course): ?>
        <li>
          <strong><?= e($course['name']) ?></strong> —
          <?= formatRupiah($course['fee']) ?>
          (<?= e($course['code']) ?>)
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="summary-card">
    <h2>Perbandingan Loop</h2>
    <table class="fee-table">
      <thead>
        <tr><th>Loop</th><th>Karakter</th><th>Gunakan ketika</th></tr>
      </thead>
      <tbody>
        <tr><td><code>for</code></td><td>Counter jelas</td><td>Jumlah iterasi diketahui</td></tr>
        <tr><td><code>while</code></td><td>Kondisi dulu</td><td>Iterasi bergantung kondisi</td></tr>
        <tr><td><code>do-while</code></td><td>Blok dulu</td><td>Minimal jalan sekali</td></tr>
        <tr><td><code>foreach</code></td><td>Setiap item array</td><td>Memproses daftar data</td></tr>
      </tbody>
    </table>
  </section>

  <div class="form-actions">
    <a class="btn-primary" href="register.php">Kembali ke Form</a>
    <a class="btn-link" href="index.php">Beranda</a>
  </div>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> KursusKu</p>
  </div>
</footer>
</body>
</html>