<?php
//creating an array with categories and expenses:

$expense = [
    'food'      => 450,
    'transport' => 350,
    'others'    => 100
];

echo "<pre>";
print_r ($expense);
echo "</pre>";
?>


<?php
//array push:

$expense = [
    'food'      => 450,
    'transport' => 350,
    'others'    => 100
];

array_push($expense,"entertainment => 100");
echo "<pre>";
print_r($expense);
echo"</pre>";

?>


<?php
//array pop :

$expense = [
    'food'      => 450,
    'transport' => 350,
    'others'    => 100
];

array_pop ($expense);

echo "<pre>";
print_r($expense);
echo"</pre>";

?>

<?php

//array merge:

$expense = [
    'food'      => 450,
    'transport' => 350,
    'others'    => 100
];


$budget = [
    'Chicken'      => 300,
    'Vegetable'    => 200,
    'protine'      => 500
];

$budget_expense = array_merge ($expense, $budget);

echo "<pre>";
print_r ($budget_expense) ;
echo "</pre>";
 

?>


<?php
// array sum

$expense = [
    'food'      => 450,
    'transport' => 350,
    'others'    => 100
];

$sum_of_expense = array_sum ($expense);

echo "<pre>";
print_r($sum_of_expense);
echo "</pre>";






?>
