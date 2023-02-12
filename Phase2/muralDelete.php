<?php
 include 'navbar.php';
include "config.php";

if (isset($_GET['mural_id'])) {

    $mural_id = $_GET['mural_id'];

    $sql = "DELETE FROM mural WHERE mural_id = $mural_id";

    $result = $mysqli->query($sql);

    if ($result == TRUE) {

        echo $mural_id . " is deleted sucessfully";
        header("Location: muralView.php");

    } else {

        echo "Error:" . $sql . "<br>" . $mysqli->error;

    }

}

?>