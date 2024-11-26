12. Find the second most frequent element in an array without built-in functions.

<?php
$arr = [1, 2, 2, 3, 3, 3, 4];
$count = [];
foreach ($arr as $val) $count[$val] = isset($count[$val]) ? $count[$val] + 1 : 1;

arsort($count);
$values = array_keys($count);
echo "Second Most Frequent: " . $values[1] . "\n";
?>


output

Second Most Frequent: 2
