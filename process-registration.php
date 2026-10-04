<?php
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');
$course = $_POST['course'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];
$note = trim($_POST['note'] ?? '');
$source = $_POST['source'] ?? '';
$interestText = implode(', ', $interests);

$learningMethod = $_POST['learning_method'] ?? '';
$packageCount   = (int) ($_POST['package_count'] ?? 1);

$courseMap = [
    'web-dasar'           => ['label' => 'Web Dasar',           'fee' => 350000],
    'php-dasar'           => ['label' => 'PHP Dasar',           'fee' => 450000],
    'laravel-fundamental' => ['label' => 'Laravel Fundamental', 'fee' => 575000],
];
$participantMap = ['mahasiswa' => 'Mahasiswa', 'guru' => 'Guru', 'umum' => 'Umum'];
$methodMap      = ['tatap-muka' => 'Tatap Muka', 'online' => 'Online', 'hybrid' => 'Hybrid'];
$interestMap    = ['frontend' => 'Frontend', 'backend' => 'Backend', 'database' => 'Database', 'ui-ux' => 'UI/UX'];

$courseLabel = $courseMap[$course]['label'] ?? '-';
$fee         = $courseMap[$course]['fee']   ?? 0;

$discountPercent = match ($participantType) {
    'mahasiswa' => 20,
    'guru'      => 15,
    default     => 0,
};
$subtotal = $fee * max(1, $packageCount);
$discount = (int) round($subtotal * $discountPercent / 100);
$total    = $subtotal - $discount;

$errors = [];
if ($name === '')                              $errors[] = 'Nama wajib diisi.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid.';
if ($phone === '')                             $errors[] = 'Nomor HP wajib diisi.';
if ($studyProgram === '')                      $errors[] = 'Program studi wajib diisi.';
if (!array_key_exists($course, $courseMap))    $errors[] = 'Pilih kursus.';
if (!in_array($participantType, ['mahasiswa','guru','umum'], true)) $errors[] = 'Pilih tipe peserta.';
if (!in_array($learningMethod, ['tatap-muka','online','hybrid'], true)) $errors[] = 'Pilih metode belajar.';

function e($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
function rupiah($n) {
    return 'Rp ' . number_format($n, 0, ',', '.');
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Pendaftaran - KursusKu</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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

<main class="container result-page">
<?php if ($errors): ?>
  <section class="alert-error">
    <h1>Pendaftaran Gagal Diproses</h1>
    <p>Periksa kembali data berikut:</p>
    <ul>
      <?php foreach ($errors as $err): ?>
        <li><?= e($err) ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="btn-link" href="registration.php">Kembali ke Form</a>
  </section>
<?php else: ?>
  <p class="eyebrow">Milestone 6 · Ringkasan</p>
  <h1>Pendaftaran Berhasil Diproses</h1>

  <div class="result-wrapper">
    <section class="summary-card">
      <div class="info-grid">
        <div class="info-item">
          <span class="info-label">Nama:</span>
          <span class="info-value"><?= e($name) ?></span>
        </div>
        <div class="info-item">
          <span class="info-label">Email:</span>
          <span class="info-value"><?= e($email) ?></span>
        </div>
        <div class="info-item">
          <span class="info-label">Kursus:</span>
          <span class="info-value"><?= e($courseLabel) ?></span>
        </div>
        <div class="info-item">
          <span class="info-label">Tipe peserta:</span>
          <span class="info-value"><?= e($participantMap[$participantType] ?? $participantType) ?></span>
        </div>
        <div class="info-item">
          <span class="info-label">Metode:</span>
          <span class="info-value"><?= e($methodMap[$learningMethod] ?? $learningMethod) ?></span>
        </div>
        <div class="info-item">
          <span class="info-label">Jumlah paket:</span>
          <span class="info-value"><?= e($packageCount) ?></span>
        </div>
      </div>
    </section>

    <section class="summary-card">
      <h2>Rincian Biaya</h2>
      <dl class="summary-list">
        <dt>Biaya satuan</dt><dd><?= rupiah($fee) ?></dd>
        <dt>Subtotal</dt><dd><?= rupiah($subtotal) ?></dd>
        <dt>Diskon <?= e($discountPercent) ?>%</dt><dd>-<?= rupiah($discount) ?></dd>
        <dt><strong>TOTAL AKHIR</strong></dt><dd><strong><?= rupiah($total) ?></strong></dd>
      </dl>
    </section>

    <section class="summary-card">
      <h2>Minat</h2>
      <p>
        <?php if (empty($interests)): ?>
          <span style="background:rgba(20,184,166,.15); padding:.75rem 1rem; display:block; border-radius:8px; color:#cbd5e1;">
            Belum memilih minat.
          </span>
        <?php else: ?>
          <?php foreach ($interests as $i): ?>
            <span class="tag"><?= e($interestMap[$i] ?? $i) ?></span>
          <?php endforeach; ?>
        <?php endif; ?>
      </p>
    </section>

    <section class="summary-card">
      <h2>Fasilitas</h2>
      <ul>
        <li>Modul digital</li>
        <li>Sertifikat penyelesaian</li>
        <li>Forum diskusi kelas</li>
      </ul>
    </section>

    <section class="summary-card">
      <h2>Catatan</h2>
      <p><?= e($note !== '' ? $note : 'Tidak ada catatan tambahan.') ?></p>
    </section>
  </div>

  <div class="form-actions">
    <a class="btn-primary" href="registration.php">Daftar Lagi</a>
    <a class="btn-link" href="history.php">Lihat History Dummy</a>
    <a class="btn-link" href="index.php">Beranda</a>
  </div>
<?php endif; ?>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> KursusKu</p>
  </div>
</footer>
</body>
</html>