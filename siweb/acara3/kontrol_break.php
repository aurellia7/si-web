<?php
// perulangan dari 1 sampai 10
for ($i = 1; $i <= 10; $i++) {
    // jetak angka saat ini
    echo $i . "<br>";

    // Jika angka adalah 5, hentikan perulangan
    if ($i == 5) {
        break;  // menghentikan perulangan saat $i sama dengan 5
    }
}
?>
