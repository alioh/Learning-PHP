<?php

class Pet
{
    public $sound = 'Meow';
    public $species;

    public function print_details($spc){
        echo "I am $spc, and my sound is " . $this -> sound;
    }
}

$pet = new Pet();
$pet -> species = 'Dog';

echo $pet -> species . "\n";
echo $pet -> sound . "\n";

$pet -> print_details('Cat');
