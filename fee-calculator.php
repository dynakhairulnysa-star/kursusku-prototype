<?php
$courseName = 'Laravel Fundamental';
$fee = 2500000;
$participantCount = 3;
$discountPercent = 10;
$adminFee = 50000;

$subtotal = $fee * $participantCount;
$discount = intdiv($subtotal * $discountPercent, 100);
$total = $subtotal - $discount + $adminFee;
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator Biaya - KursusKu</title>
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
    <p class="eyebrow">Kalkulator</p>
    <h1>Kalkulator Estimasi Biaya</h1>
    <p>Kursus: <strong><?= $courseName ?></strong></p>
  </section>

  <section class="summary-card">
    <table class="fee-table">
      <thead>
        <tr><th>Komponen</th><th>Nilai</th></tr>
      </thead>
      <tbody>
        <tr><td>Biaya per peserta</td><td>Rp <?= number_format($fee,0,',','.') ?></td></tr>
        <tr><td>Jumlah peserta</td><td><?= $participantCount ?></td></tr>
        <tr><td>Subtotal</td><td>Rp <?= number_format($subtotal,0,',','.') ?></td></tr>
        <tr><td>Diskon (<?= $discountPercent ?>%)</td><td>Rp <?= number_format($discount,0,',','.') ?></td></tr>
        <tr><td>Biaya admin</td><td>Rp <?= number_format($adminFee,0,',','.') ?></td></tr>
        <tr class="total"><td><strong>Total akhir</strong></td><td><strong>Rp <?= number_format($total,0,',','.') ?></strong></td></tr>
      </tbody>
    </table>
    <p style="margin-top:1rem">
      <a class="btn-link" href="index.php">Kembali ke Beranda</a>
    </p>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> KursusKu</p>
  </div>
</footer>
</body>
</html>