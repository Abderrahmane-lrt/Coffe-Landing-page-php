<?php 

$dsn = "mysql:host=localhost;dbname=login";
$username = "root";
$pass = "";
try 
{
    $con = new PDO($dsn, $username, $pass);
}
catch (PDOException $e)
{
    die("error ". $e->getMessage());
}