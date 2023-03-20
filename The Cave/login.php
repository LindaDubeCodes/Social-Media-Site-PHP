<?php
  session_start();
  if(isset($_SESSION['unique_ID'])){
    header("location: users.php");
  }

  ?>

<?php
include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>The Pentegram</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="link">Don't have an account?<a href="index.php">sign-up</a></div>
        </section>
    </div>

    <script src="assets/scripts/pass-show.js"></script>
    <script src="assets/scripts/login.js"></script>
</body>

</html>