<?php
// perulangan dari 1 sampai 10
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    // cetak angka kecuali 5
    echo $i . "<br>";
}
?>
