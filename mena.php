<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <title>Vloženie mena do databázy</title>
  <style>
              .login-panel {
            padding: 200px;
            text-align:center;
        }
body {
  background-image: url('biliard.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h3 {color:white;}

    </style>
</head>
<body>
<div class="login-panel">

<h3>Vložte svoje meno do databázy</h3>
<form action="insert.php" method="POST">
  <input type="text" name="fullname" placeholder="Zadaj meno" Required>
  <br/>
  <input type="text" name="age" placeholder="Zadaj vek" Required>
  <br/>
  <input type="submit" name="submit" value="Odoslať">
</form>
</div>
</body>
</html>