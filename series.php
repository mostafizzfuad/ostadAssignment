<?php

$first = 1;
$last = 100;

$sum = 0;

for($i = $first; $i <= $last; $i++){
	$sum += $i;
}

echo "Sum of 1 to 100 = " . $sum;