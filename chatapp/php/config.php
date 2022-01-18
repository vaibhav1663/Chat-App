<?php
    $conn = mysqli_connect("localhost","root","Pass@123","chat");
    if(!$conn){
        echo "Connected" . mysqli_connect_error();
    }
?>