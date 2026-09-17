<?php

class Kendaraan {
    protected $merek;
    protected $kecepatan;

    public function __construct($merek, $kecepatan) {
        $this->merek = $merek;
        $this->kecepatan = $kecepatan;
    }

    public function jalan() {
        return "Kendaraan sedang berjalan.";
    }
}


class Mobil extends Kendaraan {

    public function getInfo() {
        return "Mobil " . $this->merek .
               " memiliki kecepatan " .
               $this->kecepatan . " km/jam.";
    }
}


class Motor extends Kendaraan {

    public function getInfo() {
        return "Motor " . $this->merek .
               " memiliki kecepatan " .
               $this->kecepatan . " km/jam.";
    }
}


$mobil = new Mobil("Toyota", 120);
$motor = new Motor("Honda", 100);

echo $mobil->getInfo();
echo "<br>";
echo $motor->getInfo();

?>