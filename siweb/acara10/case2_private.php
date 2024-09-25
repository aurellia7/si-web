<?php
// Kelas induk
class Car {
    // Properti $model bersifat privat, sehingga hanya bisa diakses
    // dari dalam kelas
    private $model;

    // Metode setter publik
    public function setModel($model) {
        $this -> model = $model;
    }
}

// Kelas anak
class SportsCar extends Car {
    // Mencoba mengakses properti privat yang dimiliki oleh kelas induk
    public function hello() {
        return "beep! Saya adalah sebuah <i>" . $this -> model . "</i><br />";
    }
}

// Membuat sebuah instance dari kelas anak
$sportsCar1 = new SportsCar();

// Menetapkan nama model kelas
$sportsCar1 -> setModel('Mercedes Benz');
?>
