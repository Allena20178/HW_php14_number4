<?php

$one = fopen ("php://stdin","r");
$fizz = fgets($one);
$buzz = fgets($one);
$next = fgets($one);
$i = 1;
 
for ($i=1; $i<=$next; $i++){
    echo (($i % $fizz == 0) && ($i % $buzz) == 0 ? "FB ": ($i % $fizz == 0 ? "F ": ($i % $buzz == 0 ?"B ": $i." ")));
}
