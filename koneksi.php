<?php
// koneksi.php - Koneksi Database dengan PDO untuk UAS PBO Farhan

$host     = "localhost";
$username = "root";
$password = "";
$database = "db_uas_pbo_ti1c_farhan fawzi rahmadan"; // Sesuai nama DB lu gess!

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    
    // Set error mode ke exception biar gampang nemu bug pas coding
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Default fetch mode diset ke associative array biar manggil field-nya praktis
    $koneksi->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    // Kalo koneksi jebol, langsung cut dan tampilin error-nya
    die("Koneksi database amsyong gess: " . $e->getMessage());
}
?>