<!DOCTYPE HTML>
<html>
<title>Mural Form</title>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">




<head>
  <link rel="stylesheet" href="index.css">
  <style type="text/css"></style>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" type="text/css">
  <!--Alternative Favicon <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">-->
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="js/bootstrap.min.js"></script>
</head>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<head>

</head>

<body>
  <?php
include 'navbar.php';
?>
  <div class="container">
    <h1>Mural Form</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="was-validated">


      <label for="mural_name">Mural Name:</label>
      <input type="text" class="form-control" id="mural_name" placeholder="Enter Mural's Name" name="mural_name"
        required>
      <br>

      <?php
      include 'config.php';
      $sql = "SELECT * FROM `artist`";
      $all_categories = mysqli_query($mysqli, $sql);
      ?>
      <label for="artist_id">Select Artist:</label>
      <select name="artist_id" required>
      <option value="">--Select Artist-- Add artist if not exist in list</option>

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




<!--This is the code for pop artistForm button-->        
<p></p>
<body>
        <div id="closed"></div>
<a href="#popup" class="popup-link">Add Artist</a>
<div class="popup-wrapper" id="popup">
<div class="popup-container">
<embed allowfullscreen="true" height="520" src="artistFormiFrame.php"  width="600"></embed>
</a>
<a class="popup-close" href="#closed">X</a>
</div>
</div>
</body>
<p></p>
<!--This is the code for pop artistForm button-->


      <?php
      $sql = "SELECT * FROM `locations`";
      $Location_categories = mysqli_query($mysqli, $sql);
      ?>
      <label for="location_id">Select Location:</label>
      <select name="location_id" required>

      <option value="">--Select location-- Add location if not exist in list</option>
        <?php
        // use a while loop to fetch data
        // from the $location_categories variable
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
      </select>
      <!-- <div>
        <label for="no_location">Location not exist:</label>
        <input type="checkbox" checked="checked" value="TRUE" id="no_location" name="no_location">
      </div> -->


     <br>




   <!--This is the code for popup locationForm button-->        
      <p></p>
      <body>
      <div id="closed2"></div>
      <a href="#popup2" class="popup2-link">Add Location</a>
      <div class="popup2-wrapper" id="popup2">
      <div class="popup2-container">
      <embed allowfullscreen="true" height="520" src="locationFormiFrame.php"  width="600"></embed>
      </a>
      <a class="popup2-close" href="#closed2">X</a>
      </div>
      </div>
      </body>
      <p></p>
    <!--This is the code for popup locationForm button-->






      <label for="mural_description">Mural Description:</label>
      <input type="text" class="form-control" id="mural_description" placeholder="Mural's description..."
        name="mural_description">



      <label for="year_build">Year Build (YYYY):</label>
      <input type="text" class="form-control" id="year_build" placeholder="What year is this art built?"
        name="year_build" pattern="[0-9]{4}" required>


      <label for="commission_by">Commission by:</label>
      <input type="text" class="form-control" id="commission_by" placeholder="Who is the commissioner?"
        name="commission_by">



      <br><br>
      <h6> Is it covered? </h6>
      <input type="radio" id="is_YES" name="is_covered" value="YES" required>
      <label for="is_YES">YES</label>
      <input type="radio" id="is_NO" name="is_covered" value="NO">
      <label for="is_NO">NO</label><br>



      <label for="art_style">Art style?:</label>
      <input type="text" class="form-control" id="art_style" placeholder="What is the Art style?" name="art_style">



      <label for="image_url">Mural Image URL:</label>
      <input type="text" class="form-control" id="image_url" placeholder="Mural Image URL" name="image_url" required>


        <br>  

      <input type="submit" class="btn btn-success btn-send  pt-1 btn-block" value="Submit">

    </form>
  </div>

  <?php


  if ($mysqli === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // Attempt insert query execution
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $mural_name = $_POST["mural_name"];
  
    $mural_description = $_POST["mural_description"];
 
    $commission_by = $_POST["commission_by"];
  
    $is_covered = $_POST["is_covered"];
  
    $art_style = $_POST["art_style"];
 
    $year_build = $_POST["year_build"];
 
    $image_url = $_POST["image_url"];


    $no_LocationID = $_POST["no_location"];

    if ($no_LocationID == true) {
      $LocationID = '';
    } else {
      $LocationID = $_POST["location_id"];
    }
 

    $no_ArtistID = $_POST["no_artist"];

    if ($no_ArtistID == true) {
      $ArtistID = '';
    } else {
      $ArtistID = $_POST["artist_id"];
    }
 


    $sql = "INSERT INTO mural (`mural_name`, `mural_description` , `commission_by`,`is_covered`,`art_style`,`year_build`,`image_url`, `location_id` , `artist_id`) VALUES 
    ('$mural_name','$mural_description','$commission_by','$is_covered','$art_style','$year_build','$image_url','$LocationID','$ArtistID')";

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