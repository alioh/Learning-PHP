<?php

$a = true;
$b = true;
$c = false;

echo $a && !$c;

#   && > AND
#   True && True > True
#   False && True > False
#   True && False > False
#   False && False > True

#   || > OR
#   True || True > True
#   False || True > True
#   True || False > True
#   False || False > False

#   ! before variable returns its opposite