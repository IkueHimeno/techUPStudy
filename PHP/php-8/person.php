<?php
class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender) {
        $this -> name = $name;
        $this -> age = $age;
        $this -> gender = $gender;
    }

    public function selfIntroduction() {
        $genderStr = ($this -> gender === 'm') ? '男性' : '女性';
        return "私は{$this -> name}、{$this -> age}歳、{$genderStr}です。";
    }

    public function addAge() {
        $this -> age++;
    }
}