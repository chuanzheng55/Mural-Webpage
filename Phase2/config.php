<?php

Define('servername', "cmsc508.com");

Define('username', "zhengc2");

Define('password', "Shout4_zhengc2_GOME");

Define('dbname', "202310_teams_team25");

$mysqli = new mysqli(servername, username, password, dbname);

if ($mysqli->connect_error) {

    die("Connection failed: " . $mysqli->connect_error);

}



?>