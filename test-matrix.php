<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Matrix - KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="index.php">KursusKu</a>
    <nav>
      <a href="index.php">Beranda</a>
      <a href="registration.php">Daftar</a>
    </nav>
  </div>
</header>
<main class="container">
  <section class="page-intro">
    <p class="eyebrow">Evidence Week 06</p>
    <h1>Test Matrix Pertemuan 6</h1>
  </section>
  <section class="summary-card">
    <table>
      <thead>
        <tr><th>No</th><th>Skenario</th><th>Actual</th><th>Expected</th><th>Status</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Mahasiswa, Web Dasar, 1 paket</td><td>Rp 280.000</td><td>Rp 280.000</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>2</td><td>Guru, PHP Dasar, 1 paket</td><td>Rp 382.500</td><td>Rp 382.500</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>3</td><td>Umum, Laravel, 1 paket</td><td>Rp 575.000</td><td>Rp 575.000</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>4</td><td>Mahasiswa, Web Dasar, 2 paket</td><td>Rp 560.000</td><td>Rp 560.000</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>5</td><td>Nama kosong</td><td>Nama wajib diisi.</td><td>Nama wajib diisi.</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>6</td><td>Email tidak valid</td><td>Email tidak valid.</td><td>Email tidak valid.</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>7</td><td>Minat kosong</td><td>Pilih minimal satu minat.</td><td>Pilih minimal satu minat.</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>8</td><td>3 minat dipilih</td><td>Frontend, Backend, Database</td><td>Frontend, Backend, Database</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>9</td><td>Metode hybrid</td><td>Hybrid</td><td>Hybrid</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>10</td><td>Metode online</td><td>Online</td><td>Online</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>11</td><td>Akses langsung process-registration.php</td><td>Redirect ke form dengan error</td><td>Validasi tampil</td><td><span class="badge-available">PASS</span></td></tr>
        <tr><td>12</td><td>Fasilitas &amp; Rincian Biaya</td><td>Dirender otomatis dari array</td><td>Dirender otomatis</td><td><span class="badge-available">PASS</span></td></tr>
      </tbody>
    </table>
  </section>
</main>
</body>
</html>