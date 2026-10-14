<?php
$nama = "Kursusin";
$tagline = "Temukan kursus terbaik untukmu.";
$tahun = date("Y");
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello - KursusKu</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
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

<main class="utility-card">
    <span class="eyebrow">PERTEMUAN 2 · HELLO WORLD</span>
    <h1>Selamat Datang di <?= htmlspecialchars($nama) ?></h1>
    <p><?= htmlspecialchars($tagline) ?></p>

    <div class="formula-box">
      <strong>Cek Halaman</strong>
      <ul>
        <li>Ini contoh halaman PHP paling dasar.</li>
        <li>Variabel <code>$nama</code>, <code>$tagline</code>, <code>$tahun</code> berasal dari PHP.</li>
        <li>Buka <b>View Page Source</b> (Ctrl+U) → tag <code>&lt;?php</code> tidak muncul.</li>
      </ul>
    </div>

    <div class="button-row">
      <a class="button" href="index.php">Kembali ke Beranda</a>
      <a class="button button-secondary" href="server-time.php">Lihat Waktu Server</a>
    </div>

    <p style="margin-top:1.5rem; font-size:.9rem; color:#94a3b8;">
      &copy; <?= $tahun ?> <?= htmlspecialchars($nama) ?>
    </p>
</main>
</body>
</html>