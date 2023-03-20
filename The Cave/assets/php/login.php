<?php
    session_start();  //Start new or resume existing session//
    include_once "config.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '{$email}'");
        
        if(mysqli_num_rows($sql) > 0){ 
            $row = mysqli_fetch_assoc($sql); 
            $enc_pass = $row['user_password'];
            $user_pass = md5($password);
            
            
            if($user_pass === $enc_pass){
                $status = "online";
                $sql2 = mysqli_query($conn, "UPDATE users SET user_status= '{$status}' WHERE unique_ID = {$row['unique_ID']}");
            
                if($sql2){
                    $_SESSION['unique_ID'] = $row['unique_ID'];
                    echo "success";
                }
                else{echo "somwthing went wrong. Please try again!";}
            }
            else{echo "Password is incorrect!";}
         }
         else{echo "$email is not a valid email address!";}
    } 
    else{echo "All input fields are required!";}

?>