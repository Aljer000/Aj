<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve all posted form data
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $quote = $_POST['quote'];

    // Create message
    $msg = "You are " . $firstname . ", A " . $age . "-year-old " . $gender . ". Your motto in life is: " . $quote;

    // Display the message
    echo "<h2>Registration Successful!</h2>";
    echo "<p>$msg</p>";
    echo "<hr>";
}
?>

<!-- Registration Form -->
<form method="POST" action="">
    <!-- Input First Name -->
    <div>
        <div>First Name</div>
        <div><input type="text" name="firstname" required /></div>
    </div>

    <!-- Input Age -->
    <div>
        <div>Age</div>
        <div><input type="number" name="age" required /></div>
    </div>

    <!-- Input Gender -->
    <div>
        <div>Gender</div>
        <div>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
    </div>

    <!-- Input Quote in Life -->
    <div>
        <div>Quote in Life</div>
        <div><textarea name="quote" required></textarea></div>
    </div>

    <!-- Submit Button -->
    <div>
        <div><input type="submit" value="Submit" /></div>
    </div>
</form>

</body>
</html>