<?php
// KaryawanMagang.php
require_once 'karyawan.php';

class KaryawanMagang extends Karyawan {
    // Properti tambahan spesifik jalur Magang
    private $uang_saku_bulanan; 
    private $sertifikat_kampus_merdeka; 

    public function __construct($data) {
        parent::__construct(
            $data['id_karyawan'], 
            $data['nama_karyawan'], 
            $data['departemen'], 
            $data['hari_kerja_masuk'], 
            $data['gaji_dasar_per_hari']
        ); 
        $this->uang_saku_bulanan = $data['uang_saku_bulanan'];
        $this->sertifikat_kampus_merdeka = $data['sertifikat_kampus_merdeka'];
    }

    // Metode Query Spesifik Karyawan Magang
    public static function getDaftarMagang($db) {
        $query = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'magang'"; 
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Implementasi Metode Abstract hitung gaji bersih (Magang langsung dari uang saku)
    public function hitung_gaji_clean() {
        return $this->uang_saku_bulanan * 0.80;
    }

    // Implementasi Metode Abstract tampil info spesifik
    public function tampil_profil_karyawan() {
        return "Sertifikat: " . $this->sertifikat_kampus_merdeka . " (Uang Saku Bulanan: Rp " . number_format($this->uang_saku_bulanan, 0, ',', '.') . ")";
    }
}
?> 
