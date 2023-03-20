<?php
    session_start(); 
    include_once "config.php";


    $outgoing_id = $_SESSION['unique_ID'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM users WHERE NOT unique_ID = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
         include_once "data.php";

    }else{
        $output .= "No results found";
    }
    echo $output;
?>