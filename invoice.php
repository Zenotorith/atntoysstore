<?php
session_start();
require_once 'connectDB.php';
$con = connectDB();

$name_user = $_POST['username'];
$id_pro = $_SESSION['id'];
$name_pro = $_SESSION["item_name"];
$total = $_SESSION["total"];

echo $name_user;
?>