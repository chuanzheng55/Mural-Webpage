<?php
include 'config.php';
include 'navbar.php';
if (isset($_GET['artist_id'])) {

    $artist_id = $_GET['artist_id'];
    $sql = "SELECT * FROM artist WHERE artist_id=$artist_id LIMIT 1";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

}

?>

<!DOCTYPE HTML>
<html>
<title>Artist</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>
</head>

<body>


    <div class="container">
        <h1>Artist Form</h1>

        <form method="post" action="" class="was-validated">


            <label for="artist_name">Artist Name:</label>
            <input type="text" class="form-control" id="artist_name" placeholder="Enter Artist's Name"
                name="artist_name" value="<?php echo $row['artist_name']; ?>" required>


            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $row['gender']; ?>">


            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" placeholder="How old is the artist?" name="age"
                value="<?php echo $row['age']; ?>">


            <label for="ethnicity">Ethnicity:</label>
            <input type="text" class="form-control" id="ethnicity" placeholder="Artist ethnicity?" name="ethnicity"
                value="<?php echo $row['ethnicity']; ?>">


            <label for="birth_country">Birth Country:</label>
            <input type="text" class="form-control" id="birth_country" placeholder="Birth Country?" name="birth_country"
                value="<?php echo $row['birth_country']; ?>">

            <br>

            <h6> Is it studio? </h6>
            <div class="is_studio" required>
                <input type="radio" id="is_YES" name="is_studio" value="TRUE" required>
                <label for="is_YES">YES</label>
                <input type="radio" id="is_NO" name="is_studio" value="FALSE">
                <label for="is_NO">NO</label><br>
                <br><br>
            </div>

            <input type="submit" class="btn btn-success btn-send  pt-1 btn-block" name="submit" value="Sumbit">

        </form>
    </div>

    <?php


    if (isset($_POST['submit'])) {

        $artist_name = $_POST["artist_name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $ethnicity = $_POST["ethnicity"];
        $is_studio = $_POST["is_studio"];
        $birth_country = $_POST["birth_country"];

        $sql = "UPDATE `artist` SET `artist_name`='$artist_name',`gender`='$gender',`age`='$age',`ethnicity`='$ethnicity',`is_studio`='$is_studio',`birth_country`='$birth_country' WHERE artist_id='$artist_id'";

        $result = $mysqli->query($sql);

        if ($result == TRUE) {

            echo "updated successfully";
            // header("Location: muralView.php?msg= Updated successfully");
    
        } else {

            die(mysqli_error($mysqli));

        }

    }



    ?>
</body>

</html>