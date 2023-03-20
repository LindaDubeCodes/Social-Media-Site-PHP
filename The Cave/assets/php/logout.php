<?php
session_start();
if (isset($_SESSION['unique_ID'])){
       include_once 'config.php';
       $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
       if(isset($logout_id)){
        $status = "offline";
        $sql = mysqli_query($conn, "UPDATE users SET user_status = '{$status}' WHERE unique_ID = {$_GET['logout_id']}");

        if($sql){
            session_unset();
            session_destroy();
            header("location: .../login.php");
       }
       }
       else{
        header("location: .../users.php");
       }
       }else{
        header("location: .../login.php");
       }


?>