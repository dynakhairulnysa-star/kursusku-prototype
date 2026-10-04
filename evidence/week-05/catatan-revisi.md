# Catatan Revisi - Tugas 5

## Catatan Dosen (asli)
> "rapihkan kembali tampilan css nya setiap halaman web agar terlihat lebih konsisten"

## Tanggal Revisi
4 Oktober 2026

## Yang Diperbaiki

### 1. Warna Seragam (Hijau-Tech)
Sebelumnya warna tiap halaman berbeda-beda. Sekarang semua pakai hijau-teal:
- Header: #115e59
- Tombol: gradient #0f766e → #14b8a6
- Footer: #115e59
- Border: rgba(20, 184, 166, 0.25)

### 2. Header Seragam (2 Baris)
Semua halaman pakai header 2 baris:
- Baris atas: Logo K + KursusKu + Pemrograman Web III + badge Milestone 6
- Baris bawah: Navbar (Beranda, Katalog, Keunggulan, dll) + tombol Estimasi Biaya

### 3. Background Animasi Konsisten
Semua halaman pakai background network animasi (Canvas HTML5) + grid pattern + binary code floating.

### 4. Font Seragam
Semua halaman pakai font "Plus Jakarta Sans" dari Google Fonts.

### 5. Tabel Konsisten
- Header tabel: rata tengah
- Isi tabel: rata kiri (kolom angka → kanan)
- Fee-table: header tengah, kolom 1 kiri, kolom terakhir kanan

### 6. Tombol Konsisten
- Tombol utama: gradient hijau + glow
- Tombol sekunder: outline hijau transparan
- Hover: naik 2px + glow

## Halaman yang Diperbaiki
1. index.php
2. registration.php
3. process-registration.php
4. history.php
5. fee-calculator.php
6. test-matrix.php

## File CSS
Semua konsistensi diatur di `assets/css/style.css`. Perubahan cukup di satu file.

## Screenshot Revisi
- 08-revisi-index.png
- 09-revisi-registration.png
- 10-revisi-process.png
- 11-revisi-history.png
- 12-revisi-fee.png
- 13-revisi-testmatrix.png

## Kesimpulan
Semua 6 halaman sekarang punya header, warna, font, background, dan tombol yang sama.
CSS diatur di satu file sehingga mudah di-maintain.