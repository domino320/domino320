<?php
include "dbconn.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];

    $insert = mysqli_query($db,"INSERT INTO `clovek`(`fullname`, `age`) VALUES ('$fullname','$age')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Vložené úspešne.";
    }
}

mysqli_close($db); // Close connection
?>