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
    <?php
        // Variables and Data Types

        // String variable
        $name = "John";

        // Integer variable
        $age = 30;

        // Float variable
        $height = 6.2;

        // Boolean variable
        $isStudent = true;

        // Array variable
        $fruits = array("Apple", "Banana", "Orange");

        // Associative array variable
        $person = array("name" => "John", "age" => 30, "isStudent" => true);

        // Null variable
        $nullVar = null;

        // Working with dates
        $currentDate = date("Y-m-d"); // Get current date in YYYY-MM-DD format
        $currentTime = date("H:i:s"); // Get current time in HH:MM:SS format

        // Displaying variables
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Height: " . $height . "<br>";
        echo "Is student? " . ($isStudent ? "Yes" : "No") . "<br>";

        // Displaying array elements
        echo "Fruits: ";
        foreach ($fruits as $fruit) {
            echo $fruit . ", ";
        }
        echo "<br>";

        // Displaying associative array elements
        echo "Person:<br>";
        echo "Name: " . $person["name"] . "<br>";
        echo "Age: " . $person["age"] . "<br>";
        echo "Is student? " . ($person["isStudent"] ? "Yes" : "No") . "<br>";

        // Displaying null variable
        echo "Null variable: " . var_export($nullVar, true) . "<br>";

        // Displaying current date and time
        echo "Current date: " . $currentDate . "<br>";
        echo "Current time: " . $currentTime . "<br>";
    ?>

</body>
</html>