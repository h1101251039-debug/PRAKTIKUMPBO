
<?php

require_once 'Product.php';

$product = new Product();

$data = $product->findAll();

if (count($data) > 0) {
    foreach ($data as $item) {
        echo "ID: " . $item['id'] . "<br>";
        echo "Nama: " . $item['nama'] . "<br>";
        echo "Harga: Rp " . $item['harga'] . "<br>";
        echo "Stok: " . $item['stok'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Belum ada produk.";
}
