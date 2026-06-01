<?php
//database conection syntax
$conn = mysqli_connect("localhost", "root", "", "Week5db");

if($conn){
    echo "Connected Successfully";
} else {
    echo "Connection Failed";
}

?>