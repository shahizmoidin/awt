10. Reverse a number and calculate the sum of its digits in PHP.

<?php
$num = 1234;
$reverse = strrev($num);
$sum = array_sum(str_split($num));
echo "Reversed: $reverse\nSum: $sum\n";
?>


output 

Reversed: 4321  
Sum: 10
