5.Write a PHP script to demonstrate array-related functions.

<?php
$arr = [5, 10, 15];
echo "Count: " . count($arr) . "\n";
echo "Sum: " . array_sum($arr) . "\n";
echo "Reversed: "; print_r(array_reverse($arr));
?>

output

Count: 3  
Sum: 30  
Reversed: Array ( [0] => 15 [1] => 10 [2] => 5 )
