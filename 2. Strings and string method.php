<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.m.wikipedia.org%2Fwiki%2FFile%3APHP-logo.svg&psig=AOvVaw2wEqu0605tbsLrMq34QVO4&ust=1712563875411000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCND7oN7Tr4UDFQAAAAAdAAAAABAE" type="image/x-icon">
    <meta http-equiv="refresh" content="300">
    <title>Full PHP Course</title>
</head>
<body>
    <!-- Strings and String method -->
    <?php
    // Define a string variable
    $string = "Hello, world!";
    
    // String length
    $length = strlen($string);
    echo "Length of the string: " . $length . "<br>";
    
    // Convert string to uppercase
    $uppercase = strtoupper($string);
    echo "Uppercase: " . $uppercase . "<br>";
    
    // Convert string to lowercase
    $lowercase = strtolower($string);
    echo "Lowercase: " . $lowercase . "<br>";
    
    // Replace part of a string
    $replaced = str_replace("world", "PHP", $string);
    echo "After replacement: " . $replaced . "<br>";
    
    // Substring
    $substring = substr($string, 7);
    echo "Substring from position 7: " . $substring . "<br>";
    
    // Check if a string contains another string
    $contains = strpos($string, "world") !== false ? "Yes" : "No";
    echo "Contains 'world'? " . $contains . "<br>";
    
    // Trim whitespace from the beginning and end of a string
    $trimmed = trim("   Hello, world!   ");
    echo "Trimmed string: '" . $trimmed . "'<br>";
    
    // Split a string into an array
    $words = explode(" ", $string);
    echo "Split string into words: ";
    print_r($words);
    ?>


    <?php
    // Define a string containing a number
    $numberString = "12345";
    
    // Convert string to integer
    $number = intval($numberString);
    echo "String to Integer: " . $number . "<br>";
    
    // Convert string to float
    $floatNumber = floatval($numberString);
    echo "String to Float: " . $floatNumber . "<br>";
    
    // Format number with thousands separator
    $formattedNumber = number_format($number);
    echo "Formatted Number: " . $formattedNumber . "<br>";
    
    // Check if the string is numeric
    $isNumeric = is_numeric($numberString) ? "Yes" : "No";
    echo "Is Numeric? " . $isNumeric . "<br>";
    
    // Perform arithmetic operations with numbers in string format
    $addition = $number + 100;
    echo "Addition: " . $addition . "<br>";
    
    $division = $number / 5;
    echo "Division: " . $division . "<br>";
    
    // Extracting individual digits from the string
    $digits = str_split($numberString);
    echo "Digits: ";
    foreach ($digits as $digit) {
        echo $digit . ", ";
    }
    ?>
</body>
</html>