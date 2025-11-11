<?php


$food = 450;
$transport = 350;
$others = 100 ;

$total = $food + $transport + $others ;

echo "Total budget : $total <br>";

if($total > 1000){
    echo "Budget Exceeded";
}else {
    echo "Within budget <br>";
} 
 
?>

<?php
//Use ternary and switch case:

 $message = 900;

 echo $message > 1000 ?   "Budget Exceeded" : "Within Budget  <br>" ;

 // using switch case: 

    switch($total){
        case ($total<= 500):
            echo "Low expense <br>" ;
            break;

        case($total>= 500 && $total <1000):
            echo "Moderate Expense  <br>";
            break;

         case ($total > 1000):
            echo "High Expense <br>" ;
            
       



    }



?>