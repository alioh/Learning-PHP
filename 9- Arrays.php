<?php

$animals = array('Dog', 'Cat', 'Cow', 'Wolf');

echo $animals[0] . "\n";


foreach ($animals as $animal) {
    echo $animal . "\n";
}


$car = array('Make' => 'Ford', 'Model' => 'Edge');

echo $car['Make'] . "\n";


#   Key and Value >> dictionary in python?
foreach ($car as $k => $v) {
    echo $k . ': ' . $v . "\n";
}