
<?php

require_once '../Product.php';

$id = $_POST['id'] ?? $_GET['id'] ?? 0;
$produk = Product::findById($id);

if (!$produk) {
    exit('Produk tidak ditemukan. <a href="../index.php">Kembali</a>');
}

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
                         ->update($id);

        if ($hasil) {
            header('Location: ../index.php?pesan=ubah');
            exit;
        }
    }

    echo "Data tidak valid atau gagal diperbarui.<br>";
}
?>

<h2>Edit Produk</h2>

<form method="POST">
    <input type="hidden" name="id"
           value="<?= htmlspecialchars((string)$produk['id']) ?>">

    <label>Nama produk:</label><br>
    <input type="text" name="nama"
           value="<?= htmlspecialchars($produk['nama']) ?>" required><br><br>

    <label>Harga:</label><br>
    <input type="number" name="harga" min="0" step="0.01"
           value="<?= htmlspecialchars((string)$produk['harga']) ?>" required><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stok" min="0" step="1"
           value="<?= htmlspecialchars((string)$produk['stok']) ?>" required><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>

<a href="../index.php">Kembali</a>
