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
    include 'navbar.php';
    ?>

<br>
    <br>
    <br>
    <a href="queries.php" style="float: right; font-size: xx-large;" class="btn btn-info center">20 Queries </a>


 <body> 
       <body> 
        <h1>
    <h1 style= "text-align:center;">Richmond Virginia Mural Database Project</h1>
    <div></div>
    
        <div id = "iframe">

        <style>iframe{
position:relative;
  top: 0%;
  left:600px;
  right:0px;
  bottom:0%;
  z-index: 2;
  box-shadow: 0px 0px 12px black;

}</style>
                <iframe src="muralViewIndex.php"  height="800" width="1200" frameborder="0" ></iframe>
                     <script>
                    $(function() {
                     var widthRatio = $('iframe').width() / $(window).width();
                    $(window).resize(function() {
                  $('iframe').css({width: $(window).width() * widthRatio});
                     }); 
                      });
                        </script>

                    
        </div>
                    </body>

</div>
</body>
</html>