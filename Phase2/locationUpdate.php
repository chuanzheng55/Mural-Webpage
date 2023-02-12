<?php
include 'config.php';
include 'navbar.php';
if (isset($_GET['location_id'])) {

    $location_id = $_GET['location_id'];
    $sql = "SELECT * FROM locations WHERE location_id=$location_id LIMIT 1";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

}
?>
<!DOCTYPE HTML>
<html>
<title>Location Update Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>
</head>

<body>


    <div class="container">
        <h1>Location Update</h1>

        <form method="post" action="" class="was-validated" target="_self">


            <label for="street">Street:</label>
            <input type="text" class="form-control" id="street" placeholder="Enter Street Address" name="street"
                value="<?php echo $row['street'] ?>" required>


            <label for="county">County:</label>
            <input type="text" class="form-control" id="county" name="county" placeholder="Enter County"
                value="<?php echo $row['county'] ?>" required>


            <label for="zip">Zip:</label>
            <input type="text" class="form-control" id="zip" placeholder="Five digit Zip Code" name="zip"
                pattern="[0-9]{5}" value="<?php echo $row['zip'] ?>" required>

            <br>

            <!-- 
            <label for="state">State:</label>
            <input type="text" class="form-control" id="state" placeholder="State" name="state"> -->
            <select id="state" name="state">
                <option value="<?php echo $row['state'] ?>">
                    <?php echo $row['state'] ?>
                </option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="District Of Columbia">District Of Columbia</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
            </select>
            <br>
            <br>
            <!--  -->

            <input type="submit" class="btn btn-success btn-send  pt-1 btn-block" name="submit" value="Sumbit">

        </form>
    </div>

    <?php


    if (isset($_POST['submit'])) {

        $street = $_POST["street"];
        $county = $_POST["county"];
        $zip = $_POST["zip"];
        $state = $_POST["state"];


        $sql = "UPDATE `locations` SET `street`='$street',`county`='$county',`zip`='$zip',`state`='$state' WHERE location_id='$location_id'";

        $result = $mysqli->query($sql);

        if ($result == TRUE) {

            echo "Location updated successfully.";

            echo "New location: " . " Street:  " . $street . " County: " . $county . " Zip:  " . $zip . " State:  " . $state;

            // header("Location: muralView.php?msg= Updated successfully");
    
        } else {

            die(mysqli_error($mysqli));

        }

    }

    ?>
</body>

</html>