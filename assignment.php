<?php
// Answer to the question no-1

function sortByLength($a, $b)
{
	return strlen($b) - strlen($a);
}

$array = array('longstring', 'string', 'thelongeststring');
usort($array, 'sortByLength');

print_r($array);
echo PHP_EOL;

// Answer to the question no-2

$string1 = "Hello World!";
$string2 = "Everyone";
$string1_end = substr($string1, strlen($string2));
$result = $string1_end . $string2;
echo $result;
echo PHP_EOL;

// Answer to the question no-3

$fruits = array("Java", "PHP", "Laravel", "Node JS");
$newFruites = array_slice($fruits, 1, 2);

print_r($newFruites);
echo PHP_EOL;

// Answer to question no-4

function Check($value)
{
	return preg_match('/^[a-zA-Z\s]+$/', $value);
}

$example_value1 = "Hello World";
$example_value2 = "Hello World 123";

$result1 = Check($example_value1);
$result2 = Check($example_value2);

echo $result1;
echo PHP_EOL;
echo $result2;
echo PHP_EOL;

// Answer to question no-5

$harr = array(58, 200, 30, 90, 150);
$r = rsort($harr);
echo $harr[1];
echo PHP_EOL;