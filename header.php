<header>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







  <div class="container-fluid">
    <div class="row">
      <div class="logo">
        <a href="index.html"><img src="img/logo 2.png" alt="error" /></a>
      </div>
    </div>







    <div class="topnav" id="myTopnav">

      <div class="container1">
        <div class="row">
          <strong class="col">

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>

            <a href="index.php" class="text1">Home</a>

            <a href="videos.php" class="text1">Streams</a>

            <a href="tournament.php" class="text1">Tournament</a>

            <a href="aboutus.php" class="text1">About us</a>

            <a href="Contactus.php" class="text1">Contact us</a>

            <a href="feedback.php" class="text1">Feedback</a>


            <a href="login.php" class="text1">Login</a>
            

          </strong>
        </div>
      </div>
    </div>
  </div>

</header>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800;900&display=swap');
  @import url('https://fonts.googleapis.com/css?family=Lato');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css');
  /* nav */

  .container1 a {
    padding-left: 10px;
    /* float: right; */
    padding-right: 40px;
    font-family: "Inter", sans-serif;
    letter-spacing: 1px;
    text-decoration: none;
    padding-top: 50px;
    color: white;
    max-width: 759px;
    font-size: 10px;
    margin-top: -15vh;
  }

  .icon {
    display: none;
  }

  .loginimg {
    margin-top: -6.5px;
    height: 33px;
    width: 53px;
    /* float: right; */
    padding-left: 20px;
    margin-right: -6px;
    /* padding-right: 10px;
    padding-top: 50px; */
  }

  .container1 {
    float: right;
    display: flex;

    margin-left: 8rem;
  }

  .text1 {
    position: relative;
    padding: 8px;
    transition: 0.2s;
  }

  .text1::after {
    background: none repeat scroll 0 0 transparent;
    bottom: 0;
    content: "";
    /* display: block; */
    height: 3px;
    left: 80%;
    position: absolute;
    background: white;
    transition: width 0.5s ease 0s, right 5s ease 0s;
    width: 0;
  }

  .text1:hover::after {
    width: 80%;
    left: 0;
  }

  /* end nav */






  /* nav */
  @media screen and (max-width: 768px) {
    .container1 a {
      padding-left: 10px;
      float: right;
      padding-right: 40px;
      font-family: "Inter", sans-serif;
      letter-spacing: 1px;
      text-decoration: none;
      padding-top: 50px;
      color: white;
      max-width: 759px;
      font-size: 10px;
      margin-top: 3vh;
    }


    .loginimg {

      display: none;
      /* margin-top: -23.5px;
    height: 33px;
    width: 53px;
    float: right;
    padding-left: 20px;
    margin-right: -6px;
    padding-right: 10px;
    padding-top: 10px; */
    }



    .container1 {
      float: right;
      display: flex;
      margin-left: 8rem;
      margin-top: -13vh;
    }



    .topnav a {
      display: none;
    }

    .topnav a.icon {
      float: right;
      display: block;
    }

    .topnav.responsive {
      position: relative;
    }

    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 45rem;
    }

    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }

  /* nav end*/
</style>


<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>