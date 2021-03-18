<?php
session_start();
require_once 'connectDB.php';
$con = connectDB();

$id_pro = $_SESSION['id'];
$name_pro = $_SESSION["item_name"];
$total = $_SESSION["total"];

echo $id_pro;
echo $name_pro;
echo $total;
?>