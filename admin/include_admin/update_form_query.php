<?php
include('conn.php');

$id = $_POST['id'];

$player_1 = $_POST['player1'];
$player_2 = $_POST['player2'];
$player_3 = $_POST['player3'];
$player_4 = $_POST['player4'];
$player_5 = $_POST['player5'];

$email_1 = $_POST['email1'];
$email_2 = $_POST['email2'];
$email_3 = $_POST['email3'];
$email_4 = $_POST['email4'];
$email_5 = $_POST['email5'];

$phone_1 = $_POST['phone1'];
$phone_2 = $_POST['phone2'];
$phone_3 = $_POST['phone3'];
$phone_4 = $_POST['phone4'];
$phone_5 = $_POST['phone5'];






    $update=mysqli_query($con, "UPDATE players SET player1='$player_1',
    player2='$player_2',player3='$player_3',
    player4='$player_4',player5='$player_5',
    email1='$email_1',email2='$email_2',
    email3='$email_3',email4='$email_4',
    email5='$email_5',phone1='$phone_1',
    phone2='$phone_2',phone3='$phone_3',
    phone4='$phone_4',phone5='$phone_5' WHERE id=$id");




    if ($update) {

    echo '<script>alert("your data is inserted")</script>';
    


    } 
    else {
    echo '<script>alert("your data is not inserted")</script>';
    }
?>