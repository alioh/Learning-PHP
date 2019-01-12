<?php

echo "----- while -----\n";

$count = 3;

while ($count > 0) {
    echo $count . "\n";
    --$count;
}

echo "----- do while -----\n";

$count2 = 0;

do {
    echo $count2 . "\n";
    ++$count2;
} while ($count2 <= 3);

echo "------- for -------\n";

for ($i=4; $i > 0 ; $i--) { 
    echo $i . "\n";
}

echo "----- foreach -----\n";

$list = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($list as $l) {
    if ($l >= 5) {
        echo $l . "\n";
        break;
    }
    echo $l . "\n";
}

echo "----- foreach -----\n";

foreach ($list as $l) {
    if ($l <= 5) {
        continue;
    } else {
        echo $l . "\n";
    }
}