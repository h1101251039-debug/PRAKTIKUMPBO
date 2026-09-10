<?php

class Mobil {

    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    // Getter
    public function getMerek() {
        return $this->merek;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }

    // Setter warna
    public function setWarna($warna) {
        if ($warna == "") {
            echo "Warna tidak boleh kosong.<br>";
        } elseif (strlen($warna) < 3) {
            echo "Warna minimal 3 karakter.<br>";
        } else {
            $this->warna = $warna;
        }
    }

    // Setter kecepatan
    public function setKecepatan($kecepatan) {
        if ($kecepatan < 0) {
            echo "Kecepatan tidak boleh negatif.<br>";
        } elseif ($kecepatan > 200) {
            echo "Kecepatan maksimal 200 km/jam.<br>";
        } else {
            $this->kecepatan = $kecepatan;
        }
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

echo "<br><b>Pengujian Validasi</b><br>";

$mobil1->setKecepatan(250);
$mobil2->setKecepatan(-10);
$mobil3->setWarna("Me");
$mobil1->setWarna("");

?>