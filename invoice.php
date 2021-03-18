<?php
session_start();
require_once 'connectDB.php';
$con = connectDB();

$name_user = $_POST['username'];
$address_user = $_POST['address'];
$id_pro = $_SESSION['id'];
$name_pro = $_SESSION["item_name"];
$total = $_SESSION["total"];

$sql = "INSERT INTO invoice (name_cust, address_cust, id_pro, name_pro, total) VALUES ('$name_user', '$address_user' ,'$id_pro', 
          '$name_pro', '$total')";

if (pg_query($con,$sql)) {
    echo "Saving successfully.";
} else {
    echo "Failed saving.";
}  
?>