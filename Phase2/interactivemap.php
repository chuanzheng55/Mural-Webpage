<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="index.css">
    <style type="text/css"></style>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="js/bootstrap.min.js"></script>
</head>
<title Interactive Map ></title>

<body> 
    <?php
    include 'navbar.php';
    ?>
<p style= "text-align:center" >
<style> iframe{ 
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        box-shadow: 0px 0px 12px black;
        }
        </style> 
<iframe src="https://www.google.com/maps/d/embed?mid=1kMbuavEeUs40HRTt3-eJ3KTcrugGbGg&ehbc=2E312F" 
    width="1280" 
    height="768"
     ></iframe>
</div>
</p>
</body>
</html>