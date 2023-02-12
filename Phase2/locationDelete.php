<?php

include "config.php";

if (isset($_GET['location_id'])) {

    $location_id = $_GET['location_id'];

    $sql = "DELETE FROM locations WHERE location_id = $location_id";

    $result = $mysqli->query($sql);

    if ($result == TRUE) {
        echo $location_id . " is deleted sucessfully";
        header("Location: locationView.php");
        

    } else {

        echo "Error:" . $sql . "<br>" . $mysqli->error;

    }

}

?>