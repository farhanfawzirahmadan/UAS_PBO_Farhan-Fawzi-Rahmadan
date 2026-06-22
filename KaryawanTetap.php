<?php
// KaryawanTetap.php
require_once 'karyawan.php';

class KaryawanTetap extends karyawan {
    // Properti tambahan spesifik jalur Tetap
    private $tunjangan_kesehatan; 
    private $opsi_saham_id; 

    public function __construct($data) {
        parent::__construct(
            $data['id_karyawan'], 
            $data['nama_karyawan'], 
            $data['departemen'], 
            $data['hari_kerja_masuk'], 
            $data['gaji_dasar_per_hari']
        ); 
        $this->tunjangan_kesehatan = $data['tunjangan_kesehatan'];
        $this->opsi_saham_id = $data['opsi_saham_id'];
    }

    // Metode Query Spesifik Karyawan Tetap
    public static function getDaftarTetap($db) {
        $query = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'tetap'"; 
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Implementasi Metode Abstract hitung gaji bersih
    public function hitung_gaji_bersih() {
        return ($this->getHariKerjaMasuk() * $this->getGajiDasarPerHari()) + $this->tunjangan_kesehatan;
    }

    // Implementasi Metode Abstract tampil info spesifik
    public function tampil_profil_karyawan() {
        return "ID Opsi Saham: " . $this->opsi_saham_id . " (Tunjangan Kesehatan: Rp " . number_format($this->tunjangan_kesehatan, 0, ',', '.') . ")";
    }
}
?> 
