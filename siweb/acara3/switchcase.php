<?php
$pilihan = 2; // pilihan minuman (misal: 2 untuk Teh)

switch ($pilihan) {
    case 1:
        echo "Kopi";
        break;
    case 2:
        echo "Teh";
        break;
    case 3:
        echo "Jus Jeruk";
        break;
    default:
        echo "Pilihan tidak valid.";
}
?>
