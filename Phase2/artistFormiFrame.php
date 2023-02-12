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
<?php
session_start();


?>

    <div class="container">
        <h1>Artist Form</h1>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="was-validated">


            <label for="artist_name">Artist Name:</label>
            <input type="text" class="form-control" id="artist_name" placeholder="Enter Artist's Name"
                name="artist_name" required>


            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" name="gender">


            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" placeholder="How old is the artist?" name="age" required>


            <label for="ethnicity">Ethnicity:</label>
            <input type="text" class="form-control" id="ethnicity" placeholder="Artist ethnicity?" name="ethnicity" >


            <label for="birth_country">Birth Country:</label>
            <input type="text" class="form-control" id="birth_country" placeholder="Birth Country?"
                name="birth_country" >

            <br>

            <h6> Is it studio? </h6>
            <div class="is_studio" >
                <input type="radio" id="is_YES" name="is_studio" value="TRUE" required>
                <label for="is_YES">YES</label>
                <input type="radio" id="is_NO" name="is_studio" value="FALSE">
                <label for="is_NO">NO</label><br>
                <br><br>
            </div>

            <input type="submit" class="btn btn-success btn-send  pt-1 btn-block" value="Sumbit">

        </form>
    </div>

    <?php

    include 'config.php';

    if ($mysqli === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt insert query execution
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //collect value of input field
        $artist_name = $_POST["artist_name"];
      
        $gender = $_POST["gender"];
    
        $ethnicity = $_POST["ethnicity"];
   
        $is_studio = $_POST["is_studio"];
 
        $birth_country = $_POST["birth_country"];

        $age = $_POST["age"];



        $sql = "INSERT INTO artist(`artist_name`, `gender` , `ethnicity`, `is_studio`, `birth_country`, `age`) VALUES ('$artist_name', '$gender', '$ethnicity', '$is_studio', '$birth_country', '$age')";



        if (mysqli_query($mysqli, $sql)) {
            echo "Records added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    }
    // Close connection
    mysqli_close($mysqli);

    ?>
</body>

</html>