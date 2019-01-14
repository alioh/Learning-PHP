<?php

class Pet
{
    public $sound = 'Meow';
    public $species;

    public function print_details($spc){
        echo "I am $spc, and my sound is " . $this -> sound . "\n";
    }
}

class Dog extends Pet 
{
    public $sound = 'Hoof';
    public function mysound(){
        echo $this -> sound;    
    }
}

$dog = new Dog();
$dog -> mysound();
$dog -> print_details('German Shepherd');