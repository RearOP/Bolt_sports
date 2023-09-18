


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/icon" href="img/logo 2.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <title>Form</title>
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@900&display=swap");

  body {
    background-image: url(img/bg.jfif);
    background-color: black;
    overflow-x: hidden;
    /* display: flex; */
    background-repeat: no-repeat;
    background-size: cover;

  }

  h1 {
    color: white;
    font-family: "Outfit", sans-serif;
    text-transform: uppercase;
    text-align: center;
    margin-top: 15vh;
  }

  .form_group {
    position: relative;
    padding: 15px 0 0;
    width: 30%;
  }

  .form_field1 {
    width: 100%;
    border: 0;
    border-bottom: 2px solid white;
    outline: 0;
    font-size: 1.3rem;
    color: white;
    padding: 7px 0;
    background: transparent;

  }

  .form_field1::placeholder {
    color: lightgray;
  }





  .form_field::placeholder {
    color: lightgray;
  }

  .form_field {
    width: 100%;
    border: 0;
    border-bottom: 2px solid white;
    outline: 0;
    font-size: 1.3rem;
    color: white;
    padding: 7px 0;
    background: transparent;
  }

  .container {
    display: flex;
    justify-content: space-evenly
  }

  button {

    margin-top: 3rem;
    margin-left: 45%;


  }


  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800;900&display=swap');
  @import url('https://fonts.googleapis.com/css?family=Lato');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css');
</style>

<body>
  <!-- header -->


  <!-- header end -->


  <h1>Update Data</h1>
  <br /><br /><br />


  <?php
  include('conn.php');

  $id = $_GET['id'];

  $result = mysqli_query($con, "SELECT * FROM `players` WHERE id={$id}");

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){

  ?>

      <form method="POST" action="update_form_query.php">

        <div class="container">

          <div class="player1">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <input type="text" class="form_field" id="name" placeholder="Player1 name" name="player1" value="<?php echo $row['player1']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Email" name="email1" value="<?php echo $row['email1']; ?>" /><br />

            <input type="text" class="form_field" id="name" id="name" placeholder="Phone" name="phone1" value="<?php echo $row['phone1']; ?>" /><br />
          </div>


          <br /><br />

          <div class="player2">

            <input type="text" class="form_field" id="name" placeholder="Player2 name" name="player2" value="<?php echo $row['player2']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Email" name="email2" value="<?php echo $row['email2']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Phone" name="phone2" value="<?php echo $row['phone2']; ?>" /><br />
          </div>
          <br /><br />
          <div class="player3">

            <input type="text" class="form_field" id="name" placeholder="Player3 name" name="player3" value="<?php echo $row['player3']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Email" name="email3" value="<?php echo $row['email3']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Phone" name="phone3" value="<?php echo $row['phone3']; ?>" /><br />
          </div>
          <br /><br />
          <div class="player4">

            <input type="text" class="form_field" id="name" placeholder="Player4 name" name="player4" value="<?php echo $row['player4']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Email" name="email4" value="<?php echo $row['email4']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Phone" name="phone4" value="<?php echo $row['phone4']; ?>" /><br />
          </div>
          <br /><br />
          <div class="player5">

            <input type="text" class="form_field" id="name" placeholder="Player5 name" name="player5" value="<?php echo $row['player5']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Email" name="email5" value="<?php echo  $row['email5']; ?>" /><br />

            <input type="text" class="form_field" id="name" placeholder="Phone" name="phone5" value="<?php echo $row['phone5']; ?>" /><br />
          </div>

        </div>




        <button class="btn btn-info" name="update">Update</button>
      </form>
  <?php
    }
  }

  ?>
  <br><br><br>

  <!-- footer -->


  <!-- footer end -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>







<style>
  @media screen and (max-width: 768px) {
    body {
      background-image: url(img/bg.jfif);
      /* overflow-y: visible; */
      overflow-x: hidden;
      /* display: flex; */
      background-repeat: no-repeat;
      background-size: cover;
    }

    h1 {
      color: white;
      font-family: "Outfit", sans-serif;
      text-transform: uppercase;
      text-align: center;
      margin-top: 15vh;
    }

    .form_group {
      left: -13rem;
      position: relative;
      padding: 15px 0 0;
      width: 30%;
    }

    .form_field1 {
      width: 100%;
      border: 0;
      border-bottom: 2px solid white;
      outline: 0;
      font-size: 1.3rem;
      color: white;
      padding: 7px 0;
      background: transparent;

    }

    .form_field1::placeholder {
      color: white;
    }





    .form_field::placeholder {
      color: white;
    }

    .form_field {
      width: 100%;
      border: 0;
      border-bottom: 2px solid white;
      outline: 0;
      font-size: 1.3rem;
      color: white;
      padding: 7px 0;
      background: transparent;
    }

    .container {
      display: flex;
      flex-wrap: wrap
    }

    .player3 {
      margin-top: 10vh;
    }

    .player4 {
      margin-top: 10vh;
    }

    .player5 {

      margin-top: 10vh;
    }
  }
</style>





<?php
include('conn.php');

// $id = $_POST['id'];

// $player_1 = $_POST['player1'];
// $player_2 = $_POST['player2'];
// $player_3 = $_POST['player3'];
// $player_4 = $_POST['player4'];
// $player_5 = $_POST['player5'];

// $email_1 = $_POST['email1'];
// $email_2 = $_POST['email2'];
// $email_3 = $_POST['email3'];
// $email_4 = $_POST['email4'];
// $email_5 = $_POST['email5'];

// $phone_1 = $_POST['phone1'];
// $phone_2 = $_POST['phone2'];
// $phone_3 = $_POST['phone3'];
// $phone_4 = $_POST['phone4'];
// $phone_5 = $_POST['phone5'];






    // $update=mysqli_query($con, "UPDATE players SET player1='$player_1',
    // player2='$player_2',player3='$player_3',
    // player4='$player_4',player5='$player_5',
    // email1='$email_1',email2='$email_2',
    // email3='$email_3',email4='$email_4',
    // email5='$email_5',phone1='$phone_1',
    // phone2='$phone_2',phone3='$phone_3',
    // phone4='$phone_4',phone5='$phone_5' WHERE id=$id");





    // if ($update) {

    // echo '<script>alert("your data is inserted")</script>';
    // // echo '<script>window.location.assign="admin.php"</script>';


    // } 
    // else {
    // echo '<script>alert("your data is not inserted")</script>';
    // }
?>