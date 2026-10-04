# AI Usage Log - Pertemuan 6

| Masalah/Tujuan | Saran AI | Keputusan | Hasil uji |
|---|---|---|---|
| Validasi input kosong (nama, email, HP, prodi) | Gunakan `empty()` + `filter_var()` + `in_array()` untuk cek tiap field | Diterima | Muncul error "Nama wajib diisi", "Email tidak valid", dll saat field kosong |
| Minat kosong | Jangan divalidasi; tampilkan pesan "Belum memilih minat." di ringkasan | Diterima | Halaman tetap tampil, bagian Minat berisi "Belum memilih minat." |
| Dropdown kursus hardcode | Render dari array pakai `foreach` biar gampang tambah kursus | Diterima | Dropdown tetap 3 kursus, tinggal tambah 1 baris array kalau mau kursus baru |
| Diskon beda per tipe peserta | Pakai `match()` untuk tentukan persen diskon | Diterima | Mahasiswa 20%, Guru 15%, Umum 0% — sudah diuji |
| Ringkasan 2 kolom | Pakai `grid-template-columns: 1fr 1fr` di CSS | Diterima | Info Nama, Email, Kursus, dst tampil sejajar kiri-kanan |
| Highlight total biaya | Kasih background hijau muda di baris TOTAL AKHIR | Diterima | Baris total kontras dan mudah dibaca |
| Badge minat | Pakai `<span class="tag">` + CSS `border-radius: 999px` | Diterima | Minat tampil sebagai badge hijau kapital |
| History dummy | Loop array pakai `foreach` (bukan hardcode `<tr>`) | Diterima | 4 baris data tampil otomatis, tinggal ubah array untuk ubah data |
| Tampilan warna tidak konsisten | Override `.header`, `.navbar`, `.button` jadi hijau | Diterima | Semua halaman pakai warna hijau yang sama |