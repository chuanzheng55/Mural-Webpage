<?php

include "config.php";

if (isset($_GET['artist_id'])) {

    $artist_id = $_GET['artist_id'];

    $sql = "DELETE FROM artist WHERE artist_id = $artist_id";

    $result = $mysqli->query($sql);

    if ($result == TRUE) {

        header("Location: artistView.php");
        echo $artist_id . " is deleted sucessfully";

    } else {

        echo "Error:" . $sql . "<br>" . $mysqli->error;

    }

}

?>