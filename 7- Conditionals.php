<?php

$animal = 'cat';

if ($animal == 'cat'){
    echo "Meow 🐱\n";
} else {
    echo "I am not a 🐈\n";
}

$dog = 'dog';

switch ($dog) {
    case 'dog':
        echo "Woof 🐕\n";
        break;
    default:
        echo "Not a 🐶\n";
        break;
}

$bird = 'bird';
echo $bird == 'bird' ? "🐦🐦🐦 \n" : "not a 🐦\n";

echo $iamnotreal ?? "not real variable\n";

$real = 'I am REAL';
echo $iamnotreal ?? $real ?? "not real variable\n";