<?php
include 'config.php';
include 'navbar.php';
$sql = "SELECT * FROM award";



$result = $mysqli->query($sql);


?>

<!DOCTYPE html>

<html>

<head>

    <title>Award Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Award Page</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>Award ID</th>

                    <th>Award Name</th>

                    <th>Mural ID</th>

                    <th>Award Year</th>

                    <th>Award By</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                <tr>

                    <td>
                        <?php echo $row['award_id']; ?>
                    </td>

                    <td>
                        <?php echo $row['award_name']; ?>
                    </td>

                    <td>
                        <?php echo $row['mural_id']; ?>
                    </td>

                    <td>
                        <?php echo $row['award_year']; ?>
                    </td>

                    <td>
                        <?php echo $row['award_by']; ?>
                    </td>

                    <!--  <td>

                     <?php
                        // $url = $row["image_url"];
                        // echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
                        // </a>";
                     ?> 
                    </td>

                    -->


                    <?php
                        if (isset($_SESSION["loggedin"])) {
                    ?>

                    <td><a class="btn btn-info"
                            href="edit.php?award_id=<?php echo $row['award_id']; ?>">Update</a>&nbsp;
                        <a class="btn btn-danger" href="delete.php?award_id=<?php echo $row['award_id']; ?>">Delete</a>
                    </td>

                    <?php
                        }
                        ;
                    ?>


                </tr>



                <?php }

                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>