<?php
class PerangkatDesa {
    //protected, hanya bisa diakses oleh kelas ini dan turunannya
    protected $nama;
    protected $jabatan;

    public function __construct($nama, $jabatan) {
        $this->setNama($nama);
        $this->setJabatan($jabatan);
    }

    //metode setter untuk mengisi nilai dari parameter ke properti 'nama'
    public function setNama($nama) {
        $this->nama = $nama;
    }
    //getter untuk mengembalikan nilai
    public function getNama() {
        return $this->nama;
    }

    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

    public function infoPerangkatDesa() {
        return "Nama: " . $this->getNama() . ", Jabatan: " . $this->getJabatan();
    }
}

$perangkat1 = new PerangkatDesa("Pak Doni", "Kepala Desa");

echo $perangkat1->infoPerangkatDesa();
?>
