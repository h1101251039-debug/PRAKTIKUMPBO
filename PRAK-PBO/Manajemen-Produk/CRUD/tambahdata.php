
<?php

require_once '../Product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if ($nama !== '' && $harga !== '' && $stok !== ''
        && is_numeric($harga) && $harga >= 0
        && filter_var($stok, FILTER_VALIDATE_INT) !== false
        && $stok >= 0) {

        $product = new Product();

        $hasil = $product->setNama($nama)
                         ->setHarga($harga)
                         ->setStok($stok)
                         ->save();

        if ($hasil) {
            header('Location: ../index.php?pesan=tambah');
            exit;
        }
    }

    header('Location: ../index.php?pesan=gagal');
    exit;
}
?>

<h2>Tambah Produk</h2>

<form method="POST">
    <label>Nama produk:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga" min="0" step="0.01" required><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok" min="0" step="1" required><br><br>

    <button type="submit">Simpan Produk</button>
</form>

<a href="../index.php">Kembali</a>
