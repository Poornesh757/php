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
    <!-- For loop -->
    <?php
        // Using a for loop to print numbers from 1 to 5
        echo "Printing numbers from 1 to 5 using a for loop: <br>";
        for ($i = 1; $i <= 5; $i++) {
            echo $i . "<br>";
        }

        // Using a for loop to iterate over an array
        echo "Iterating over an array using a for loop: <br>";
        $fruits = array("Apple", "Banana", "Orange", "Grapes", "Mango");
        $arrayLength = count($fruits);
        for ($i = 0; $i < $arrayLength; $i++) {
            echo "Fruit at index $i: " . $fruits[$i] . "<br>";
        }

        // Using a for loop to generate a table
        echo "Generating a multiplication table for 5 using a for loop: <br>";
        echo "<table border='1'>";
        echo "<tr><th>Number</th><th>Result</th></tr>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $i * 5;
            echo "<tr><td>$i</td><td>$result</td></tr>";
        }
        echo "</table>";
    ?>

    <!-- Foreach Loop -->
    
    <?php
        // Iterating over an array using foreach loop
        $fruits = array("Apple", "Banana", "Orange", "Grapes", "Mango");
        echo "Fruits:<br>";
        foreach ($fruits as $fruit) {
            echo $fruit . "<br>";
        }

        // Iterating over an associative array using foreach loop
        $person = array("name" => "John", "age" => 30, "city" => "New York");
        echo "Person:<br>";
        foreach ($person as $key => $value) {
            echo "$key: $value<br>";
        }

        // Iterating over a multidimensional array using foreach loop
        $students = array(
            array("name" => "Alice", "age" => 20),
            array("name" => "Bob", "age" => 22),
            array("name" => "Charlie", "age" => 21)
        );
        echo "Students:<br>";
        foreach ($students as $student) {
            echo "Name: " . $student["name"] . ", Age: " . $student["age"] . "<br>";
        }

        // Iterating over an object using foreach loop
        class Person {
            public $name = "John";
            public $age = 30;
            public $city = "New York";
        }
        $personObject = new Person();
        echo "Person Object:<br>";
        foreach ($personObject as $key => $value) {
            echo "$key: $value<br>";
        }
    ?>
    <!-- While loop -->

    <?php
        // Using a while loop to print numbers from 1 to 5
        echo "Printing numbers from 1 to 5 using a while loop: <br>";
        $i = 1;
        while ($i <= 5) {
            echo $i . "<br>";
            $i++;
        }

        // Using a while loop to iterate over an array until a condition is met
        $numbers = array(2, 4, 6, 8, 10);
        echo "Iterating over an array using a while loop until a condition is met: <br>";
        $total = 0;
        $index = 0;
        while ($total < 20 && $index < count($numbers)) {
            $total += $numbers[$index];
            echo "Total: $total<br>";
            $index++;
        }

        // Using a while loop to read lines from a file
        echo "Reading lines from a file using a while loop: <br>";
        $filename = "example.txt";
        $file = fopen($filename, "r");
        if ($file) {
            while (($line = fgets($file)) !== false) {
                echo "Line: $line<br>";
            }
            fclose($file);
        } else {
            echo "Failed to open the file.";
        }

    ?>
    <!-- Do-while loop -->
    <?php
        // Using a do-while loop to print numbers from 1 to 5
        echo "Printing numbers from 1 to 5 using a do-while loop: <br>";
        $i = 1;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 5);

        // Using a do-while loop to validate user input
        echo "Validating user input using a do-while loop: <br>";
        $guess = 0;
        $target = rand(1, 10); // Generate a random number between 1 and 10
        do {
            $guess = readline("Enter your guess (1-10): ");
        } while ($guess != $target);
        echo "Congratulations! You guessed the correct number ($target).<br>";

        // Using a do-while loop to read lines from a file
        echo "Reading lines from a file using a do-while loop: <br>";
        $filename = "example.txt";
        $file = fopen($filename, "r");
        if ($file) {
            do {
                $line = fgets($file);
                echo "Line: $line<br>";
            } while ($line !== false);
            fclose($file);
        } else {
            echo "Failed to open the file.";
        }

    ?>
</body>
</html>