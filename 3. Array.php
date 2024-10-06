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
        // Define an array
        $numbers = array(10, 20, 30, 40, 50);

        // Accessing elements of an array
        echo "Element at index 2: " . $numbers[2] . "<br>";

        // Adding an element to the end of an array
        $numbers[] = 60;
        echo "After adding an element: ";
        print_r($numbers);
        echo "<br>";

        // Removing the last element from an array
        array_pop($numbers);
        echo "After removing the last element: ";
        print_r($numbers);
        echo "<br>";

        // Adding an element to the beginning of an array
        array_unshift($numbers, 5);
        echo "After adding an element to the beginning: ";
        print_r($numbers);
        echo "<br>";

        // Removing the first element from an array
        array_shift($numbers);
        echo "After removing the first element: ";
        print_r($numbers);
        echo "<br>";

        // Count the number of elements in an array
        $count = count($numbers);
        echo "Number of elements: " . $count . "<br>";

        // Check if a value exists in an array
        $exists = in_array(30, $numbers) ? "Yes" : "No";
        echo "Does 30 exist in the array? " . $exists . "<br>";

        // Search for a value in an array and return its key
        $key = array_search(40, $numbers);
        echo "Key of value 40: " . $key . "<br>";

        // Sorting an array in ascending order
        sort($numbers);
        echo "Sorted array (ascending order): ";
        print_r($numbers);
        echo "<br>";

        // Sorting an array in descending order
        rsort($numbers);
        echo "Sorted array (descending order): ";
        print_r($numbers);
        echo "<br>";

        // Reversing the order of elements in an array
        $reversed = array_reverse($numbers);
        echo "Reversed array: ";
        print_r($reversed);
        echo "<br>";

        // Combining two arrays
        $moreNumbers = array(70, 80, 90);
        $combined = array_merge($numbers, $moreNumbers);
        echo "Combined array: ";
        print_r($combined);
        echo "<br>";

        // Removing duplicate values from an array
        $unique = array_unique($combined);
        echo "Array with duplicate values removed: ";
        print_r($unique);
        echo "<br>";

        // Extracting a slice of an array
        $slice = array_slice($combined, 2, 4);
        echo "Slice of array: ";
        print_r($slice);
        echo "<br>";

        // Checking if an array is empty
        $isEmpty = empty($numbers) ? "Yes" : "No";
        echo "Is the array empty? " . $isEmpty . "<br>";

    ?>

    
</body>
</html>