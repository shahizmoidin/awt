4. Show implicit and explicit type conversion in PHP.

<?php
$implicit = 10 + "20"; // Implicit
$explicit = (int)"30"; // Explicit
echo "Implicit: $implicit\n";
echo "Explicit: $explicit\n";
?>

output:

Implicit: 30  
Explicit: 30
