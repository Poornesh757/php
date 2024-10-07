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
    // Define variables for comparison
    $a = 10;
    $b = 5;
    $c = 10;

    // Equal to (==) operator
    if ($a == $c) {
        echo "$a is equal to $c <br>"; // Output: 10 is equal to 10
    }

    // Not equal to (!=) operator
    if ($a != $b) {
        echo "$a is not equal to $b <br>"; // Output: 10 is not equal to 5
    }

    // Identical (===) operator
    if ($a === $c) {
        echo "$a is identical to $c <br>"; // Output: 10 is identical to 10
    }

    // Not identical (!==) operator
    if ($a !== $b) {
        echo "$a is not identical to $b <br>"; // Output: 10 is not identical to 5
    }

    // Greater than (>) operator
    if ($a > $b) {
        echo "$a is greater than $b <br>"; // Output: 10 is greater than 5
    }

    // Less than (<) operator
    if ($b < $a) {
        echo "$b is less than $a <br>"; // Output: 5 is less than 10
    }

    // Greater than or equal to (>=) operator
    if ($a >= $c) {
        echo "$a is greater than or equal to $c <br>"; // Output: 10 is greater than or equal to 10
    }

    // Less than or equal to (<=) operator
    if ($b <= $a) {
        echo "$b is less than or equal to $a <br>"; // Output: 5 is less than or equal to 10
    }
   ?>
  <?php

    // Define variables
    $temperature = 25;

    // Basic if statement
    if ($temperature > 30) {
        echo "It's a hot day! <br>"; // This will not be executed in this example
    }

    // If-else statement
    if ($temperature > 30) {
        echo "It's a hot day! <br>"; // This will not be executed in this example
    } else {
        echo "It's not too hot today. <br>"; // Output: It's not too hot today.
    }

    // If-elseif-else statement
    if ($temperature > 30) {
        echo "It's a hot day! <br>"; // This will not be executed in this example
    } elseif ($temperature > 20) {
        echo "It's a pleasant day. <br>"; // Output: It's a pleasant day.
    } else {
        echo "It's a cold day. <br>";
    }

    // Using comparison operators within if conditionals
    $number = 10;
    if ($number % 2 == 0) {
        echo "$number is even. <br>"; // Output: 10 is even.
    } else {
        echo "$number is odd. <br>"; 
    }
  ?>

  <?php

    // Define a variable
    $grade = 'B';

    // Using switch statement
    switch ($grade) {
        case 'A':
            echo "Excellent! <br>"; // This will not be executed in this example
            break;
        case 'B':
            echo "Good job! <br>"; // Output: Good job!
            break;
        case 'C':
            echo "Fair enough. <br>"; // This will not be executed in this example
            break;
        case 'D':
            echo "Needs improvement. <br>"; // This will not be executed in this example
            break;
        default:
            echo "Invalid grade. <br>"; // This will not be executed in this example
    }

    // Using switch statement with multiple cases
    $day = 'Monday';
    switch ($day) {
        case 'Monday':
        case 'Tuesday':
        case 'Wednesday':
        case 'Thursday':
        case 'Friday':
            echo "It's a weekday. <br>"; // Output: It's a weekday.
            break;
        case 'Saturday':
        case 'Sunday':
            echo "It's a weekend. <br>"; // This will not be executed in this example
            break;
        default:
            echo "Invalid day. <br>"; // This will not be executed in this example
    }

  ?>

</body>
</html>