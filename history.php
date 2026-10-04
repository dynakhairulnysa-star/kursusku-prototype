<?php
$history = [
    ['nama' => 'Dewi Lestari',    'kursus' => 'PHP Dasar',           'total' => 385000],
    ['nama' => 'Eko Prasetyo',    'kursus' => 'Laravel Fundamental', 'total' => 625000],
    ['nama' => 'Fitri Handayani', 'kursus' => 'Web Dasar',           'total' => 495000],
    ['nama' => 'Gilang Ramadhan', 'kursus' => 'PHP Dasar',           'total' => 540000],
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
  <div class="container nav-wrap">
    <a class="brand" href="index.php">KursusKu</a>
    <nav aria-label="Navigasi utama">
      <a href="index.php">Beranda</a>
      <a href="index.php#katalog">Katalog</a>
      <a href="registration.php">Daftar</a>
    </nav>
  </div>
</header>
<main class="container">
  <section class="page-intro">
    <p class="eyebrow">Milestone 6 · Foreach</p>
    <h1>History Pendaftaran Dummy</h1>
    <p>Data ini adalah latihan <strong>array + looping</strong>, bukan database dan bukan CRUD.</p>
  </section>

  <section class="summary-card">
    <table>
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