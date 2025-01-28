<?php
$numbers = [2, 5, 11, 23];
$first = $numbers[0];
// this code cause error due to array need to converted to string echo "array: $numbers";
echo "first: $first\n";
$numbers[4] = 47;
print_r($numbers);
echo count($numbers);

$last = end($numbers);
echo "\n$last";

// stack and queue
array_push($numbers, 0);
print_r($numbers);

unset($numbers[3]);
print_r($numbers);

array_pop($numbers);
array_unshift($numbers, 6);
print_r($numbers);
array_shift($numbers);
print_r($numbers);

$all_zero = [0, 0, 0, 0, 0, 0, 0, 0];
$numbers = array_merge($numbers, $all_zero);
print_r($numbers);

sort($numbers);
print_r($numbers);
rsort($numbers);
print_r($numbers);

print_r(array_slice($numbers, 3));
print_r(array_slice($numbers, 5, 2));
