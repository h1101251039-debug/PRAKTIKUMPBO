<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    public function Luas() {
        return $this->panjang * $this->lebar;
    }
}

$kotak = new PersegiPanjang();
$kotak->panjang = 55;
$kotak->lebar = 27;

echo $kotak->Luas(); 

?>