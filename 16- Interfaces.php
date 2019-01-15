<?php

interface Pet
{
    public function set_age($ag);
    public function set_sound($snd);
    public function set_species($spc);
}

class Dog implements Pet
{
    public $age;
    public $sound;
    public $species;

    public function set_age($ag){
        $this -> age = $ag; 
    }

    public function set_sound($snd){
        $this -> sound = $snd; 
    }

    public function set_species($spc){
        $this -> species = $spc; 
    }
}

$dog = new Dog();
$dog -> set_age(4);
$dog -> set_sound('Woof');
$dog -> set_species('German Shepherd');

if ($dog instanceof Pet){
    echo $dog -> age . "\n";
    echo $dog -> sound . "\n";
    echo $dog -> species;
}
