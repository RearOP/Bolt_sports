<!doctype html>
<html lang="en">

<head>
    <title>list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Team Name</th>
                <!-- <th>Id</th> -->
                <th>Player1</th>
                <th>Player2</th>
                <th>Player3</th>
                <th>Player4</th>
                <th>Player5</th>
                <th>Email1</th>
                <th>Email2</th>
                <th>Email3</th>
                <th>Email4</th>
                <th>Email5</th>
                <th>Phone1</th>
                <th>Phone2</th>
                <th>Phone3</th>
                <th>Phone4</th>
                <th>Phone5</th>

                <!-- <th>ref</th> -->



            </tr>
        </thead>
        <tbody>

            <?php
            include('conn.php');

            // if (isset($_GET['del'])) {


            //     $dels = mysqli_query($conn, "DELETE from `office_details` where id = '" . $_GET['del_id'] . "'");
            // }
            // if (isset($_GET['update'])) {
            //     $up = mysqli_query($con, "SELECT *,b.id  FROM `office_details`o LEFT JOIN `branch`b on b.Id=o.id where id = '" . $_GET['up_id'] . "'");
            // }

            ?>
            <?php










            // include('conn.php');


            // $quy = mysqli_query($con,"SELECT *,b.Id FROM `teams`o LEFT JOIN `branch`b on b.Id=o.id")or die("error".mysqli_error($con));
            $quy = mysqli_query($con, "SELECT *,b.Id FROM `teams`o LEFT JOIN `players`b on b.Id=o.id ") or die("error" . mysqli_error($con));


            while ($li = mysqli_fetch_array($quy)) {
                // mysqli_query($conn,"SELECT * FROM `office_details`");
            ?>
                <tr>
                    <td><?php echo $li["id"] ?></td>
                    <td><?php echo $li["name"] ?></td>
                    <!-- <td><?php echo $li["id"] ?></td> -->
                    <td><?php echo $li["player1"] ?></td>
                    <td><?php echo $li["player2"] ?></td>
                    <td><?php echo $li["player3"] ?></td>
                    <td><?php echo $li["player4"] ?></td>
                    <td><?php echo $li["player5"] ?></td>
                    <td><?php echo $li["email1"] ?></td>
                    <td><?php echo $li["email2"] ?></td>
                    <td><?php echo $li["email3"] ?></td>
                    <td><?php echo $li["email4"] ?></td>
                    <td><?php echo $li["email5"] ?></td>
                    <td><?php echo $li["phone1"] ?></td>
                    <td><?php echo $li["phone2"] ?></td>
                    <td><?php echo $li["phone3"] ?></td>
                    <td><?php echo $li["phone4"] ?></td>
                    <td><?php echo $li["phone5"] ?></td>
                



                    <!-- 
                    <td><a href="list.php?del&del_id=<?php echo $li['id'] ?>" class="btn btn-primary">Delete</a></td>
                    <td><a href="update.php?up&up_id=<?php echo $li['id'] ?>" class="btn btn-primary">Update</a></td> -->
                </tr>
            <?php } ?>






        </tbody>
    </table>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>