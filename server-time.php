<?php
$now = new DateTimeImmutable('now', new DateTimeZone('Asia/Jakarta'));
$tanggal = $now->format('d F Y');
$jam = $now->format('H:i:s');
$hari = $now->format('l');
$timezone = $now->getTimezone()->getName();
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Server Time - KursusKu</title>
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
    <span class="eyebrow">PERTEMUAN 2 · SERVER-SIDE PHP</span>
    <h1>Waktu Server</h1>
    <p>Halaman ini membuktikan bahwa <code>date()</code> dan <code>DateTimeImmutable()</code> diproses di <strong>server</strong>, bukan di browser.</p>

    <div class="result-grid">
      <p><b>Tanggal:</b><br><?= htmlspecialchars($tanggal) ?></p>
      <p><b>Jam:</b><br><?= htmlspecialchars($jam) ?></p>
      <p><b>Hari:</b><br><?= htmlspecialchars($hari) ?></p>
      <p><b>Timezone:</b><br><?= htmlspecialchars($timezone) ?></p>
    </div>

    <div class="formula-box">
      <strong>Cara Cek</strong>
      <ul>
        <li>Refresh halaman → jam berubah (diproses ulang oleh server).</li>
        <li>Klik kanan → <b>View Page Source</b> → kode PHP <code>&lt;?php</code> tidak muncul, hanya HTML hasil.</li>
        <li>Ini bukti bahwa PHP dijalankan di server, bukan di browser.</li>
      </ul>
    </div>

    <div class="button-row">
      <a class="button" href="index.php">Kembali ke Beranda</a>
    </div>
</main>
</body>
</html>