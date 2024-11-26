13. Write a PHP script to find the maximum and minimum of an array without built-in functions.

<?php
$arr = [3, 1, 4, 1, 5];
$max = $arr[0];
$min = $arr[0];
foreach ($arr as $val) {
    if ($val > $max) $max = $val;
    if ($val < $min) $min = $val;
}
echo "Max: $max, Min: $min\n";
?>


output

Max: 5, Min: 1
