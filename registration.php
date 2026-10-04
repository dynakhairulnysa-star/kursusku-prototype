<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Kursus - KursusKu</title>
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

<main class="container">
  <section class="page-intro">
    <p class="eyebrow">Pendaftaran Kursus</p>
    <h1>Mulai belajar bersama KursusKu</h1>
    <p>Gunakan data latihan. Field bertanda wajib harus diisi.</p>
  </section>
  <section class="form-card">
    <form action="process-registration.php" method="POST" class="registration-form">
      <input type="hidden" name="source" value="week-06">
      <div class="form-grid">
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
          <input id="name" name="name" type="text" minlength="3" maxlength="100" autocomplete="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" maxlength="120" autocomplete="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Nomor HP</label>
          <input id="phone" name="phone" type="tel" maxlength="15" autocomplete="tel" placeholder="Contoh: 081234567890" required>
        </div>
        <div class="form-group">
          <label for="study_program">Program Studi</label>
          <input id="study_program" name="study_program" type="text" maxlength="100" required>
        </div>
      </div>

      <?php
      $courses = [
          'web-dasar'           => 'Web Dasar',
          'php-dasar'           => 'PHP Dasar',
          'laravel-fundamental' => 'Laravel Fundamental',
      ];
      ?>
      <div class="form-group">
        <label for="course">Kursus yang Dipilih</label>
        <select id="course" name="course" required>
          <option value="">-- Pilih kursus --</option>
          <?php foreach ($courses as $key => $label): ?>
            <option value="<?= $key ?>"><?= htmlspecialchars($label) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <fieldset class="form-group">
        <legend>Jenis Peserta</legend>
        <label class="choice"><input type="radio" name="participant_type" value="mahasiswa" required> Mahasiswa</label>
        <label class="choice"><input type="radio" name="participant_type" value="umum"> Umum</label>
        <label class="choice"><input type="radio" name="participant_type" value="guru"> Guru</label>
      </fieldset>

      <fieldset class="form-group">
        <legend>Minat Tambahan</legend>
        <label class="choice"><input type="checkbox" name="interests[]" value="ui-ux"> UI/UX</label>
        <label class="choice"><input type="checkbox" name="interests[]" value="database"> Database</label>
        <label class="choice"><input type="checkbox" name="interests[]" value="backend"> Backend</label>
        <label class="choice"><input type="checkbox" name="interests[]" value="frontend"> Frontend</label>
      </fieldset>

      <div class="form-grid">
        <div class="form-group">
          <label for="learning_method">Metode belajar</label>
          <select id="learning_method" name="learning_method" required>
            <option value="">-- Pilih metode --</option>
            <option value="tatap-muka">Tatap Muka</option>
            <option value="online">Online</option>
            <option value="hybrid">Hybrid</option>
          </select>
        </div>
        <div class="form-group">
          <label for="package_count">Jumlah paket</label>
          <select id="package_count" name="package_count" required>
            <option value="1">1 paket</option>
            <option value="2">2 paket</option>
            <option value="3">3 paket</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="note">Catatan</label>
        <textarea id="note" name="note" rows="5" maxlength="300" placeholder="Tuliskan kebutuhan belajar Anda (opsional)"></textarea>
        <small class="help">Maksimal 300 karakter.</small>
      </div>

      <div class="form-actions">
        <button class="btn-primary" type="submit" name="action" value="proses">Proses Pendaftaran</button>
        <button class="btn-primary" type="submit" name="action" value="history">History Dummy</button>
        <button class="btn-primary" type="submit" name="action" value="loop">Loop Lab</button>
      </div>
    </form>

    <div class="fasilitas-box">
      <h3>Fasilitas</h3>
      <ul>
        <li>Modul digital</li>
        <li>Sertifikat penyelesaian</li>
        <li>Forum diskusi kelas</li>
      </ul>
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