<?php
include 'config.php';
include 'navbar.php';
$sql = "SELECT * FROM artist";
$result = $mysqli->query($sql);


?>

<!DOCTYPE html>

<html>

<head>

    <title>Artist Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Artist Page</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>Artist ID</th>

                    <th>Artist Name</th>

                    <th>Gender</th>

                    <th>Age</th>

                    <th>Ethnicity</th>

                    <th>Birth Country</th>

                    <th>Is Studio?</th>


                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                <tr>

                    <td>
                        <?php echo $row['artist_id']; ?>
                    </td>

                    <td>
                        <?php echo $row['artist_name']; ?>
                    </td>

                    <td>
                        <?php echo $row['gender']; ?>
                    </td>

                    <td>
                        <?php echo $row['age']; ?>
                    </td>

                    <td>
                        <?php echo $row['ethnicity']; ?>
                    </td>

                    <td>
                        <?php echo $row['birth_country']; ?>
                    </td>

                    <td>
                        <?php echo $row['is_studio']; ?>
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
                            href="artistUpdate.php?artist_id=<?php echo $row['artist_id']; ?>">Update</a>&nbsp;</td>
                    <td> <a class="btn btn-danger"
                            href="artistDelete.php?artist_id=<?php echo $row['artist_id']; ?>">Delete</a>
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