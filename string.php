<?php
$messege = "We all love laravel and laravel loves us";

//uppercase :
$upper_messege = strtoupper($messege);

echo "Uppercase : $upper_messege <br>";

//lenght:
$strlen = strlen ($messege);

echo "Lenght of the string :  $strlen <br>" ;

 // substr:
$substr = substr($messege,4,10);

echo "SubSTR of the string : $substr <br>";

// Replace a word :
$replace = str_replace("laravel","Java", $messege);
echo "After the replacement: $replace  " ;

?>

