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
    // Get the current timestamp
    $currentTimestamp = time();

    // Get the current date and time in a specified format
    $currentDateTime = date("Y-m-d H:i:s");

    // Display the current timestamp and date-time
    echo "Current Timestamp: $currentTimestamp <br>";
    echo "Current Date and Time: $currentDateTime <br>";

    // Convert a timestamp to a formatted date
    $timestamp = strtotime("2022-01-01 12:00:00");
    $formattedDate = date("F j, Y, g:i a", $timestamp);
    echo "Formatted Date: $formattedDate <br>"; // Output: Formatted Date: January 1, 2022, 12:00 pm

    // Convert a date to a timestamp
    $dateString = "2030-05-15";
    $timestampFromDate = strtotime($dateString);
    echo "Timestamp from Date: $timestampFromDate <br>"; // Output: Timestamp from Date: 1894579200
  ?>

</body>
</html>