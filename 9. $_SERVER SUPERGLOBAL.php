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

    // Example usage of $_SERVER superglobal

    // Get the client's IP address
    $client_ip = $_SERVER['REMOTE_ADDR'];

    // Get the server's hostname
    $server_hostname = $_SERVER['SERVER_NAME'];

    // Get the request method (GET, POST, etc.)
    $request_method = $_SERVER['REQUEST_METHOD'];

    // Get the URI being requested
    $request_uri = $_SERVER['REQUEST_URI'];

    // Get the user agent of the client's browser
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Output the information
    echo "Client IP Address: $client_ip <br>";
    echo "Server Hostname: $server_hostname <br>";
    echo "Request Method: $request_method <br>";
    echo "Request URI: $request_uri <br>";
    echo "User Agent: $user_agent <br>";
  ?>

</body>
</html>