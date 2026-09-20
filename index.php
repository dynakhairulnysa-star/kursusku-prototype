<?php
require_once __DIR__ . '/helpers.php';

$courses = [
    ['code'=>'WEB-01','name'=>'HTML & CSS Dasar','fee'=>350000,'quota'=>30,'registered'=>12,'date'=>'2026-09-10'],
    ['code'=>'PHP-01','name'=>'PHP Dasar','fee'=>400000,'quota'=>25,'registered'=>10,'date'=>'2026-09-12'],
    ['code'=>'PHP-02','name'=>'PHP Lanjut & MySQL','fee'=>500000,'quota'=>20,'registered'=>5,'date'=>'2026-09-15'],
    ['code'=>'LAR-01','name'=>'Laravel Framework','fee'=>750000,'quota'=>25,'registered'=>25,'date'=>'2026-09-18'],
    ['code'=>'DB-01','name'=>'Database MySQL','fee'=>300000,'quota'=>20,'registered'=>0,'date'=>'2026-09-20'],
    ['code'=>'UI-01','name'=>'UI/UX Fundamental','fee'=>450000,'quota'=>30,'registered'=>18,'date'=>'2026-09-22'],
];
$serverTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KursusKu - Dynna Khairulnysa</title>
</head>
<body>
<header><h1>KursusKu</h1><p>Waktu server: <?= $serverTime ?> | by Dynna Khairulnysa</p></header>

<main>
<section>
<h2>Keunggulan</h2>
<article><h3>Mentor Berpengalaman</h3><p>Belajar dari praktisi.</p></article>
<article><h3>Materi Update</h3><p>Sesuai industri 2026.</p></article>
<article><h3>Sertifikat</h3><p>Dapat sertifikat resmi.</p></article>
</section>

<section>
<h2>Katalog Kursus (6 Kursus)</h2>
<?php foreach($courses as $c): ?>
<div style="border:1px solid #ccc; margin:10px; padding:10px;">
<h3><?= $c['code'] ?> - <?= $c['name'] ?></h3>
<p>Biaya: <?= rupiah($c['fee']) ?></p>
<p>Status: <b><?= statusKursus($c['quota'], $c['registered']) ?></b></p>
<p>Sisa Kursi: <?= sisaKursi($c['quota'], $c['registered']) ?> dari <?= $c['quota'] ?></p>
<p>Tanggal: <?= formatTanggal($c['date']) ?></p>
</div>
<?php endforeach; ?>
</section>

<section>
<h2>Alur Pendaftaran</h2>
<ol>
<li>Pilih kursus</li>
<li>Isi form</li>
<li>Bayar biaya</li>
<li>Konfirmasi</li>
</ol>
</section>

<section>
<h2>Media</h2>
<img src="assets/images/hero-kursus.jpg" alt="Hero Kursus" width="300">
<video width="300" controls><source src="assets/video/intro-kursus.mp4" type="video/mp4"></video>
</section>

<section>
<h2>Kontak</h2>
<p>Email: dynakhairulnysa@student.ac.id</p>
<p>GitHub: dynakhairulnysa-star</p>
<p>Lokasi: Padangpanjang, Sumatera Barat</p>
</section>
</main>

<footer><p>&copy; 2026 KursusKu - Dynna Khairulnysa (dynakhairulnysa-star)</p></footer>
</body>
</html>

