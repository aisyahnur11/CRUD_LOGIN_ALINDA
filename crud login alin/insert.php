<?php
$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];

$db = new PDO("mysql:host=localhost;dbname=hospital","root","");
$query = $db->query("insert into user values('','$username','$password','$role')");

if($query)
{
    header("location:index.php");
}