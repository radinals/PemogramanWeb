<?php

include_once "Pesanan.php";
include_once "MenuMakanan.php";

$pesanan = new Pesanan();

foreach ($_POST as $k => $menu) {
    switch($menu) {
    case "1":
        $pesanan->tambahMakanan(new MenuMakanan("Nasi Goreng", "Makanan", 15000));
        break;
    case "2":
        $pesanan->tambahMakanan(new MenuMakanan("Mie Ayam", "Makanan", 12000));
        break;
    case "3":
        $pesanan->tambahMakanan(new MenuMakanan("Es Teh", "Minuman", 5000));
        break;
    case "4":
        $pesanan->tambahMakanan(new MenuMakanan("Kopi Hitam", "Minuman", 7000));
        break;
    }
}

$pesanan->tampilkanPesanan();

?>
