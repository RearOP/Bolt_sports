<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=REM&family=Raleway:wght@400;500;600&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url(img/csgobg.png);
            overflow-x: hidden;
        }

        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        section {
            width: 100%;
            /* height: 100vh; */
        }



        h1 {
            margin-top: 6rem;
            text-align: center;
            font-size: 2.3rem;
            text-transform: uppercase;
            padding-top: 1%;
            color: white;
        }

        .row {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .row .col1 {
            margin: 1%;
            width: 30%;
        }

        .row .col2 {
            margin: 1%;
            width: 55%;
        }

        .row .col2 img {
            width: 100%;
        }

        .row .col1 a {
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
            /* background: rgba(255, 0, 0, 0.692); */
            background: rgb(208, 10, 10);
            background: linear-gradient(90deg, rgba(208, 10, 10, 0.8799894957983193) 55%, rgba(255, 0, 0, 0) 100%);
            padding: 2% 20%;
            text-transform: uppercase;
            position: relative;
            top: 50%;
            left: 30%;
            font: bolder;
        }

        .row1 {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .row1 .card1 {
            width: 25%;
            height: 35vh;
            background: black;
            margin: 2%;

            border-radius: 10% 10% 10% 10% / 10% 0% 10% 0%;
        }

        .row1 .card1 img {
            width: 100%;
            padding: 4%;
        }

        .row1 .card1 h5 {
            color: #ffffff;
            padding: 0% 0 0 2%;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }






        .row1 .card1 h5:nth-last-child(2) {
            margin-bottom: 20%;
        }

        .row1 .card1 a {
            text-decoration: none;
            margin-left: 5%;
            color: white;
            font: bold;
            text-transform: uppercase;
            width: 90%;
            padding: 2% 20%;
            background: linear-gradient(90deg, rgba(208, 10, 10, 1) 77%, rgba(68, 5, 5, 1) 100%);
            /* margin-bottom: 5%; */
            border-radius: 20px;

        }
    </style>
</head>








<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>


    <section>
        <div class="bg">
            <h1>Popular Tournament</h1>
            <div class="container">
                <div class="row">
                    <div class="col1">
                        <b><a href="#">Join Now</a></b>
                    </div>
                    <div class="col2">
                        <img src="img/valorant.png" alt="">
                    </div>
                </div>
                <div class="row1">
                    <div class="card1">
                        <img src="img/clash_of_clans (1).png" alt="">
                        <h5>Reward : Game Passes</h5>
                        <h5>Entry Fee : Free</h5>
                        <a href="form.php">Join Now</a>
                    </div>
                    <div class="card1">
                        <img src="img/cod_mf 1.png" alt="">
                        <h5>Reward : Game Passes</h5>
                        <h5>Entry Fee : Free</h5>
                        <a href="form.php">Join Now</a>

                    </div>
                    <div class="card1">
                        <img src="img/Fortnite 1.png" alt="">
                        <h5>Reward : Game Passes</h5>
                        <h5>Entry Fee : Free</h5>
                        <a href="form.php">Join Now</a>

                    </div>
                    <div class="card1">
                        <img src="img/Rainbow_six_sege 1.png" alt="">
                        <h5>Reward : Game Passes</h5>
                        <h5>Entry Fee : Free</h5>
                        <a href="form.php">Join Now</a>

                    </div>
                    <div class="card1">
                        <img src="img/CSGO 1.png" alt="">
                        <h5>Reward : Game Passes</h5>
                        <h5>Entry Fee : Free</h5>
                        <a href="form.php">Join Now</a>

                    </div>
                    <div class="card1">
                        <img src="img/Overwatch2 1 (1).png" alt="">
                        <h5>Reward : Game Passes</h5>
                        <h5>Entry Fee : Free</h5>
                        <a href="form.php">Join Now</a>

                    </div>





                    



                
            </div>
        </div>
    </section>






    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>





</body>

</html>