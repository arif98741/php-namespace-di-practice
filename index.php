<?php
// At start of script
$time_start = microtime(true);

// Anywhere else in the script
echo 'Total execution time in seconds: ' . (microtime(true) - $time_start);

/*$array = array(
    array(1, 2),
    array(3, 4),
    array(5, 6)
);

$newArray = array();
foreach ($array as $subarray) {
    foreach ($subarray as $index => $value) {
        $newArray[$index][] = $value;
    }
}
echo '<pre>';
print_r($newArray);*/






$array = array(
    array(1, 2),
    array(3, 4),
    array(5, 6)
);

// Transpose the array
$transposedArray = array_map(null, ...$array);

// Output array
$outputArray = array_map(static function ($row) {
    return array_values($row);
}, $transposedArray);

// Print the output array
echo '<pre>';
print_r($outputArray);




