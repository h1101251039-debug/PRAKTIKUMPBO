
<?php

require_once '../Product.php';

$data = Product::findAll();

foreach ($data as $item) {
    echo $item['id'] . ". "
        . htmlspecialchars($item['nama'])
        . " - Rp "
        . $item['harga']
        . " - Stok: "
        . $item['stok']
        . "<br>";
}

if (count($data) === 0) {
    echo "Belum ada produk.";
}
