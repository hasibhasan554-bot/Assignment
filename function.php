<?php


$food = 200 ;
$transport = 300;
$others = 200;

$total = ($food + $transport + $others);


function calculate_expense (int $food, int $transport,int $others ) : Int{ 

return $total ;
}

echo "Total Expense : $total <br>";

?>

<?php

//another function to check the budge:

function checkBudget( int $total){
    

    switch ($total){
        case ($total< 500):
            echo "Low Budget";
            break;
        case ($total>=500 && $total<=1000):
            echo "Moderate Budget";
            break;
         case ($total>100):
            echo "High Budget"   ;  
            break ;
    }

}


echo checkBudget ($total);



?>