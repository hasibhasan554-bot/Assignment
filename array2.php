<?php
//converting a string to an array:

$expense = "500,700,200,350";

$expense = explode(",",$expense);
echo"<pre>";
print_r($expense);
echo "</pre> <br>";
?>

<?php
//back to string :

$expense = ['500','700','200','350'] ;

$expense = implode(",", $expense);

echo "<pre>";
print_r($expense);
echo "</pre> <br>";

?>