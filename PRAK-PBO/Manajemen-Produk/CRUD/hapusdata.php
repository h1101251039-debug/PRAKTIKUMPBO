
<?php

require_once '../product.php';

$id = $_GET['id'] ?? 0;

if ($id > 0) {
    $hasil = Product::delete($id);

    if ($hasil) {
        header('Location: ../index.php?pesan=hapus');
        exit;
    } else {
        echo "Produk gagal dihapus.";
    }
} else {
    echo "ID produk tidak ditemukan.";
}
