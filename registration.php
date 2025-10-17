<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>

<?php
// --------------------------------------------------------
// PHP Section: Handle form submission and display result
// --------------------------------------------------------

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user inputs from the POST array
    // $_POST is a superglobal array that holds all data sent via POST method
    $firstname = $_POST['firstname'];  
    $age = $_POST['age'];              
    $gender = $_POST['gender'];        
    $quote = $_POST['quote'];          

    // Combine the user inputs into a formatted message
    $msg = "You are " . $firstname . ", a " . $age . "-year-old " . $gender . ". Your motto in life is: " . $quote;

    // Display a success message and the formatted user data
    echo "<h2>Registration Successful!</h2>";
    echo "<p>$msg</p>";
    echo "<hr>";
}
?>

<!-- --------------------------------------------------------
     HTML Section: Registration Form
     --------------------------------------------------------
     The form collects user data and submits it using POST.
     Each field is required so the browser prevents empty submissions.
-->

<form method="POST" action="">
    <!-- Input field for First Name -->
    <div>
        <div>First Name</div>
        <div><input type="text" name="firstname" required /></div>
    </div>

    <!-- Input field for Age -->
    <div>
        <div>Age</div>
        <div><input type="number" name="age" required /></div>
    </div>

    <!-- Dropdown menu for Gender selection -->
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

    <!-- Textarea for user's Quote or Motto -->
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
