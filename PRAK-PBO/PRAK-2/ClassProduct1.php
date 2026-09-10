<?php

class Product {

    public $nama;
    public $harga;
    public $kategori;

    public function __construct($nama, $harga, $kategori) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    public function getInfo() {
        return "Produk: " . $this->nama .
               " | Harga: Rp" . number_format($this->harga, 0, ',', '.') .
               " | Kategori: " . $this->kategori;
    }

    public function applyDiskon($persen) {
        $diskon = $this->harga * $persen / 100;
        $this->harga = $this->harga - $diskon;
    }
}

$product1 = new Product("Headphone Bluetooth", 350000, "Elektronik");
$product2 = new Product("Tas Selempang", 180000, "Fashion");

echo "<b>Sebelum Diskon</b><br>";
echo $product1->getInfo() . "<br>";
echo $product2->getInfo() . "<br><br>";

$product1->applyDiskon(20);
$product2->applyDiskon(15);


echo "<b>Setelah Diskon</b><br>";
echo $product1->getInfo() . "<br>";
echo $product2->getInfo();

?>