<?php

$expensedata = "'food'=> 450,'transport' => 350,'others' => 100 ";

$filename = "expenses.txt" ;

file_put_contents ($filename, $expensedata);

echo $filename ;

?>


<?php
$filename = "expenses.txt" ;

$newExpenses = "study => 300";

file_put_contents ($filename, $newExpenses);

echo $newExpenses ;




?>