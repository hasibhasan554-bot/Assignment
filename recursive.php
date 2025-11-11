<?php
// Recursive function to calculate sum of array elements
function recursiveSum($arr) {
    // Base case: if array is empty
    if (empty($arr)) {
        return 0;
    } else {
        // Take first element + sum of the rest (recursive call)
        return array_shift($arr) + recursiveSum($arr);
    }
}

// Example array
$numbers = [10, 20, 30, 40, 50];

// Call the function
$total = recursiveSum($numbers);

// Display result
echo "The sum of the array elements is: $total";
?>
