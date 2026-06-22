<?php
// index.php
require_once 'koneksi.php';
require_once 'KaryawanKontrak.php';
require_once 'KaryawanTetap.php';
require_once 'KaryawanMagang.php';

echo "<h1>DATA KARYAWAN - UAS PBO</h1><hr>";

// 1. TAMPILKAN KARYAWAN KONTRAK
echo "<h3>1. Kelompok Karyawan Kontrak</h3>";
$dataKontrak = KaryawanKontrak::getDaftarKontrak($koneksi);
foreach ($dataKontrak as $row) {
    $k = new KaryawanKontrak($row);
    echo "ID: " . $k->getIdKaryawan() . " | Nama: " . $k->getNamaKaryawan() . " | Dept: " . $k->getDepartemen() . "<br>";
    echo "Info Jalur -> " . $k->tampil_profil_karyawan() . "<br>";
    echo "Total Gaji Bersih: Rp " . number_format($k->hitung_gaji_bersih(), 0, ',', '.') . "<br><hr>";
}

// 2. TAMPILKAN KARYAWAN TETAP
echo "<h3>2. Kelompok Karyawan Tetap</h3>";
$dataTetap = KaryawanTetap::getDaftarTetap($koneksi);
foreach ($dataTetap as $row) {
    $k = new KaryawanTetap($row);
    echo "ID: " . $k->getIdKaryawan() . " | Nama: " . $k->getNamaKaryawan() . " | Dept: " . $k->getDepartemen() . "<br>";
    echo "Info Jalur -> " . $k->tampil_profil_karyawan() . "<br>";
    echo "Total Gaji Bersih: Rp " . number_format($k->hitung_gaji_bersih(), 0, ',', '.') . "<br><hr>";
}

// 3. TAMPILKAN KARYAWAN MAGANG
echo "<h3>3. Kelompok Karyawan Magang</h3>";
$dataMagang = KaryawanMagang::getDaftarMagang($koneksi);
foreach ($dataMagang as $row) {
    $k = new KaryawanMagang($row);
    echo "ID: " . $k->getIdKaryawan() . " | Nama: " . $k->getNamaKaryawan() . " | Dept: " . $k->getDepartemen() . "<br>";
    echo "Info Jalur -> " . $k->tampil_profil_karyawan() . "<br>";
    echo "Total Gaji Bersih: Rp " . number_format($k->hitung_gaji_bersih(), 0, ',', '.') . "<br><hr>";
}
?>