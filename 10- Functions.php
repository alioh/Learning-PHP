<?php 

function greeting($name) {
    if ($name ?? "") {
        echo "Hello " . mb_strtoupper($name) . "!\n";
    } else {
        echo "Hello stranger!\n";
    };
};

greeting('');
greeting('ali');

$power = function ($a, $b){
    return $a ** $b;
};

echo $power(2, 2);