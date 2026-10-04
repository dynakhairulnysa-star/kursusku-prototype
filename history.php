<?php
$history = [
    ['nama' => 'Dinakin',   'kursus' => 'PHP Dasar',           'total' => 360000],
    ['nama' => 'Saraswati', 'kursus' => 'Web Dasar',           'total' => 9775000],
    ['nama' => 'Syerin',    'kursus' => 'Laravel Fundamental', 'total' => 575000],
    ['nama' => 'Saputra',   'kursus' => 'Laravel Fundamental', 'total' => 1725000],
];

function rupiah($n) {
    return 'Rp ' . number_format($n, 0, ',', '.');
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>History Pendaftaran - KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
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
    <p class="eyebrow">Milestone 6 · Foreach</p>
    <h1>History Pendaftaran Dummy</h1>
    <p>Data ini adalah latihan <strong>array + looping</strong>, bukan database dan bukan CRUD.</p>
  </section>

  <section class="summary-card">
    <table class="fee-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Kursus</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($history as $i => $row): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['kursus']) ?></td>
            <td><?= rupiah($row['total']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="form-actions" style="margin-top:1.25rem">
      <a class="btn-primary" href="registration.php">Daftar Kursus</a>
      <a class="btn-link" href="index.php">Beranda</a>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> KursusKu</p>
  </div>
</footer>
</body>
</html>