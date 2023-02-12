<?php
include 'config.php';
include 'navbar.php';
$sql = "SELECT * FROM mural";



$result = $mysqli->query($sql);


?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Mural Page</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>Mural ID</th>

                    <th>Mural Name</th>

                    <th>Artist ID</th>

                    <th>Mural Description</th>

                    <th>Image</th>


                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                <tr>

                    <td>
                        <?php echo $row['mural_id']; ?>
                    </td>

                    <td>
                        <?php echo $row['mural_name']; ?>
                    </td>

                    <td>
                        <?php echo $row['artist_id']; ?>
                    </td>

                    <td>
                        <?php echo $row['mural_description']; ?>
                    </td>

                    <td>

                        <?php
                        $url = $row["image_url"];
                        echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
                        </a>";
                        ?>
                    </td>


                    <?php
                        if (isset($_SESSION["loggedin"])) {
                    ?>

                    <td><a class="btn btn-info"
                            href="muralUpdate.php?mural_id=<?php echo $row['mural_id']; ?>">Update</a>&nbsp;</td>
                    <td><a class="btn btn-danger" href="muralDelete.php?mural_id=<?php echo $row['mural_id']; ?>">Delete</a>
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