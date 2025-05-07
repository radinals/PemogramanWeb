<?php

class MenuMakanan {
    private string $nama;
    private string $kategori;
    private int $harga;

    public function __construct(string $nama, string $kategori, int $harga) {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
    }

    public function getHarga():float {
        return $this->harga;
    }

    public function getInfo():string {
        return $this->nama."(".$this->kategori.") - ".$this->harga;
    }

}

?>
