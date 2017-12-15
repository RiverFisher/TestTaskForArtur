<?php

$matrix = [];
$uniqueNumbers = [];
for ($i = 0; $i < 6; $i++) {
    $matrix[$i] = [];
    for ($j = 0; $j < 6; $j++) {
        do {
            $value = rand(0, 100);
        } while (in_array($value, $uniqueNumbers));
	$matrix[$i][$j] = $value;
        array_push($uniqueNumbers, $value);
    }
}
print_r($matrix);
