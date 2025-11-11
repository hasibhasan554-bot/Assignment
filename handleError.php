<?php
function divideNumbers($num1, $num2) {
    try {
        // Check for division by zero
        if ($num2 == 0) {
            throw new Exception("Division by zero is not allowed.");
        }

        $result = $num1 / $num2;
        echo "Result: $result <br>";
    } 
    catch (Exception $e) {
        // Handle the error
        echo "Error: " . $e->getMessage() . "<br>";
    } 
    finally {
        // This block always runs
        echo "Division operation completed.<br>";
    }
}

// Example calls
divideNumbers(10, 2);
divideNumbers(8, 0);
?>
