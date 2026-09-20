<?php
function format_rupiah($angka){
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function calculate_fee($harga, $diskon){
    return $harga - ($harga * $diskon / 100);
}

function get_status_kursus($sisa){
    return $sisa <= 0 ? 'Penuh' : 'Tersedia';
}

function get_all_courses(){
    return [
        ['id'=>1, 'nama'=>'PHP Dasar', 'harga'=>500000, 'diskon'=>20, 'sisa'=>10],
        ['id'=>2, 'nama'=>'MySQL Lanjut', 'harga'=>600000, 'diskon'=>10, 'sisa'=>0],
        ['id'=>3, 'nama'=>'Laravel', 'harga'=>750000, 'diskon'=>15, 'sisa'=>5],
        ['id'=>4, 'nama'=>'JS ES6', 'harga'=>550000, 'diskon'=>25, 'sisa'=>2],
        ['id'=>5, 'nama'=>'React', 'harga'=>800000, 'diskon'=>20, 'sisa'=>0],
        ['id'=>6, 'nama'=>'UI/UX', 'harga'=>450000, 'diskon'=>30, 'sisa'=>8],
    ];
}

function server_time_wib(){
    date_default_timezone_set('Asia/Jakarta');
    return date('H:i:s');
}
?>