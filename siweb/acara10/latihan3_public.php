<?php
// kelas induk Tablet dengan properti dan metode public
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function setProperties($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getProperties() {
        return "Merk: $this->merk, Kamera: $this->camera, Memory: $this->memory<br>";
    }
}

// kelas turunan Handphone
class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone($merk, $camera, $memory) {
        $this->setProperties($merk, $camera, $memory);
        $this->handphone_baru = "Handphone baru dibeli dengan spesifikasi: " . $this->getProperties();
    }

    public function tampilkanHandphone() {
        return $this->handphone_baru;
    }
}

// penggunaan
$hp = new Handphone();
$hp->beliHandphone("Samsung", "108MP", "256GB");
echo $hp->tampilkanHandphone();
?>