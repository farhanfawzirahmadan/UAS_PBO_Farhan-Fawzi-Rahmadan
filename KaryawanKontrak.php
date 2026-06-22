<?php
// KaryawanKontrak.php
require_once 'karyawan.php';

class KaryawanKontrak extends Karyawan {
    // Properti tambahan spesifik jalur Kontrak
    private $durasi_kontrak_bulan;
    private $agensi_penyalur; 

    public function __construct($data) {
        parent::__construct(
            $data['id_karyawan'], 
            $data['nama_karyawan'], 
            $data['departemen'], 
            $data['hari_kerja_masuk'], 
            $data['gaji_dasar_per_hari']
        ); 
        $this->durasi_kontrak_bulan = $data['durasi_kontrak_bulan'];
        $this->agensi_penyalur = $data['agensi_penyalur'];
    }

    // Metode Query Spesifik Karyawan Kontrak
    public static function getDaftarKontrak($db) {
        $query = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'kontrak'"; 
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Implementasi Metode Abstract hitung gaji bersih
    public function hitung_gaji_clean() {
        return $this->getHariKerjaMasuk() * $this->getGajiDasarPerHari();
    }

    // Implementasi Metode Abstract tampil info spesifik
    public function tampil_profil_karyawan() {
        return "Agensi: " . $this->agensi_penyalur . " (Durasi Kontrak: " . $this->durasi_kontrak_bulan . " Bulan)";
    }
}
?> 
