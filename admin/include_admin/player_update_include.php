            <?php
            include('conn.php');
            $result = mysqli_query($con, "SELECT * FROM `players`") or die("error" . mysqli_error($con));

            ?>


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
                        if (mysqli_num_rows($result) > 0) {

                        ?>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($result)) {

                            ?>
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["player1"] ?></td>
                                    <td><?php echo $row["player2"] ?></td>
                                    <td><?php echo $row["player3"] ?></td>
                                    <td><?php echo $row["player4"] ?></td>
                                    <td><?php echo $row["player5"] ?></td>
                                    <td><?php echo $row["email1"] ?></td>
                                    <td><?php echo $row["email2"] ?></td>
                                    <td><?php echo $row["email3"] ?></td>
                                    <td><?php echo $row["email4"] ?></td>
                                    <td><?php echo $row["email5"] ?></td>
                                    <td><?php echo $row["phone1"] ?></td>
                                    <td><?php echo $row["phone2"] ?></td>
                                    <td><?php echo $row["phone3"] ?></td>
                                    <td><?php echo $row["phone4"] ?></td>
                                    <td><?php echo $row["phone5"] ?></td>






                                    <td><a href="include_admin/update_form.php?id=<?php echo $row['id'] ?>" name="update" class="btn btn-primary" target="_blank" >Update</a></td>
                                </tr>
                            <?php } ?>

                        <?php
                        } else {

                            echo "no result found";
                        }

                        ?>




                    </tbody>
                </table>








                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            </body>

            </html>