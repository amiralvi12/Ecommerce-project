<?php include "header.php"; ?>
    <?php include "navbar.php"; ?>
    <div class="signup-box">
        <h1>Registration Form</h1>
        <form method="post" action="register.php">
            <label class="label" for="fname">First Name</label>
            <input name="fname" id="fname" type="text" placeholder="">
            <label for="lname">Last Name</label>
            <input name="lname" id="lname" type="text" placeholder="">
            <label class="label" for="gender">Gender</label>
            <input name="gender" id="gender" type="text" placeholder="">
            <label class="label" for="dob">Date of Birth</label>
            <input name="dob" id="dob" type="date" placeholder="">
            <label class="label" for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="">
            <label class="label" for="password">Password</label>
            <input name="password" id="password" type="password" placeholder="">
            <label class="label" for="cfpassword">Confirm Password</label>
            <input name="cfpassword" id="cfpassword" type="password" placeholder="">
            <input name="register" class="form-button" type="submit" value="Submit">
        </form>
        <p class="terms_and_condition">By clicking the sign up button, you agree to our <br>
            <a href="#">Terms and Condition</a> and <a href="#">Policy and Privacy</a>
        </p>
    </div>
    <p class="para-2">Already have an account? <a href="login.php">Login here</a></p>


    <?php
        $connect = mysqli_connect("localhost","root","","cse311");
        if(isset($_POST['register'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['cfpassword'];
            if(empty($fname) || empty($lname) || empty($gender) || empty($dob) || empty($email) || empty($password) || empty($confirmPassword)) {
                echo "<script>alert('Please Fill Out All The Fields')</script>";
            }
            else if($password !== $confirmPassword) {
                echo "<script>alert('Passwords do not the match')</script>";
            }
            else {
                $query = "INSERT INTO users(firstName, lastName, gender, dateOfBirth, email, password)";
                $query .= "VALUES('$fname', '$lname', '$gender', '$dob', '$email', '$password')";
                $register_user = mysqli_query($connect, $query);
                if($register_user) {
                    echo "<script>alert('User Created Successfully')</script>";
                }
            }

        }
    ?>

    <script>
        const body = document.querySelector('body');
        body.style.backgroundColor = "#302050";
    </script>
<?php include "footer.php"; ?>

