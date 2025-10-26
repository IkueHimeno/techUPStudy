<?php
require_once 'person.php';

class Patient extends Person {
    private $height;
    private $weight;

    public function __construct($name, $age, $gender, $height, $weight) {
        parent::__construct($name, $age, $gender);
        $this -> height = $height;
        $this -> weight = $weight;
    }

    public function getHeight(){
        return $this -> height;
    }

    public function getWeight(){
        return $this -> weight;
    }

    public function calculateStandardWeight(){
        return 22 * $this -> height * $this -> height;
    }
}