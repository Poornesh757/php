<!DOCTYPE html>
<html>
<head>
    <title>Form Example with Validation</title>
</head>
<body>

<?php
// Define variables and initialize with empty values
$name = $email = "";
$name_err = $email_err = "";

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $name_err = "Please enter your name.";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_err = "Only letters and white space allowed.";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $email_err = "Please enter your email.";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    }
}

// Function to sanitize and validate input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Form Example with Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $name_err; ?></span>
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $email_err; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
