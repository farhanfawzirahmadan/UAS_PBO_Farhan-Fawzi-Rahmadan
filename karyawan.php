<?php
// Karyawan.php - Abstract Class Karyawan untuk UAS PBO Farhan

abstract class Karyawan {
    // Atribut Umum (Pake protected biar bisa diwarisin langsung ke class anak)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hari_kerja_masuk;
    protected $gaji_dasar_per_hari;
    protected $jenis_karyawan;

    // Constructor buat inisialisasi properti dasar pas objek dibuat
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hari_kerja_masuk, $gaji_dasar_per_hari, $jenis_karyawan) {
        $this->id_karyawan          = $id_karyawan;
        $this->nama_karyawan        = $nama_karyawan;
        $this->departemen           = $departemen;
        $this->hari_kerja_masuk     = $hari_kerja_masuk;
        $this->gaji_dasar_per_hari  = $gaji_dasar_per_hari;
        $this->jenis_karyawan       = $jenis_karyawan;
    }

    // Getter biasa buat ambil data nama
    public function getNama() {
        return $this->nama_karyawan;
    }

    // Getter buat ambil jenis karyawan
    public function getJenis() {
        return $this->jenis_karyawan;
    }

    /**
     * Abstract Method untuk menghitung pendapatan bulanan.
     * Ini sengaja kosongan karena WAJIB di-implementasikan secara spesifik 
     * di class anak (KaryawanTetap, KaryawanKontrak, KaryawanMagang).
     * Logikanya tiap jenis karyawan kan rumus hitung duitnya beda-beda, Han.
     */
    abstract public function hitungPendapatanBulanan();
}
?>