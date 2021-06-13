<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Vyhľadanie mena v databáze</title>
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
    <div class= "login-panel">
<h3 color="white">Nachádza sa meno v databáze ?</h3>
    <form action="" method="post">
        <input type="text" placeholder="Hľadať" name="search">
        <button type="submit" name="submit">Hľadať</button>
    </form>
</div>
</body>

</html>
<?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "mena");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM clovek WHERE fullname LIKE '%$searchValue%'";

        $result = $con->query($sql);
        
        while ($row = $result->fetch_assoc()) {
            echo "Nájdené meno = ";
            echo  $row['fullname'] . " sa nachádza v databáze";
            
        }

      
    }   
}



?>