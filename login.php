<?php
// conn
include('conn.php');

?>

<?php





if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $pass = $_POST['pass'];

    $sql = "select * from signin where email= '{$email}' and password= '{$pass}' ";
    $result = mysqli_query($con,$sql);
    $j = mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_array($result)) {
            session_start();



            $_SESSION['email'] = $rows['email'];

            $_SESSION['pass'] = $rows['pass'];



            echo "<script>window.window.location.assign('index2.php')</script>";
        }
    } else {

        echo "not working";
    }
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="icon" type="image/icon" href="img/logo 2.png" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="assest/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assest/css/style.css">
</head>
<body style="background-color: black;overflow-x: hidden; ">

<?php
include('header.php');

?>
    <div class="main" style="background-color: black;">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/image 16.png" alt="sing up image"></figure>
                        <a href="singup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                      
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php
include('footer.php');

?>

    <!-- JS -->
    <script src="assest/vendor/jquery/jquery.min.js"></script>
    <script src="assest/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>