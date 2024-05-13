<?php include "header.php"; ?>
    <?php include "navbar.php"; ?>
    <div class="login-box">
        <h1 class="login-title">Login Form</h1>
        <form class="login-form">
            <label class="label" for="email">Email</label>
            <input id="email" type="email" placeholder="">
            <label class="label" for="password">Password</label>
            <input id="password" type="password" placeholder="">
            <input class="form-button" type="submit" value="Submit">
        </form>
    </div>
    <p class="para-5"><a href="signup.html">Forgot Password?</a></p>
    <p class="para-2">Don't have an account? <a href="register.php">Register</a></p>

    <script>
        const body = document.querySelector('body');
        body.style.backgroundColor = "#302050";
    </script>
<?php include "footer.php";?>