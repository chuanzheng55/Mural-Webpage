<!DOCTYPE html>
<html>
<title>CMSC 508 Mural Database</title>

<head>
    <link rel="stylesheet" href="index.css">
    <style type="text/css"></style>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" href= "styleiFrame.css" rel="stylesheet" type="text/css">
   <!--Alternative Favicon <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <?php
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (isset($_SESSION["loggedin"])) {
        echo '<nav class="navbar">
        <a class="navbar-brand" href="index.php"><img src="WebsiteLogo.png" width="65" height="73"/></a>
        <button class="btn btn-info center" onclick="history.go(-1);">Back </button>
        <a class="btn btn-info center" href="addMenu.php">Add Entry</a>
        <a class="btn btn-info center" href="updateMenu.php">View</a>
        <a class="btn btn-info center" href="search.php">Filter</a>
        <a class="btn btn-info center" href="interactivemap.php">Interative Map</a>
        <a class="btn btn-info center" href="account.php">Settings</a>
        <a class="btn btn-info center" href="landingpage.php">Artist Credits</a>
        <a class="btn btn-info center" href="about.php">About</a>
        <a style="float:right" class="btn btn-danger " href="reset.php">RESET DB</a>

 
    </nav>';
    } else {

        echo '<nav class="navbar">
        <a class="navbar-brand" href="index.php"><img src="WebsiteLogo.png" width="65" height="73"/></a>
        <button class="btn btn-info center" onclick="history.go(-1);">Back </button>
        <a class="btn btn-info center" href="updateMenu.php">View</a>
        <a class="btn btn-info center" href="search.php">Filter</a>
        <a class="btn btn-info center" href="interactivemap.php">Interative Map</a> 
        <a class="btn btn-info center" href="login.php">Login</a>
        <a class="btn btn-info center" href="landingpage.php">Artist Credits</a>
        <a class="btn btn-info center" href="about.php">About</a>
    </nav>';

    }
    ?>
    </body>
</html>