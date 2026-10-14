<?php
$rawName   = ' Laravel Fundamental ';
$cleanName = trim($rawName);
$upperName = strtoupper($cleanName);
$lowerName = strtolower($cleanName);
$length    = strlen($cleanName);
$short     = substr($cleanName, 0, 7);
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>String Test - KursusKu</title>
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
    <span class="eyebrow">PERTEMUAN 4 · STRING FUNCTION</span>
    <h1>String Function Test</h1>
    <p>Contoh penggunaan fungsi string di PHP: <code>trim()</code>, <code>strtoupper()</code>, <code>strtolower()</code>, <code>strlen()</code>, <code>substr()</code>.</p>

    <div class="formula-box">
      <strong>Input asli:</strong>
      <code>[<?= htmlspecialchars($rawName) ?>]</code>
    </div>

    <div class="result-grid">
      <p><b>trim():</b><br>[<?= htmlspecialchars($cleanName) ?>]</p>
      <p><b>strtoupper():</b><br><?= htmlspecialchars($upperName) ?></p>
      <p><b>strtolower():</b><br><?= htmlspecialchars($lowerName) ?></p>
      <p><b>strlen():</b><br><?= $length ?></p>
    </div>

    <div class="formula-box">
      <strong>substr(0, 7):</strong>
      <code><?= htmlspecialchars($short) ?></code>
    </div>

    <div class="button-row">
      <a class="button" href="index.php">Kembali ke Beranda</a>
    </div>
</main>
</body>
</html>