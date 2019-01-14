<?php

class Pet
{
    #   Protected variables and methods can be accessed and edited by child class
    #   Private variables and methods can't be accessed or edited by child class
    protected $owner = 'Ali';
    private $age;

    public function print_details($spc){
        echo "I am $spc, and my sound is " . $this -> sound . ".\n";
    }

    public function set_age($num){
        if (substr($num, 0, 1) == 0){
            echo "Age can't be zero" . ".\n";
        } else {
            $this -> age = $num;
            echo "I am " . $this -> age . ".\n";
        }
    }
}

class Dog extends Pet 
{
    public $sound = 'Hoof';

    public function mysound(){
        echo $this -> sound . ".\n";
    }

    public function myowner(){
        #   accessing parent class variable
        echo $this -> owner . " is my owner.\n";
    }

    public function set_owner($new_owner){
        #   Editing parent class variable.
        $this -> owner = $new_owner;
        echo "My new owner is " . $this -> owner . ".\n";
    }
}

$dog = new Dog();
$dog -> mysound();
$dog -> sound = 'Woof';
$dog -> print_details('German Shepherd');
$dog -> set_age(0);
$dog -> myowner();
$dog -> set_owner('Alioh');