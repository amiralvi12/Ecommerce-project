<?php include "header.php"; ?>
    <?php include "navbar.php"; ?>
    <div class="signup-box">
        <h1>Registration Form</h1>
        <form>
            <label class="label" for="fname">First Name</label>
            <input id="fname" type="text" placeholder="">
            <label for="lname">Last Name</label>
            <input id="lname" type="text" placeholder="">
            <label class="label" for="gender">Gender</label>
            <input id="gender" type="text" placeholder="">
            <label class="label" for="dob">Date of Birth</label>
            <input id="dob" type="date" placeholder="">
            <label class="label" for="email">Email</label>
            <input id="email" type="email" placeholder="">
            <label class="label" for="password">Password</label>
            <input id="password" type="password" placeholder="">
            <label class="label" for="cfpassword">Confirm Password</label>
            <input id="cfpassword" type="password" placeholder="">
            <input class="form-button" type="submit" value="Submit">
        </form>
        <p class="terms_and_condition">By clicking the sign up button, you agree to our <br>
            <a href="#">Terms and Condition</a> and <a href="#">Policy and Privacy</a>
        </p>
    </div>
    <p class="para-2">Already have an account? <a href="login.php">Login here</a></p>

    <script>
        const body = document.querySelector('body');
        body.style.backgroundColor = "#302050";
    </script>
<?php include "footer.php"; ?>
