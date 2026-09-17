<?php

trait Logger {

    public function log($pesan) {
        return "Log: " . $pesan;
    }
}


class Produk {
    use Logger;

    public function tambahProduk() {
        return $this->log("Produk berhasil ditambahkan.");
    }
}


class User {
    use Logger;

    public function login() {
        return $this->log("User berhasil login.");
    }
}


class Pesanan {
    use Logger;

    public function buatPesanan() {
        return $this->log("Pesanan berhasil dibuat.");
    }
}


$produk = new Produk();
$user = new User();
$pesanan = new Pesanan();

echo $produk->tambahProduk();
echo "<br>";
echo $user->login();
echo "<br>";
echo $pesanan->buatPesanan();

?>