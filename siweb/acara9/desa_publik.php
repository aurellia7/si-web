<?php
class PerangkatDesa {
    //public, bisa diakses langsung dari luar class
    public $nama;
    public $jabatan;

    //inisialisasi objek
    public function __construct($nama, $jabatan) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
    }

    public function infoPerangkatDesa() {
        return "Nama: $this->nama, Jabatan: $this->jabatan";
    }
}

$perangkat1 = new PerangkatDesa("Pak Doni", "Kepala Desa");

echo $perangkat1->infoPerangkatDesa();
?>
