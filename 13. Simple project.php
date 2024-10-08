<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.m.wikipedia.org%2Fwiki%2FFile%3APHP-logo.svg&psig=AOvVaw2wEqu0605tbsLrMq34QVO4&ust=1712563875411000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCND7oN7Tr4UDFQAAAAAdAAAAABAE" type="image/x-icon">
    <meta http-equiv="refresh" content="300">
    <title>Full PHP Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="nav-header">
                <a class="navbar-brand" href="/php/12. Simple project.php">
                    <h4>Contack Form</h4>
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="form-group">
                Name: <input type="text" name="fname" class="form-control">
            </div>
            <div class="form-group">
                Phone: <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                Email: <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                Message: <input type="text" name="message" class="form-control">
            </div>
            <button type="submit" class="form-control">Submit</button>
        </form>
    </div>
    <?php
    if ($_POST) {
        $name = "";
        $phone = "";
        $email = "";
        $message =$_POST['$message'];

            if(isset($_POST['fname'])){
                $name=filter_var($_POST['$fname'],FILTER_SANITIZE_STRING);
            }

            if(isset($_POST['fname'])){
                $phone=filter_var($_POST['$phone'],FILTER_SANITIZE_NUMBER_INT);
           
            }
            if(isset($_POST['email'])){
                $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            }
        $sub='contact form';
        $content="form: Microdegree \n Message:$message";
        $header="form:text@text.com";
            mail($email, $sub, $content, $header)or die("Error!!");
            echo "Thank You!";
    echo $name.'br'.$phone.'br'.$email.'br'.$message;
    }
    ?>
</body>

</html>