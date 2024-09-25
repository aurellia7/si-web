<?php
// kelas induk
class Car {
    // properti privat di dalam kelas
    private $model;

    // setter publik
    public function setModel($model) {
        $this -> model = $model;
    }

    public function hello() {
        return "beep! Saya adalah sebuah <i>" . $this -> model . "</i><br />";
    }
}

// kelas turunan mewarisi kode dari kelas induk
class SportsCar extends Car {
    // tidak ada kode di kelas anak
}

// membuat sebuah instance dari kelas anak
$sportsCar1 = new SportsCar();

// menetapkan nilai properti kelas.
// untuk tujuan ini, kita menggunakan metode yang kita buat di kelas induk
$sportsCar1 -> setModel('Mercedes Benz');

// menggunakan metode lain yang diwarisi dari kelas induk oleh kelas anak
echo $sportsCar1 -> hello();
?>
