<?php
require_once 'Animal.php'; // Mengimpor class Animal

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name); // Gunakan constructor Animal
    }

    public function jump() {
        echo "hop hop<br>";
    }
}
?>
