8. Write a PHP script to show pattern matching in PHP.

<?php
$text = "PHP is amazing!";
if (preg_match("/PHP/", $text)) {
    echo "Pattern Found\n";
}
?>

output:

Pattern Found

