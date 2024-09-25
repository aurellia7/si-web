<?php
class Kalkulator {
    private $angka1; //var untuk menyimpan angka pertama
    private $angka2; //var untuk menyimpan angka kedua

    // konstruktor untuk menginisialisasi angka1 dan angka2
    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1; // menyimpan angka pertama
        $this->angka2 = $angka2; // menyimpan angka kedua
    }

    // metode untuk menjumlahkan angka1 dan angka2
    public function tambah() {
        return $this->angka1 + $this->angka2;
    }

    // metode untuk mengurangkan angka2 dari angka1
    public function kurang() {
        return $this->angka1 - $this->angka2;
    }

    // metode untuk mengalikan angka1 dengan angka2
    public function kali() {
        return $this->angka1 * $this->angka2;
    }

    // metode untuk membagi angka1 dengan angka2
    public function bagi() {
        // memeriksa jika angka2 adalah nol
        if ($this->angka2 == 0) {
            return "Error: Pembagian dengan nol tidak diperbolehkan";
        } else {
            return $this->angka1 / $this->angka2; //mengembalikan hasil pembagian
        }
    }
}

// membuat objek dari kelas Kalkulator dengan angka 20 dan 5
$kalkulator = new Kalkulator(10, 5);

// menampilkan hasil dari setiap operasi
echo "Hasil Penjumlahan: " . $kalkulator->tambah() . "<br>";
echo "Hasil Pengurangan: " . $kalkulator->kurang() . "<br>";
echo "Hasil Perkalian: " . $kalkulator->kali() . "<br>";
echo "Hasil Pembagian: " . $kalkulator->bagi() . "<br>";
?>
