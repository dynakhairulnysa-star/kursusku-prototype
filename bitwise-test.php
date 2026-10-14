<?php
$READ   = 1;   // 001
$WRITE  = 2;   // 010
$DELETE = 4;   // 100

$permission = $READ | $WRITE;   // 001 | 010 = 011 (3)

$canRead   = ($permission & $READ)   === $READ;
$canWrite  = ($permission & $WRITE)  === $WRITE;
$canDelete = ($permission & $DELETE) === $DELETE;
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bitwise Test - KursusKu</title>
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
    <span class="eyebrow">PERTEMUAN 4 · BITWISE OPERATOR</span>
    <h1>Bitwise Permission Test</h1>
    <p>Contoh penggunaan operator bitwise: <code>|</code> (OR) dan <code>&</code> (AND).</p>

    <div class="formula-box">
      <strong>Nilai flag:</strong>
      <ul>
        <li>READ = 1 (001)</li>
        <li>WRITE = 2 (010)</li>
        <li>DELETE = 4 (100)</li>
      </ul>
    </div>

    <div class="formula-box">
      <strong>$permission = $READ | $WRITE</strong>
      <code>001 | 010 = 011 (nilai = <?= $permission ?>)</code>
    </div>

    <div class="result-grid">
      <p><b>$canRead:</b><br><?= $canRead ? 'true' : 'false' ?></p>
      <p><b>$canWrite:</b><br><?= $canWrite ? 'true' : 'false' ?></p>
      <p><b>$canDelete:</b><br><?= $canDelete ? 'true' : 'false' ?></p>
    </div>

    <div class="button-row">
      <a class="button" href="index.php">Kembali ke Beranda</a>
    </div>
</main>
</body>
</html>