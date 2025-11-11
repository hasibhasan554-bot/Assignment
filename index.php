<?php
// 🟢 Function to calculate total expense
function calculateTotalExpense($food, $transport, $other) {
    $total = $food + $transport + $other;
    return $total;
}

// 🟠 Function to check budget and show result
function checkBudget($total) {
    // Using ternary operator
    $message = ($total > 1000) ? "Budget Exceeded" : "Within Budget";
    echo "Status: $message<br>";

    // Using switch case for expense range
    switch (true) {
        case ($total < 500):
            echo "Expense Level: Low Expense";
            break;
        case ($total >= 500 && $total <= 1000):
            echo "Expense Level: Moderate Expense";
            break;
        case ($total > 1000 && $total <= 2000):
            echo "Expense Level: High Expense";
            break;
        default:
            echo "Expense Level: Very High Expense!";
    }
}

// 🧮 Example usage
$food = 400;
$transport = 300;
$other = 250;

$total = calculateTotalExpense($food, $transport, $other);

echo "Total Expense: $total<br>";
checkBudget($total);
?>
