<?php
// kelas induk Tablet dengan metode private
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    private function setProperties($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    private function getProperties() {
        return "Merk: $this->merk, Kamera: $this->camera, Memory: $this->memory<br>";
    }

    // metode public untuk mengatur properti
    public function setTabletProperties($merk, $camera, $memory) {
        $this->setProperties($merk, $camera, $memory);
    }

    public function tampilkanTabletProperties() {
        return $this->getProperties();
    }
}

// kelas turunan Handphone
class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone($merk, $camera, $memory) {
        // tidak bisa mengakses $this->setProperties karena bersifat private
        $this->setTabletProperties($merk, $camera, $memory); // menggunakan metode public
        $this->handphone_baru = "Handphone baru dibeli dengan spesifikasi: " . $this->tampilkanTabletProperties();
    }

    public function tampilkanHandphone() {
        return $this->handphone_baru;
    }
}

// penggunaan
$hp = new Handphone();
$hp->beliHandphone("Xiaomi", "48MP", "128GB");
echo $hp->tampilkanHandphone();
?>