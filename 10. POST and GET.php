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
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="name"><br>
      Email: <input type="text" name="email"><br>
      <input type="submit">
  </form>

  <?php
  // Handling form submission via POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieving data from $_POST
      $name = $_POST['name'];
      $email = $_POST['email'];

      // Processing the data
      echo "<h2>Form Data (POST Method)</h2>";
      echo "Name: $name <br>";
      echo "Email: $email <br>";
  }

  // Handling form submission via GET method
  if (isset($_GET['name']) && isset($_GET['email'])) {
      // Retrieving data from $_GET
      $name = $_GET['name'];
      $email = $_GET['email'];

      // Processing the data
      echo "<h2>Form Data (GET Method)</h2>";
      echo "Name: $name <br>";
      echo "Email: $email <br>";
  }
  ?>
</body>
</html>