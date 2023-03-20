<?php 
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>The Pentegram</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" placeholder="firstname" required>
                    </div>
                    <div class="field input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" placeholder="lastname" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Profile Picture</label>
                    <input type="file" name="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Sign-up">
                </div>
            </form>
            <div class="link">already signed up?<a href="login.php">Login</a></div>
        </section>
    </div>

    <script src="assets/scripts/pass-show.js"></script>

    <script src="assets/scripts/sign-up.js" async defer></script>
</body>


</html>