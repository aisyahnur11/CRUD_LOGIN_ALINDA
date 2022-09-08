<?php

$username = $_POST['username'];
$password = $_POST['passsword'];
$role = $_POST['role']; 

$db = new PDO("mysql:host=localhost;dbname=hospital", 'root','');
$query = $db->query("UPDATE `user` SET username='$username',password='$password',role='$role' WHERE id='$id' ");

if($query)
{
    header("location:index.php");
}