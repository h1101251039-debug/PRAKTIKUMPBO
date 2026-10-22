
<?php

class DatabaseConnection
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $host = "localhost";
        $dbname = "db_produk";
        $username = "root";
        $password = "";

        $this->connection = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
