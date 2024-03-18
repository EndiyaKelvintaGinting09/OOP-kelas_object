<?php
// class Lptop
class Laptop {
    public $model;
    public $warna;

    //  mengatur model laptop
    public function setModel($model) {
        $this->model = $model;
    }

    //  mendapatkan model laptop
    public function getModel() {
        return $this->model;
    }

    // mengatur warna laptop
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // mendapatkan warna laptop
    public function getWarna() {
        return $this->warna;
    }
}

// Membuat objek dari kelas laptop
$laptopSaya = new Laptop();

// Mengatur model dan warna mobil
$laptopSaya->setModel('Asus');
$laptopSaya->setWarna('Putih');

// Mendapatkan dan menampilkan model dan warna mobil
"<br>". "<br>". "<br>";
echo "<h3>" . "<center>" ."Model Laptop: " . $laptopSaya->getModel() . "<br>". "</h3>". "</center>";
echo "<h3>" . "<center>" ."Warna Laptop: " . $laptopSaya->getWarna(). "</h3>". "</center>";

?>
