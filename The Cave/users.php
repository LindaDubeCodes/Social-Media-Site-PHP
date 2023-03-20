<?php
session_start();
include_once "assets/php/config.php";
if(!isset($_SESSION['unique_ID'])){
    header("location: login.php");
}
?>

<?php 
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="user">
            <header>
                <div class="content">
                    <?php 
                $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_ID = {$_SESSION['unique_ID']}");
                if(mysqli_num_rows($sql)> 0){
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                    <img src="assets/php/images/<?php echo $row['picture']; ?> " alt="">
                    <div class="details">
                        <span><?php echo $row['fname']. " " .$row['lname'] ?></span>
                        <p><?php echo $row['user_status']; ?></p>
                    </div>
                </div>
                <a href="assets/php/logout.php?logout_id= <?php echo $row['unique_ID']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select user to start chatting</span>
                <input type="text" placeholder="enter username.....">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>

    <script src="assets/scripts/users.js" async defer></script>
</body>

</html>