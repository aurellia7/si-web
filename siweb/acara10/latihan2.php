<?php
// kelas induk
class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    // setter untuk ukuran
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    // setter untuk warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // setter untuk nama produk
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // method untuk menampilkan detail produk yang umum
    public function getDetailProduk() {
        return "Nama: $this->nama, Ukuran: $this->ukuran, Warna: $this->warna<br>";
    }
}

// kelas 'Topi' mewarisi 'ItemProduk'
class Topi extends ItemProduk {
    private $model;

    // setter untuk model topi
    public function setModel($model) {
        $this->model = $model;
    }

    // method untuk menampilkan detail topi
    public function getDetailTopi() {
        return $this->getDetailProduk() . "Model Topi: $this->model<br>";
    }
}

// kelas 'Celana' mewarisi 'ItemProduk'
class Celana extends ItemProduk {
    private $tipe;
    private $model;

    // setter untuk tipe celana
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // setter untuk model celana
    public function setModel($model) {
        $this->model = $model;
    }

    // method untuk menampilkan detail celana
    public function getDetailCelana() {
        return $this->getDetailProduk() . "Tipe Celana: $this->tipe, Model Celana: $this->model<br>";
    }
}

// kelas 'Baju' mewarisi 'ItemProduk'
class Baju extends ItemProduk {
    private $tipe;

    // setter untuk tipe baju
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // method untuk menampilkan detail baju
    public function getDetailBaju() {
        return $this->getDetailProduk() . "Tipe Baju: $this->tipe<br>";
    }
}

//objek dari masing-masing kelas dan mengisi data
$topi = new Topi();
$topi->setNama("Topi Olahraga");
$topi->setUkuran("L");
$topi->setWarna("Hitam");
$topi->setModel("Baseball Cap");
echo $topi->getDetailTopi();

$celana = new Celana();
$celana->setNama("Celana Kasual");
$celana->setUkuran("M");
$celana->setWarna("Biru");
$celana->setTipe("Panjang");
$celana->setModel("Slim Fit");
echo $celana->getDetailCelana();

$baju = new Baju();
$baju->setNama("Kaos Polos");
$baju->setUkuran("XL");
$baju->setWarna("Putih");
$baju->setTipe("T-Shirt");
echo $baju->getDetailBaju();
?>