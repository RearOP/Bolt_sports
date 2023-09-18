<?php
include('conn.php');

?>






<?php
if(isset($_POST['submit'])){
    $phone =$_POST['phone'];

    $email =$_POST['email'];

$password =$_POST['pass'];

$q="INSERT INTO `signin`(email,password) VALUES('$email','$password')";
$cmd=mysqli_query($con,$q);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/icon" href="img/logo 2.png" />
    <title>Sign Up</title>

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



        <!-- Sign up form -->
        <section class="signup">

            <div class="container">

                <div class="signup-content">

                    <div class="signup-form">

                        <h2 class="form-title">Sign up</h2>

                        <form method="POST" class="register-form" id="register-form">


                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>



                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>



                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                          
                           
                            <div class="form-group form-button">


                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/sign.jfif" alt="sing up image" style="margin-top: 3rem;"></figure>
                      
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










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
