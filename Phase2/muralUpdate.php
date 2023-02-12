<?php
include "config.php";
include 'navbar.php';
if (isset($_GET['mural_id'])) {

    $mural_id = $_GET['mural_id'];
    $sql = "SELECT * FROM awardedView WHERE mural_id=$mural_id LIMIT 1";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

}

?>

<!DOCTYPE HTML>
<html>
<title>Mural Update Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>
</head>

<body>

    <div class="container">
        <h1>Mural Update Form</h1>

        <br> <br>

        <form method="post" action="" class="was-validated">


            <label for="mural_name">Mural Name:</label>
            <input type="text" class="form-control" id="mural_name" name="mural_name" value="<?php echo
                $row['mural_name'] ?>">
            <br> <br>

            <?php

            $sql = "SELECT * FROM `artist`";
            $all_categories = mysqli_query($mysqli, $sql);
            ?>
            <label for="artist_id">Select Artist:</label>
            <select name="artist_id">

                <option value="<?php echo $row['artist_id'] ?>">
                    <?php echo $row['artist_name'] ?>
                </option>
                <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while (
                    $ArtistID = mysqli_fetch_array(
                        $all_categories,
                    MYSQLI_ASSOC
                    )
                ):
                    ;
                ?>
                <option value="<?php echo $ArtistID["artist_id"];

                    // The value we usually set is the primary key
                ?>">
                    <?php echo $ArtistID["artist_name"];
                    // To show the category name to the user
                    ?>
                </option>
                <?php
                endwhile;
                // While loop must be terminated
                ?>
            </select>

            <br>
            <!-- <div>
                    <label for="no_artist">Artist not exist:</label>
                    <input type="checkbox" checked="checked" value="TRUE" id="no_artist" name="no_artist">
                </div> -->
            <!-- This button redirect to add artist form. -->
            <div>
                <a class="btn btn-info add_artist" href="artistForm.php" target="_blank"> Add Artist </a>
            </div>
            <!-- This button redirect to add artist form. -->
            <br><br>


            <div>
                <?php
                $sql = "SELECT * FROM `locations`";
                $Location_categories = mysqli_query($mysqli, $sql);
                ?>
                
                <label for="location_id">Select Location:</label>
                <select name="location_id">
                <option value="<?php echo $row['location_id'] ?>">
                    <?php echo $row['street'] ?>
                </option>
                    <?php
                    // use a while loop to fetch data
                    // from the $all_categories variable
                    // and individually display as an option
                    while (
                        $LocationID = mysqli_fetch_array(
                            $Location_categories,
                        MYSQLI_ASSOC
                        )
                    ):
                        ;
                    ?>
                    <option value="<?php echo $LocationID["location_id"];
                        // The value we usually set is the primary key
                    ?>">
                        <?php echo $LocationID["street"];
                        // To show the category name to the user
                        ?>
                    </option>
                    <?php
                    endwhile;
                    // While loop must be terminated
                    ?>

            </div>
            </select>
            <!--  <div>
                <label for="no_location">Location not exist:</label>
                <input type="checkbox" checked="checked" value="TRUE" id="no_location" name="no_location">
            </div> -->
            <!-- This button redirect to add location form.  -->
            <div>
                <a class="btn btn-info add_location" href="locationForm.php" target="_blank"> Add Location </a>
            </div>
            <!-- This button redirect to add location form. -->
            <br><br>



            <label for="mural_description">Mural Description:</label>
            <input type="text" class="form-control" id="mural_description" name="mural_description" value="<?php echo
                $row['mural_description'] ?>">



            <label for="year_build">Year Build (YYYY):</label>
            <input type="text" class="form-control" id="year_build" placeholder="What year is this art built?"
                name="year_build" pattern="[0-9]{4}" value="<?php echo
                    $row['year_build'] ?>" required>


            <label for="commission_by">Commission by:</label>
            <input type="text" class="form-control" id="commission_by" placeholder="Who is the commissioner?"
                name="commission_by" value="<?php echo
                    $row['commission_by'] ?>">



            <br><br>
            <h6> Is it covered? </h6>
            <input type="radio" id="is_YES" name="is_covered" value="YES" required>
            <label for="is_YES">YES</label>
            <input type="radio" id="is_NO" name="is_covered" value="NO">
            <label for="is_NO">NO</label><br>



            <label for="art_style">Art style?:</label>
            <input type="text" class="form-control" id="art_style" placeholder="What is the Art style?" name="art_style"
                value="<?php echo
                    $row['art_style'] ?>">



            <label for="image_url">Mural Image URL:</label>
            <input type="text" class="form-control" id="image_url" placeholder="Mural Image URL" name="image_url" value="<?php echo
                $row['image_url'] ?>">


            <br><br>

            <input type="submit" class="btn btn-success btn-send  pt-1 btn-block" value="submit" name="submit">

        </form>

        <?php

        if (isset($_POST['submit'])) {

            $mural_description = $_POST["mural_description"];
            $mural_name = $_POST["mural_name"];
            $artist_id = $_POST["artist_id"];
            $location_id = $_POST["location_id"];
            $year_build = $_POST["year_build"];
            $commission_by = $_POST["commission_by"];
            $is_covered = $_POST["is_covered"];
            $art_style = $_POST["art_style"];
            $image_url = $_POST["image_url"];

            $sql = "UPDATE `mural` SET `mural_name`='$mural_name',`artist_id`='$artist_id',`location_id`='$location_id',`year_build`='$year_build',`mural_description`='$mural_description',`commission_by`='$commission_by',`is_covered`='$is_covered',`art_style`='$art_style',`image_url`='$image_url' WHERE mural_id='$mural_id'";

            $result = $mysqli->query($sql);
            print_r($mural_name);
            print_r($mural_id);
            if ($result == TRUE) {

                echo "updated successfully";
                // header("Location: muralView.php?msg= Updated successfully");
        
            } else {

                die(mysqli_error($mysqli));

            }

        }



        ?>
    </div>

</body>

</html>