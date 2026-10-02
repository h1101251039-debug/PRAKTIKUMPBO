<?php

// Abstract class sebagai parent semua layanan warnet
abstract class LayananWarnet {
    protected $id;
    protected $nama;
    protected $hargaDasar;

    public function __construct($id, $nama, $hargaDasar) {
        $this->id = $id;
        $this->nama = $nama;
        $this->hargaDasar = $hargaDasar;
    }

    // getter
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHargaDasar() {
        return $this->hargaDasar;
    }

    // method abstract, wajib di-override oleh child
    abstract public function hitungTotal();
    abstract public function getJenis();
}

// Child class 1: Reguler
class Reguler extends LayananWarnet {
    private $jam;

    public function __construct($id, $nama, $hargaDasar, $jam) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->jam = $jam;
    }

    // override
    public function hitungTotal() {
        return $this->hargaDasar + (2000 * $this->jam);
    }

    // override
    public function getJenis() {
        return "Reguler";
    }

    // bonus
    public function cetakDetail() {
        return "Lama pakai: " . $this->jam . " jam";
    }
}

// Child class 2: VIP
class VIP extends LayananWarnet {
    private $jam;

    public function __construct($id, $nama, $hargaDasar, $jam) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->jam = $jam;
    }

    // override
    public function hitungTotal() {
        $total = $this->hargaDasar + (5000 * $this->jam);

        // diskon 10% kalau lebih dari 3 jam
        if ($this->jam > 3) {
            $total = $total * 0.10;
        }
        return $total;
    }

    // override
    public function getJenis() {
        return "VIP";
    }

    // bonus
    public function cetakDetail() {
        return "Lama pakai: " . $this->jam . " jam";
    }
}

// Child class 3: Print 
class PrintLayanan extends LayananWarnet {
    private $lembar;

    public function __construct($id, $nama, $hargaDasar, $lembar) {
        parent::__construct($id, $nama, $hargaDasar);
        $this->lembar = $lembar;
    }

    // override
    public function hitungTotal() {
        return $this->hargaDasar + (500 * $this->lembar);
    }

    // override
    public function getJenis() {
        return "Print";
    }

    // bonus
    public function cetakDetail() {
        return "Jumlah lembar: " . $this->lembar;
    }
}

// Instansiasi 5 objek dan simpan dalam array
$semua = [
    new Reguler("L01", "Listy", 5000, 2),
    new VIP("L02", "Melly", 8000, 4),
    new PrintLayanan("L03", "cika", 1000, 20),
    new Reguler("L04", "Budi", 5000, 3),
    new VIP("L05", "Sinta", 8000, 2)
];

$totalKeseluruhan = 0;

// Looping array (polymorphism: hitungTotal() dan getJenis() beda tiap objek)
foreach ($semua as $l) {
    $total = $l->hitungTotal();

    echo $l->getId() . " | " . $l->getNama() . " | " . $l->getJenis();
    echo " | Harga Dasar: " . $l->getHargaDasar();
    echo " | " . $l->cetakDetail();
    echo " | Total: " . $total . "<br>";

    $totalKeseluruhan += $total;
}

echo "<br><b>Total keseluruhan: Rp " . $totalKeseluruhan . "</b>";