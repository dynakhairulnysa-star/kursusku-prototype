<?php
$fee = 350000;
$participants = 2;
$subtotal = $fee * $participants;

$comparisonPositive = $fee > 0;
$comparisonStrict   = $fee === 350000;
$message = 'Biaya: Rp ' . $fee;
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operator Test - KursusKu</title>
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
    <span class="eyebrow">PERTEMUAN 4 · OPERATOR PHP</span>
    <h1>Operator PHP</h1>
    <p>Contoh operator aritmatika, perbandingan, dan concatenation di PHP.</p>

    <div class="formula-box">
      <strong>Input:</strong>
      <ul>
        <li>$fee = <?= $fee ?></li>
        <li>$participants = <?= $participants ?></li>
      </ul>
    </div>

    <div class="result-grid">
      <p><b>Perkalian:</b><br>$fee × $participants = <strong><?= $subtotal ?></strong></p>
      <p><b>Comparison &gt; 0:</b><br>($fee &gt; 0) → <strong><?= $comparisonPositive ? 'true' : 'false' ?></strong></p>
      <p><b>Strict ===:</b><br>($fee === 350000) → <strong><?= $comparisonStrict ? 'true' : 'false' ?></strong></p>
      <p><b>Concatenation:</b><br><?= htmlspecialchars($message) ?></p>
    </div>

    <div class="button-row">
      <a class="button" href="index.php">Kembali ke Beranda</a>
      <a class="button button-secondary" href="fee-calculator.php">Kalkulator Biaya</a>
    </div>
</main>
</body>
</html>