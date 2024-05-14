<?php session_start(); ?>
<?php include "header.php"; ?>
    <?php include "navbar.php"; ?>
    <div class="login-box">
        <h1 class="login-title">Login Form</h1>
        <form method="post" action="login.php" class="login-form">
            <label class="label" for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="">
            <label class="label" for="password">Password</label>
            <input name="password" id="password" type="password" placeholder="">
            <input name="login" class="form-button" type="submit" value="Submit">
        </form>
    </div>
    <p class="para-5"><a href="signup.html">Forgot Password?</a></p>
    <p class="para-2">Don't have an account? <a href="register.php">Register</a></p>

    <?php
        $connect = mysqli_connect("localhost","root","","cse311");

        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $login_user = mysqli_query($connect, $query);

            while($user = mysqli_fetch_assoc($login_user)) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['name'] = $user['firstName'];
                $_SESSION['userId'] = $user['user_id'];

            }
            if($_SESSION['email'] === $email && $_SESSION['password'] === $password) {;
                echo "<script>location.replace('index.php')</script>";
            }
            else {
                echo "<script>alert('Incorrect Email Or Password')</script>";
            }

        }

    ?>

    <script>
        const body = document.querySelector('body');
        body.style.backgroundColor = "#302050";
    </script>
<?php include "footer.php";?>
