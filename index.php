<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" type="image/icon" href="img/logo 2.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <title>Bolt Esports</title>
</head>

<body onmouseenter="typeWriter()" style="overflow-x: hidden;">
  <!-- header -->
  <?php
  include("header.php");
  ?>
  <!-- header end -->

  <!-- animation -->

  <script>
    var i = 0;
    var txt = "CREATE YOUR TEAM AND WIN TOURNAMENTS NOW!";
    var speed = 50;

    function typeWriter() {
      if (i < txt.length) {
        document.getElementById("join").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
  </script>

  <!-- end animation -->
  <br />
  <div class="container">

    <div class="col-12">
      <strong>
        <p id="join"></p>
      </strong>
    </div>

  </div>
  <br />

  <div class="container">
    <div class="row">
      <div class="p1">
        <p class="col">
          Bolt Esports.Is the place where you can meet players fro m all over the
          world, create a team , play different tournaments popular games and win
          the tournament together with them. what else create team now!
        </p>
      </div>
    </div>
  </div>




  <br />

  <div class="container">
    <div class="row">
      <form class="col-6" action="login.php" target="_blank">
        <button class="join">Join Tournaments now</button><br />
      </form>




      <form class="col-6" action="singup.php" target="_blank">
        <button class="Account">Create your Account</button>
      </form>
    </div>
  </div>


  <br />







  <!-- slides -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/valorant.png" alt="First slide" style="width: 80%; height: 80%;" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/csgo.jpg" alt="Second slide" style="width: 80%; height: 80%;" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/tekken.jpg" alt="Third slide" style="width: 80%; height: 80%;" />
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- footer -->
  <?php
   include("footer.php");
  ?>
  <!-- footer end -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap");
  @import url("https://fonts.googleapis.com/css2?family=Wendy+One&display=swap");

  /* H1 */
  @import url("https://fonts.googleapis.com/css2?family=Inter:wght@800;900&display=swap");

  body {
    background-image: url(img/vct-stage-3-1\ 1.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    /* overflow-x: hidden; */
    max-width: 100%;
    height: auto;
  }

  .logo {
    float: left;
  }


  #join {
    color: white;
    margin-top: 25vh;
    font-family: "Inter", sans-serif;
    font-style: italic;
    letter-spacing: 10px;
    font: 700 bold;
    font-size: 4vh;
    /* justify-content: center; */
    text-align: center;
  }


  .p1 {
    position: relative;
    width: 1044px;
    height: 48px;

    top: 04px;
    font-family: "Inter";
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 24px;
    text-align: center;
    color: #a19d9d;
    display: flex;

  }


form{
  display: flex;
  justify-content: center;
  justify-items: center;
  
}

  .join {
    width: 16.125rem;
    height: 3.8125rem;

    background: linear-gradient(135deg,
        rgba(255, 9, 9, 0.59) 0%,
        rgba(221, 48, 48, 0.79) 46.15%,
        rgba(255, 255, 255, 0.485) 100%);
    border: none;
    color: #fff;
    text-align: center;
    font-size: 1rem;
    font-family: "Inter", sans-serif;
    font-style: italic;
    font-weight: 700;
    /* margin-left: 50vh; */
    margin-top: 10vh;
    cursor: pointer;
    position: relative;
  }

  .Account {

    width: 16.125rem;
    height: 3.8125rem;
    flex-shrink: 0;
    background: linear-gradient(135deg,
        #fff 0%,
        rgba(255, 255, 255, 0.91) 44.51%,
        rgba(255, 255, 255, 0.661) 100%);
    color: #000;
    text-align: center;
    font-size: 1rem;
    font-family: "Inter", sans-serif;
    font-style: italic;
    font-weight: 900;
    border: none;
    /* margin-left: 115vh; */
    top: 10vh;
    position: relative;
    cursor: pointer;
  }






</style>