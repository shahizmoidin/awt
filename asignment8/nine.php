9. Demonstrate local, global, and static variable scopes in PHP.

<?php
$globalVar = 10; // Global

function test() {
    static $staticVar = 0; // Static
    $localVar = 5; // Local
    $staticVar++;
    echo "Static: $staticVar, Local: $localVar\n";
}

test(); test();
echo "Global: $globalVar\n";
?>

output:

Static: 1, Local: 5  
Static: 2, Local: 5  
Global: 10

