<?php
include 'config.php';
include 'navbar.php';
$sql = "SELECT * FROM locations";



$result = $mysqli->query($sql);


?>

<!DOCTYPE html>

<html>

<head>

    <title>Location Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Location Page</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>Location ID</th>

                    <th>Street</th>

                    <th>County</th>

                    <th>Zip</th>

                    <th>State</th>


                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                <tr>

                    <td>
                        <?php echo $row['location_id']; ?>
                    </td>

                    <td>
                        <?php echo $row['street']; ?>
                    </td>

                    <td>
                        <?php echo $row['county']; ?>
                    </td>

                    <td>
                        <?php echo $row['zip']; ?>
                    </td>

                    <td>
                        <?php echo $row['state']; ?>
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
                            href="locationUpdate.php?location_id=<?php echo $row['location_id']; ?>">Update</a>&nbsp;
                        <a class="btn btn-danger"
                            href="locationDelete.php?location_id=<?php echo $row['location_id']; ?>">Delete</a>
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