<?php

include_once "MenuMakanan.php";

class Pesanan {
    private array $pesanan = [];

    public function __construct() {
        $this->pesanan = [];
    }

    public function tambahMakanan(MenuMakanan $makanan) {
        $this->pesanan[] = $makanan;
    }

    public function tampilkanPesanan() {
        echo "<h1>DETAIL PESANAN</h1>";
        $total = 0;
        echo "<ol>";
        foreach ($this->pesanan as $makanan) {
            echo "<li>" . $makanan->getInfo() . "</li>";
            $total += $makanan->getHarga();
        }
        echo "</ol>";
        echo "<b>HARGA: " . $total."</b>";
    }
}

?>
