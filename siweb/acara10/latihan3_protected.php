<?php
// kelas induk Tablet dengan properti dan metode protected
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    protected function setProperties($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    protected function getProperties() {
        return "Merk: $this->merk, Kamera: $this->camera, Memory: $this->memory<br>";
    }
}

// kelas turunan Handphone
class Handphone extends Tablet {
    public $handphone_baru;

    public function beliHandphone($merk, $camera, $memory) {
        $this->setProperties($merk, $camera, $memory); // Mengakses metode protected
        $this->handphone_baru = "Handphone baru dibeli dengan spesifikasi: " . $this->getProperties();
    }

    public function tampilkanHandphone() {
        return $this->handphone_baru;
    }
}

// penggunaan
$hp = new Handphone();
$hp->beliHandphone("iPhone", "12MP", "512GB");
echo $hp->tampilkanHandphone();
?>