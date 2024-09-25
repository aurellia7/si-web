<?php
// kelas induk
class MobilLengkap {
    // method untuk menonton TV
    public function nontonTV() {
        echo "TV dihidupkan<br>";
        echo "TV mencari channel<br>";
        echo "TV menampilkan gambar<br>";
    }

    // method untuk menghidupkan mobil
    public function hidupkanMobil() {
        echo "Mobil dihidupkan<br>";
    }

    // method untuk mematikan mobil
    public function matikanMobil() {
        echo "Mobil dimatikan<br>";
    }

    // method untuk mengubah gigi mobil
    public function ubahGigi($gigi) {
        echo "Mobil mengubah gigi ke: $gigi<br>";
    }
}

// kelas anak yang mewarisi dari kelas MobilLengkap
class MobilBMW extends MobilLengkap {

}

// kelas aksi yang menggunakan metode dari MobilBMW
class MobilBMWberaksi {
    // method untuk aksi nonton TV
    public function nontonTv() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->nontonTV();
    }

    // method untuk menghidupkan mobil
    public function hidupkanMobil() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->hidupkanMobil();
    }

    // method untuk mematikan mobil
    public function matikanMobil() {
        $mobilBMW = new MobilBMW();
        $mobilBMW->matikanMobil();
    }

    // method untuk mengubah gigi
    public function ubahGigi($gigi) {
        $mobilBMW = new MobilBMW();
        $mobilBMW->ubahGigi($gigi);
    }
}

//penggunaan kelas MobilBMWberaksi
$aksi = new MobilBMWberaksi();

echo "Aksi Nonton TV:<br>";
$aksi->nontonTv();

echo "<br>Aksi Menghidupkan Mobil:<br>";
$aksi->hidupkanMobil();

echo "<br>Aksi Mematikan Mobil:<br>";
$aksi->matikanMobil();

echo "<br>Aksi Mengubah Gigi:<br>";
$aksi->ubahGigi(3); // ubah gigi ke gigi 3
?>