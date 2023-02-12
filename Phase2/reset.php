<?php
include 'config.php';
session_start();

$sql = "CALL mural_reset()";

$result = $mysqli->query($sql);
if($result==true){
    header("Location: index.php");
}
else
{
    echo "Reset error";
}

?>