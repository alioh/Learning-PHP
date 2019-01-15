<?php

class Pet
{
    public static $no_of_legs = 4;
    public $sound;
    public $species;

    public function __construct($snd, $spc){
        $this -> sound = $snd;
        $this -> species = $spc;
    }

    static public function set_leg_numbers($num){
        if ($num == 0){
            throw new Exception("legs number can't be zero");
        } else {
            self::$no_of_legs = $num;
        }
    }

    static public function get_leg_numbers(){
        return self::$no_of_legs;
    }
}

$pet = new Pet('Woof', 'German Shepherd');

try {
    echo $pet -> sound . "\n";
    echo $pet -> species . "\n";
    echo Pet::get_leg_numbers() . "\n";
    echo Pet::set_leg_numbers(0);
    echo Pet::get_leg_numbers();
} catch ( Exception $e ) {
    echo $e -> getMessage();
}