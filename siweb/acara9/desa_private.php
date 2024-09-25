<?php
class PerangkatDesa {
    //private, hanya bisa diakses dari dalam class
    private $nama;
    private $jabatan;

    public function __construct($nama, $jabatan) {
        $this->setNama($nama);
        $this->setJabatan($jabatan);
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

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
