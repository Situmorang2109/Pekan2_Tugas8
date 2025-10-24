<?php
require_once 'Animal.php'; // Mengimpor class Animal

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name); // Panggil constructor parent
        $this->legs = 2; // Override jumlah kaki jadi 2
    }

    public function yell() {
        echo "Auooo<br>";
    }
}
?>
