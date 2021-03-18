<?php
session_start();
require_once 'connectDB.php';
$con = connectDB();

$name_user = $_POST['username'];
$id_pro = $_SESSION['id'];
$name_pro = $_SESSION["item_name"];
$total = $_SESSION["total"];

$sql = "INSERT INTO invoice (name_cust, id_pro, name_pro, total) VALUES ('$name_user', '$id_pro', 
          '$name_pro', '$total')";

if (pg_query($con,$sql)) {
    echo "Saving successfully.";
} else {
    echo "Failed saving.";
}  
?>