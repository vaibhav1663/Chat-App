<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') AND NOT unique_id = {$outgoing_id}");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= "No user found related to your Search here...";
    }
    echo $output ;
?>