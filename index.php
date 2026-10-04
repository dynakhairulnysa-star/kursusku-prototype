<?php
require_once __DIR__ . '/helpers.php';

$courses = [
    ['code' => 'WEB-01', 'name' => 'Web Dasar', 'fee' => 200000, 'quota' => 30, 'registered' => 12, 'start_date' => '2026-09-21'],
    ['code' => 'PHP-01', 'name' => 'PHP Dasar', 'fee' => 250000, 'quota' => 30, 'registered' => 18, 'start_date' => '2026-09-22'],
    ['code' => 'PHP-02', 'name' => 'PHP Lanjutan', 'fee' => 300000, 'quota' => 25, 'registered' => 24, 'start_date' => '2026-09-24'],
    ['code' => 'LAR-01', 'name' => 'Laravel Fundamental', 'fee' => 350000, 'quota' => 25, 'registered' => 25, 'start_date' => '2026-09-28'],
    ['code' => 'DB-01', 'name' => 'MySQL Dasar', 'fee' => 275000, 'quota' => 20, 'registered' => 0, 'start_date' => '2026-10-01'],
    ['code' => 'UI-01', 'name' => 'UI Web Dasar', 'fee' => 225000, 'quota' => 35, 'registered' => 9, 'start_date' => '2026-10-03'],
];

$siteName = "KursusKu";
$tagline = "Belajar Teknologi, Bangun Masa Depan";
$tahun = date("Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteName; ?></title>
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
        <h1><?php echo $siteName; ?></h1>
        <p>Pemrograman Web III</p>
      </div>
    </div>
    <span class="milestone-badge">Milestone 6</span>
  </div>

  <div class="nav-bar">
    <div class="container">
      <nav class="nav-links" aria-label="Navigasi utama">
        <a href="index.php">Beranda</a>
        <a href="index.php#tentang">Keunggulan</a>
        <a href="index.php#kursus">Katalog</a>
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

<main>
  <section id="beranda" class="hero">
    <div class="container">
      <div class="hero-content">
        <div>
          <h2>Selamat Datang di <?php echo $siteName; ?></h2>
          <p>
            Platform belajar teknologi untuk
            mahasiswa yang ingin meningkatkan
            kemampuan pemrograman web.
          </p>
          <a href="#kursus" class="button">Lihat Kursus</a>
          <a href="fee-calculator.php" class="button">Lihat Estimasi Biaya</a>
        </div>
        <div>
        <img src="assets/images/Revisi-Hero-kursus.png" alt="Programmer di ruang server" class="hero-image">
        </div>
      </div>
    </div>
  </section>

  <section id="kursus" class="section">
    <div class="container">
      <h2>Katalog Kursus</h2>
      <table>
        <thead>
          <tr>
            <th>Kode</th><th>Nama</th><th>Biaya</th><th>Mulai</th><th>Sisa</th><th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($courses as $course): ?>
            <?php
            $status = statusKursus($course['quota'], $course['registered']);
            $statusClass = $status === 'Penuh' ? 'badge-full' : 'badge-available';
            ?>
            <tr>
              <td><?= htmlspecialchars($course['code']) ?></td>
              <td><?= htmlspecialchars(trim($course['name'])) ?></td>
              <td><?= rupiah($course['fee']) ?></td>
              <td><?= formatTanggal($course['start_date']) ?></td>
              <td><?= sisaKursi($course['quota'], $course['registered']) ?></td>
              <td><span class="<?= $statusClass ?>"><?= $status ?></span></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>

  <section id="tentang" class="section section-light">
    <div class="container">
      <h2>Tentang KursusKu</h2>
      <p>KursusKu merupakan prototype website pembelajaran yang dikembangkan dalam mata kuliah Pemrograman Web III.</p>
      <p>Pada semester ini mahasiswa akan belajar PHP, MySQL dan framework Laravel.</p>
      <a href="https://laravel.com" target="_blank" rel="noopener">Pelajari Laravel</a>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2>Video Pembelajaran</h2>
      <div class="video-placeholder">
        <iframe width="342" height="607" src="https://www.youtube.com/embed/nQinn48Bk2g" title="Video Laravel" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section id="kontak" class="section section-light">
  <div class="container">
    <h2>Kontak</h2>
    <p style="text-align:center; margin-bottom: 2rem;">
      Ada pertanyaan seputar kursus? Hubungi kami melalui:
    </p>

    <div class="contact-grid">
      <div class="contact-card">
        <div class="contact-icon">📧</div>
        <h3>Email</h3>
        <p>info@kursusku.id</p>
      </div>
      <div class="contact-card">
        <div class="contact-icon">📱</div>
        <h3>WhatsApp</h3>
        <p>0812-3456-7890</p>
      </div>
      <div class="contact-card">
        <div class="contact-icon">📍</div>
        <h3>Alamat</h3>
        <p>Kampus UIN, Gedung TI Lt. 3</p>
      </div>
      <div class="contact-card">
        <div class="contact-icon">🕐</div>
        <h3>Jam Layanan</h3>
        <p>Sen–Jum, 08.00–16.00</p>
      </div>
    </div>
  </div>
</section>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= $tahun ?> <?= $siteName ?>. Pemrograman Web III.</p>
  </div>
</footer>
</body>
</html>