<?php
// Main function that applies discount using a callback
function applyDiscount($amount, $callback) {
    // Call the callback function to calculate the discount
    $discount = $callback($amount);
    // Subtract discount from total amount
    $finalPrice = $amount - $discount;
    return $finalPrice;
}

// Callback function to calculate 10% discount
function tenPercentDiscount($amount) {
    return $amount * 0.10;
}

// Callback function to calculate 20% discount
function twentyPercentDiscount($amount) {
    return $amount * 0.20;
}

// Using the callback functions
$total1 = applyDiscount(1000, 'tenPercentDiscount');
$total2 = applyDiscount(2000, 'twentyPercentDiscount');

echo "Final price after 10% discount: $total1 <br>";
echo "Final price after 20% discount: $total2";
?>
