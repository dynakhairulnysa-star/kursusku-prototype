<?php

declare(strict_types=1);

$name = trim($_GET['name'] ?? '');
$course = trim($_GET['course'] ?? '');
$participantType = trim($_GET['participant_type'] ?? '');
$query = $_SERVER['QUERY_STRING'] ?? '';
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eksperimen GET - KursusKu</title>
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
    <span class="eyebrow">MILESTONE 5 · GET VS POST</span>
    <h1>Eksperimen GET</h1>
    <p>Berbeda dengan POST, parameter GET tampak pada query string URL.</p>

    <?php if ($query !== ''): ?>
        <div class="formula-box">
            <strong>Query string yang diterima:</strong>
            <code>?<?= htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?></code>
            <span>Nama: <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></span>
            <span>Kursus: <?= htmlspecialchars($course, ENT_QUOTES, 'UTF-8') ?></span>
            <span>Peserta: <?= htmlspecialchars($participantType, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
    <?php endif; ?>

    <form method="GET" action="get-demo.php" class="stack-form">
        <div class="field">
            <label for="get-name">Nama</label>
            <input id="get-name" name="name" type="text" required value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div class="field">
            <label for="get-course">Kursus</label>
            <select id="get-course" name="course" required>
                <option value="PHP Dasar">PHP Dasar</option>
                <option value="Web Dasar">Web Dasar</option>
                <option value="Laravel Dasar">Laravel Dasar</option>
            </select>
        </div>
        <fieldset class="field">
            <legend>Peserta</legend>
            <div class="choice-row">
                <label><input type="radio" name="participant_type" value="mahasiswa" checked> Mahasiswa</label>
                <label><input type="radio" name="participant_type" value="umum"> Umum</label>
            </div>
        </fieldset>
        <div class="button-row">
            <button class="button" type="submit">Kirim dengan GET</button>
        </div>
    </form>

    <p class="help" style="margin-top:1.25rem;">Setelah eksperimen, form utama tetap memakai POST di <code>registration.php</code>.</p>

    <div class="button-row">
        <a class="button button-secondary" href="registration.php">Kembali ke Form POST →</a>
    </div>
</main>
</body>
</html>