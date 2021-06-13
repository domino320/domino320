<?php
    session_start();

    if(!$_SESSION['email'])
    {
        header("Location: login.php");  //Redirect to login page to secure the welcome page without login access
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/scripts/my.css" />

    <title>Vítajte</title>
</head>

<body>
<body background="biliard.jpg">
<h1>Vítajte na stránkach Biliard Club-Café </h1><?php echo $_SESSION['email']; ?>

<h3><a href="logout.php">Odhlástiť sa tu</a></h3>

</body>

</html>

