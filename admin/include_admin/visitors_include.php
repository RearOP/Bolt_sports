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


    <table class="table" style="width: 50%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Broswer Name</th>
                <th>Broswer Version</th>
                <th>Type</th>
                <th>Os</th>
                <th>Url</th>
                <th>Ref</th>
             

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
            $quy = mysqli_query($con, "SELECT * FROM `visitor`") or die("error" . mysqli_error($con));


            while ($li = mysqli_fetch_array($quy)) {
                // mysqli_query($conn,"SELECT * FROM `office_details`");
            ?>
                <tr>
                    <td><?php echo $li["id"] ?></td>
                    <td><?php echo $li["browser_name"] ?></td>
                    <td><?php echo $li["browser_version"] ?></td>
                    <td><?php echo $li["type"] ?></td>
                    <td><?php echo $li["os"] ?></td>
                    <td><?php echo $li["url"] ?></td>
                    <td><?php echo $li["ref"] ?></td>
                



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