<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Admin</title>
    <link rel="stylesheet" href="sidebaradmin/players.css" />


    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background: #E4E9F7;">

<div class="sidebar">
        <div class="logo-details">
            <img class="bx bxl-c-plus-plus icon" src="img/logo 2chota.png">
            <div class="logo_name">Bolt-Esports</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="admin.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="tournament_admin.php">
                    <i class="bx bx-game"></i>
                    <span class="links_name">Tournaments</span>
                </a>
                <span class="tooltip">Tournaments</span>
            </li>
            <li>
                <a href="feedback_admin.php">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Feedback</span>
                </a>
                <span class="tooltip">Feedback</span>
            </li>
            <li>
                <a href="visitors_admin.php">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Visitors</span>
                </a>
                <span class="tooltip">Visitors</span>
            </li>
            <li>
                <a href="streams_admin.php">
                    <i class="bx bx-video-plus"></i>
                    <span class="links_name">Streams</span>
                </a>
                <span class="tooltip">Streams</span>
            </li>
            <li>
                <a href="players_admin.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Players</span>
                </a>
                <span class="tooltip">Players</span>
            </li>
            <li>
                <a href="player_update_admin.php">
                    <i class="bx bx-user-plus"></i>
                    <span class="links_name">Update</span>
                </a>
                <span class="tooltip">Update</span>
            </li>
            <li>
                <a href="player_delete_admin.php">
                    <i class="bx bx-user-minus"></i>
                    <span class="links_name">Delete</span>
                </a>
                <span class="tooltip">Delete</span>
            </li>
            <!-- <li class="profile">
          <div class="profile-details">
            <img src="profile.jpg" alt="profileImg" />
            <div class="name_job">
              <div class="name">Prem Shahi</div>
              <div class="job">Web designer</div>
            </div>
          </div>
          <i class="bx bx-log-out" id="log_out"></i>
        </li> -->
        </ul>

    </div>
    <section class="home-section">

        <div class="text">Update</div>
<?php
include('include_admin/player_update_include.php');
?>

    </section>

    </div>
    <script src="sidebaradmin/script.js"></script>
    </div>
</body>

</html>