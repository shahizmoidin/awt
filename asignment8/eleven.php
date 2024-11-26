11. Write a PHP script to find the first 20 prime numbers.

<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$primes = [];
$num = 2;
while (count($primes) < 20) {
    if (isPrime($num)) $primes[] = $num;
    $num++;
}
print_r($primes);
?>

output

Array
(
    [0] => 2
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 11
    [5] => 13
    [6] => 17
    [7] => 19
    [8] => 23
    [9] => 29
    [10] => 31
    [11] => 37
    [12] => 41
    [13] => 43
    [14] => 47
    [15] => 53
    [16] => 59
    [17] => 61
    [18] => 67
    [19] => 71
)

