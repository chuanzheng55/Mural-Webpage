<!DOCTYPE HTML>
<html>
<title>Award Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>
</head>

<body>
<?php
 include 'navbar.php';

?>

    <div class="container">
        <h1>Award Form</h1>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="was-validated">


            <label for="award_name">Award Name:</label>
            <input type="text" class="form-control" id="award_name" placeholder="Enter Award Name"
                name="award_name" required>


            <label for="award_by">Awarded by:</label>
            <input type="text" class="form-control" id="award_by" name="award_by" required>


            <label for="award_year">Year Award (YYYY):</label>
            <input type="text" class="form-control" id="award_year" name="award_year" pattern="[0-9]{4}" required>
        
            <br>

            
      <?php
      include 'config.php';
      $sql = "SELECT * FROM `mural`";
      $award_data = mysqli_query($mysqli, $sql);
      ?>
     <b> <label for="mural_id">Award to -->  </label> </b>
      <select name="mural_id">
        <?php
        // use a while loop to fetch data
        // from the $all_categories variable
        // and individually display as an option
        while ($muralID = mysqli_fetch_array($award_data,MYSQLI_ASSOC)):;
        ?>
        <option value="<?php echo $muralID["mural_id"];
          // The value we usually set is the primary key ?>">
          <?php echo $muralID["mural_name"];
          // To show the category name to the user
          ?>
        </option>
        <?php
        endwhile;
        // While loop must be terminated
        ?>
      </select>

            <input type="submit" class="btn btn-success btn-send  pt-1 btn-block" value="Sumbit">

        </form>
    </div>

    <?php

    if ($mysqli === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt insert query execution
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //collect value of input field
        $award_name = $_POST["award_name"];
 
        $award_by = $_POST["award_by"];
      
        $award_year = $_POST["award_year"];

        $mural_id = $_POST["mural_id"];


        $sql = "INSERT INTO award(`award_name`, `mural_id`, `award_by`,`award_year`) VALUES ('$award_name', '$mural_id', '$award_by', '$award_year')";



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