<?php
// Karyawan.php - Abstract Class Karyawan Terenkapsulasi untuk UAS PBO Farhan

abstract class Karyawan {
    // Atribut Terenkapsulasi (Menggunakan private agar aman dan terisolasi)
    private $id_karyawan;
    private $nama_karyawan;
    private $departemen;
    private $hari_kerja_masuk;
    private $gaji_dasar_per_hari;

    // Constructor untuk inisialisasi data pas objek dibuat
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hari_kerja_masuk, $gaji_dasar_per_hari) {
        $this->id_karyawan          = $id_karyawan;
        $this->nama_karyawan        = $nama_karyawan;
        $this->departemen           = $departemen;
        $this->hari_kerja_masuk     = $hari_kerja_masuk;
        $this->gaji_dasar_per_hari  = $gaji_dasar_per_hari;
    }

    // ================= GETTER & SETTER (Pintu Akses Enkapsulasi) =================
    
    public function getIdKaryawan() {
        return $this->id_karyawan;
    }

    public function setIdKaryawan($id_karyawan) {
        $this->id_karyawan = $id_karyawan;
    }

    public function getNamaKaryawan() {
        return $this->nama_karyawan;
    }

    public function setNamaKaryawan($nama_karyawan) {
        $this->nama_karyawan = $nama_karyawan;
    }

    public function getDepartemen() {
        return $this->departemen;
    }

    public function setDepartemen($departemen) {
        $this->departemen = $departemen;
    }

    public function getHariKerjaMasuk() {
        return $this->hari_kerja_masuk;
    }

    public function setHariKerjaMasuk($hari_kerja_masuk) {
        $this->hari_kerja_masuk = $hari_kerja_masuk;
    }

    public function getGajiDasarPerHari() {
        return $this->gaji_dasar_per_hari;
    }

    public function setGajiDasarPerHari($gaji_dasar_per_hari) {
        $this->gaji_dasar_per_hari = $gaji_dasar_per_hari;
    }

    // ================= METODE ABSTRACT =================
    
    /**
     * Wajib di-override di class anak (KaryawanTetap, KaryawanKontrak, KaryawanMagang)
     * buat ngitung gaji bersih sesuai rumus jenis karyawannya masing-masing.
     */
    abstract public function hitung_gaji_bersih();

    /**
     * Wajib di-override di class anak untuk nampilin profil 
     * dan atribut spesifik dari masing-masing jenis karyawan.
     */
    abstract public function tampil_profil_karyawan();
}
?>