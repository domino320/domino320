<?php

$db = mysqli_connect("localhost","root","","mena");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>