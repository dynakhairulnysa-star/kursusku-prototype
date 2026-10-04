<?php

require_once 'helpers.php';

function test($nama, $hasil)
{
    echo $hasil
        ? "PASS - $nama<br>"
        : "FAIL - $nama<br>";
}

echo "<h1>Test Functions</h1>";

/* Test 1: rupiah() */
test(
    "rupiah()",
    rupiah(150000) === "Rp 150.000"
);

/* Test 2: statusKursus() - Penuh */
test(
    "statusKursus() Penuh",
    statusKursus(20, 20) === "Penuh"
);

/* Test 3: statusKursus() - Tersedia */
test(
    "statusKursus() Tersedia",
    statusKursus(20, 15) === "Tersedia"
);

/* Test 4: sisaKursi() - masih tersedia */
test(
    "sisaKursi()",
    sisaKursi(20, 15) === 5
);

/* Test 5: sisaKursi() - sudah penuh */
test(
    "sisaKursi() ketika penuh",
    sisaKursi(20, 20) === 0
);

/* Test 6: formatTanggal() */
test(
    "formatTanggal()",
    formatTanggal("2026-09-22") === "22-09-2026"
);

?>
