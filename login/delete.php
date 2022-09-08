<?php

$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=hospital",'root','');
$query = $db->query("DELETE FROM `user` where `id`= '$id'");

if($query)
{
    header("location:index.php");}
    
