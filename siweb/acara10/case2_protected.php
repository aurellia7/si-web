<?php
// kelas induk
class Car {
    // properti $model sekarang bersifat protected, sehingga bisa diakses
    // dari dalam kelas dan kelas turunannya
    protected $model;

    // metode setter publik
    public function setModel($model) {
        $this -> model = $model;
    }
}

// kelas anak
class SportsCar extends Car {
    // tidak ada masalah untuk mengakses properti protected yang dimiliki oleh kelas induk
    public function hello() {
        return "beep! Saya adalah sebuah <i>" . $this -> model . "</i><br />";
    }
}

// membuat sebuah instance dari kelas anak
$sportsCar1 = new SportsCar();
?>
