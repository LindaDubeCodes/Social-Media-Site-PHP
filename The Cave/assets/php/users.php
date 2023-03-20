<?php
session_start(); //Start new or resume existing session//
include_once "config.php";
$outgoing_id = $_SESSION['unique_ID'];
$sql = "SELECT * FROM users WHERE NOT unique_ID = {$outgoing_id} ORDER BY user_id DESC";
$query= mysqli_query($conn,$sql);
$output = "";

if(mysqli_num_rows($query) == 0){
    $output .= "It seems people are offline";
}
elseif(mysqli_num_rows($query) > 0){
       include_once "data.php";
}
echo $output;
?>