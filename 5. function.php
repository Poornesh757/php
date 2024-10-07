<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.m.wikipedia.org%2Fwiki%2FFile%3APHP-logo.svg&psig=AOvVaw2wEqu0605tbsLrMq34QVO4&ust=1712563875411000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCND7oN7Tr4UDFQAAAAAdAAAAABAE" type="image/x-icon">
    <meta http-equiv="refresh" content="300">
    <title>Full PHP Course</title>
</head>
<body>
  <?php
    // Function to calculate the area of a rectangle
    function calculateRectangleArea($length, $width) {
        $area = $length * $width;
        return $area;
    }

    // Function to greet a person
    function greet($name) {
        echo "Hello, $name!";
    }

    // Function to check if a number is even
    function isEven($number) {
        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    // Function to generate a random password
    function generateRandomPassword($length = 8) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    // Using the functions
    $area = calculateRectangleArea(5, 10);
    echo "Area of the rectangle: $area <br>";

    greet("John");
    echo "<br>";

    $number = 12;
    if (isEven($number)) {
        echo "$number is even. <br>";
    } else {
        echo "$number is odd. <br>";

    }

    $password = generateRandomPassword(12);
    echo "Generated password: $password <br>";
  ?>

  <?php
    // Function to increment a number by value
    function incrementByValue($num) {
        $num++;
        return $num;
    }

    // Function to increment a number by reference
    function incrementByReference(&$num) {
        $num++;
    }

    // Using the functions
    $number = 5;

    // Pass by value
    $newNumber = incrementByValue($number);
    echo "Original number: $number <br>"; // Output: Original number: 5
    echo "Number incremented by value: $newNumber <br>"; // Output: Number incremented by value: 6
    echo "<br>";

    // Pass by reference
    incrementByReference($number);
    echo "Number incremented by reference: $number"; // Output: Number incremented by reference: 6
  ?>

  <?php

    // Function to add two numbers and return the result
    function add($a, $b) {
        $sum = $a + $b;
        return $sum;
    }

    // Function to check if a number is even and return true if it is, false otherwise
    function isEven($number) {
        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }
    

    // Function to calculate the area of a circle and return it
    function calculateCircleArea($radius) {
        $area = pi() * $radius * $radius;
        return $area;
    }

    // Using the functions
    $result = add(5, 3);
    echo "The sum of 5 and 3 is: $result <br>"; // Output: The sum of 5 and 3 is: 8

    $number = 10;
    if (isEven($number)) {
        echo "$number is even. <br>"; // Output: 10 is even.
    } else {
        echo "$number is odd. <br>";
    }

    $radius = 5;
    $area = calculateCircleArea($radius);
    echo "The area of a circle with radius $radius is: $area"; // Output: The area of a circle with radius 5 is: 78.539816339745
  ?>

</body>
</html>