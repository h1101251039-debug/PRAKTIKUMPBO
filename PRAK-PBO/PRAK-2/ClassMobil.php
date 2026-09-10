<?php

class Mobil {

    public $merek;
    public $warna;
    public $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function getInfo() {
        return "Merek Mobil : " . $this->merek . "<br>" .
               "Warna : " . $this->warna . "<br>" .
               "Kecepatan : " . $this->kecepatan . " km/jam<br>";
    }

    public function jalankan() {
        return "Mobil berjalan...<br>";
    }
        
    public function berhenti() {
        return "Mobil berhenti<br>";
    }
}

$mobil1 = new Mobil("Toyota", "Hitam", 120);
$mobil2 = new Mobil("Honda", "Putih", 140);
$mobil3 = new Mobil("Suzuki", "Merah", 110);

echo "<b>Mobil 1</b><br>";
echo $mobil1->getInfo();
echo $mobil1->jalankan();
echo $mobil1->berhenti();

echo "<br>";

echo "<b>Mobil 2</b><br>";
echo $mobil2->getInfo();
echo $mobil2->jalankan();
echo $mobil2->berhenti();

echo "<br>";

echo "<b>Mobil 3</b><br>";
echo $mobil3->getInfo();
echo $mobil3->jalankan();
echo $mobil3->berhenti();

?>