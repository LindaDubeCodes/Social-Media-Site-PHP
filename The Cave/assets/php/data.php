<?php
    include_once 'config.php';
    ?>

<?php
     while($row = mysqli_fetch_assoc($query))
     {
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_ID']}
                OR  outgoing_msg_id = {$row['unique_ID']}) AND (outgoing_msg_id = {$outgoing_id}
                OR  incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);

      /*  if(mysqli_num_rows($query2) > 0){
            $result = $row2['msg'];
        } else{
            $result = "No message available. Please try again";
        }*/

        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No Message available";
        (strlen($result) > 28) ? $message = substr($result, 0, 28) . '...' : $message = $result;

       if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: ": $you;
       }
        else{
          $you = "";
       }

     ($row['user_status'] == "offline") ? $offline = "offline" : $offline = "";
       ($outgoing_id == $row['unique_ID']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['unique_ID'] .'">
                        <div class="content">
                        <img src="assets/php/images/'. $row['picture'].'" alt="">
                        <div class="details">
                        <span>'.$row['fname']. " " .$row['lname'].'</span>
                        <p>'.$you . $message.'</p>
                        </div>
                        </div>
                        <div class="status-dot "><i class="fas fa-circle"></i>
                        </div>
                        </a>';
    }
?>