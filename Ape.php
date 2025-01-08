<?php
require_once "Animal.php";
class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name, 2); // Ape has 2 legs
    }

    public function yell() {
        echo "Auooo";
}
}


?>