<?php

class Pet
{
    public $sound;
    public $species;

    function __construct($snd, $spc){
        $this -> sound = $snd;
        $this -> species = $spc;
    }

    public function print_details(){
        echo "I am " . $this -> species . ", and my sound is " . $this -> sound . "\n";
    }
}


$dog = new Pet('Woof', 'German Shepherd');
$dog -> print_details();