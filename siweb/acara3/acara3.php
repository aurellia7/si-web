<?php
// fungsi untuk menghitung kuadrat dari sebuah bilangan
function hitungKuadrat($angka)
{
    return $angka * $angka;
}

// perulangan untuk menampilkan kuadrat dari angka 1 hingga 10
for ($i = 1; $i <= 10; $i++) {
    //memanggil fungsi dan menyimpan hasil dalam $kuadrat
    $kuadrat = hitungKuadrat($i);
    // jika hasil kuadrat lebih besar dari 50, tampilkan pesan khusus
    if ($kuadrat > 50) {
        echo "Kuadrat dari $i adalah: $kuadrat (Lebih dari 50)<br>";
    } else {
        echo "Kuadrat dari $i adalah: $kuadrat<br>";
    }
}
?>