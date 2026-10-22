
<?php

require_once '../Product.php';

$id = $_GET['id'] ?? 0;
$produk = Product::findById($id);

if ($produk) {
    echo "<h2>Detail Produk</h2>";
    echo "ID: " . $produk['id'] . "<br>";
    echo "Nama: " . htmlspecialchars($produk['nama']) . "<br>";
    echo "Harga: Rp " . $produk['harga'] . "<br>";
    echo "Stok: " . $produk['stok'] . "<br>";
} else {
    echo "Produk tidak ditemukan.";
}

echo '<br><a href="../index.php">Kembali</a>';
