
<?php

require_once 'DatabaseConnection.php';

try {
    $db = DatabaseConnection::getInstance()->getConnection();

    echo "Koneksi database berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
