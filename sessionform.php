<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['budget'] = $_POST['budget'];

    echo "<h3>Session started successfully!</h3>";
    echo "<p><b>User Name:</b> " . $_SESSION['username'] . "</p>";
    echo "<p><b>Budget:</b> $" . $_SESSION['budget'] . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Budget Form</title>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form method="POST" action="">
        <label for="username">Name:</label>
        <input type="text" name="username" required><br><br>

        <label for="budget">Budget:</label>
        <input type="number" name="budget" required><br><br>

        <input type="submit" value="Start Session">
    </form>
</body>
</html>




<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store user input into session
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['budget'] = $_POST['budget'];
}

// If session data exists, show the message
if (isset($_SESSION['username']) && isset($_SESSION['budget'])) {
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['username']) . "! Your budget is $" . htmlspecialchars($_SESSION['budget']) . ".</h2>";
} else 
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Budget Form</title>
</head>
<body>
    <h2>Enter Your Name and Budget</h2>
    <form method="POST" action="">
        <label for='username'>Name:</label>
        <input type='text' name='username' required><br><br>

        <label for='budget'>Budget:</label>
        <input type='number' name='budget' required><br><br>

        <input type='submit' value='Submit'>
    </form>
</body>
</html


<?php
// Start the session
session_start();

// If the user submits the form, store data in session
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['budget'] = $_POST['budget'];
}

// If the user clicks "Delete Session", clear session data
if (isset($_POST['delete'])) {
    session_unset();     // Remove all session variables
    session_destroy();   // Destroy the session
    echo "<h3>Session deleted successfully!</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Budget Form</title>
</head>
<body>
    <?php if (isset($_SESSION['username']) && isset($_SESSION['budget'])): ?>
        <h2>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>! 
        Your budget is $<?= htmlspecialchars($_SESSION['budget']); ?>.</h2>

        <form method="POST" action="">
            <input type="submit" name="delete" value="Delete Session">
        </form>

    <?php else: ?>
        <h2>Enter Your Name and Budget</h2>
        <form method="POST" action="">
            <label for="username">Name:</label>
            <input type="text" name="username" required><br><br>

            <label for="budget">Budget:</label>
            <input type="number" name="budget" required><br><br>

            <input type="submit" name="save" value="Save">
        </form>
    <?php endif; ?>
</body>
</html>
