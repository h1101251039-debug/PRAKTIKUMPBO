
<?php
require_once 'product.php';

$data = Product::findAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>
</head>
<body>

    <h2>Manajemen Produk</h2>

    <h3>Tambah Produk</h3>

    <form action="CRUD/tambahdata.php" method="POST">
        Nama:
        <input type="text" name="nama" required>
        <br><br>

        Harga:
        <input type="number" name="harga" min="0" step="0.01" required>
        <br><br>

        Stok:
        <input type="number" name="stok" min="0" required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <h3>Daftar Produk</h3>

    <?php if (count($data) > 0): ?>

        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($data as $produk): ?>
                <tr>
                    <td><?= $produk['id'] ?></td>
                    <td><?= htmlspecialchars($produk['nama']) ?></td>
                    <td><?= $produk['harga'] ?></td>
                    <td><?= $produk['stok'] ?></td>
                    <td>
                        <a href="CRUD/lihatsatu.php?id=<?= $produk['id'] ?>">
                            Detail
                        </a>

                        <a href="CRUD/updatedata.php?id=<?= $produk['id'] ?>">
                            Edit
                        </a>

                        <a href="CRUD/hapusdata.php?id=<?= $produk['id'] ?>"
                           onclick="return confirm('Hapus produk ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    <?php else: ?>
        <p>Belum ada produk.</p>
    <?php endif; ?>

</body>
</html>
