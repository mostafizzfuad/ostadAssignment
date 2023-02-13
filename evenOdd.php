<?php

function evenOdd($n) {
	if ($n % 2 == 0) {
		return $n . " is an even number";
	} 
	else {
		return $n . " is an odd number";
	}
}

$checkingValue = 12;
$result = evenOdd($checkingValue);

echo $result;