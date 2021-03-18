<?php
function connectDB() {
    $con = pg_connect('dbname=d2hajjn501jrck host=ec2-54-161-239-198.compute-1.amazonaws.com 
                       port=5432 user=zsotcfxkvgqymw 
                       password=0a33c4b8f9ff68a68e55024cce26ebd73788f5bb5d6f1b25ffffa46b8bc21d0a 
                       sslmode=require');
    if (!$con) {
    echo "Database connection failed.";
    } else {
        return $con;
    }
}
?>