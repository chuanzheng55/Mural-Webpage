<!DOCTYPE html>
<html Lang='en'>
<head>
<link rel="stylesheet" href="index.css">
    <style type="text/css"></style>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css">
   <!--Alternative Favicon <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <link href="Https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500&display=swap"
    rel="styleheet">
    
    
    
    <?php
    // Initialize the session
    include "navbar.php";
    ?>

    <title> Artist Credits</title>

<!-- This file contains CSS that only applies to this page. PLEASE DO NOT TOUCH WITHOUT PROPER CORRESPONDANCE -->
        <style>
            *{
                margin: 0;
                outline:none;
                box-sizing: border-box;
            }
            body {
                background-color:#ff9cea;
                font-family: 'Work-Sans', sans-serif;
            }

            header{
                display:flex;
                justify-content:space-between;
                align-items: center;
                padding: 20px 110px;
                border-bottom: 1px solid #ffffff15;
            
            }

            .banner{
                text-align: center;
                padding-top: 65px;
                color: #fff; 
            }

            .banner-text{
                max-width:550px;
                margin: 0px;
        

            }

            .banner h1{
                font-size: 48px;
                font-weight : 400;
                font-family:'Playfair Display' serif;
                text-shadow: 1px 1px 2px , 0 0 1em blue, 0 0 0.2em blue;

            }

            .banner p{

                font-size: 20px;
                font-weight : 400;
                font-family:'Playfair Display' serif;
                text-shadow: 1px 1px 2px , 0 0 1em blue, 0 0 0.2em blue;
            }


            .banner ul{
                display:flex;
                flex-wrap: wrap;
                justify-content: center;
                padding-left: 0;
            }

            .banner ul li{
                color: white;
                list-style:none;
                margin: 20px 20px 0;
                position: relative;
                font-weight: 300px; 
                text-shadow: 1px 1px 2px , 0 0 1em blue, 0 0 0.2em blue;
            }


            .banner ul li:not(first-child):before{
                position: absolute;
                content:'';
                width:10px;
                height:10px; 
                top:5px;
                left: -25px;
                background-color: #434d90;
                border-radius: 50px; 
            }

            .globe{
                display: block;
                float: center; 
                padding: 2px;
                margin-left: auto;
                margin-right: auto;
                top: -752px;
                position: relative;
                max-width: 100%;

            }
        
            .globe-img img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width:793px;
                height:737px;
                max-width: 100%;
                shape-outside: inset(50px 50px);
            }


            .circle{
                max-width: 100%;
                width: 720px;
                height: 720px;
                border-radius:50%;
                border:9px solid black; 
                position: relative;
                top: -722px; 
                left: 0;
                right: 0;
                margin:0 auto;
                animation: circle 60s linear 0s infinite;
            }
            @keyframes circle{

                to{
                    transform: rotate(360deg);

                }
            }

            .icon{
                position: absolute;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                border: 1px solid #fff;
                background-color: #292c45;
                transition: all ease 0.5s;
            }

            .icon:hover{
                border-color: #3951e8;
                background-color: #3951e8;
                box-shadow: 0 4px 94px #384fde;

            }

            .icon:nth-child(1){
                top: -40px;
                left: 41%;
            }
            .icon:nth-child(2)
            {
                top: 70px;
                right: 50px;
            }
            .icon:nth-child(3)
            {
                top: 330px;
                right: -50px;
            }
            .icon:nth-child(4)
            {
                bottom: 60px;
                right: 60px;
            }
            .icon:nth-child(5)
            {
                bottom: -40px;
                right: 41%;
            }
            .icon:nth-child(6)
            {
                bottom: 70px;
                left: 45px;
            }
            .icon:nth-child(7)
            {
                bottom: 575px;
                left: 45px;
            }
            .icon:nth-child(8)
            {
                bottom: 328px;
                left: -55px;
            }
</style>

<!-- End of CSS Styling -->
<head>
<body>

<main>

    <div class="banner">
        <div class = "banner-text">
            <h1> Artist Credits</h1>
            <p>Shouts to all the wonder artist who left their mark on our beautiful city.</p>
            <body>
            <ul>
                <li> Jacopa Cerrarelli</li>
                <li> Aaron Martin</li>
                <li> Octavi Arrizabalaga</li>
                <li> Andrew Pisacane</li>
                <li> Franco Fasoli</li>
                <li> Jerkface</li>
                <li> Alexis Diaz</li>
                <li> ROA</li>
                <li> Donald Ross</li>
                <li> Andrew Hem</li>
                <li> Aaron Martin</li>
                <li> Aniekan Udofia</li>
                <li> Przemek Blejzyk</li>
                <li> Nicolas Romero</li>
                <li> Andrew Pisacane</li>
                <li> Gregory Michael Mensching</li>
                <li> Jonathan Hirsch</li>
                <li> Natalia Rak</li>
                <li> Sonni Adrian</li>
                <li> Stormie Mills</li>
                <li> Daniel Kaliński</li>
                <li> David Flores</li>
                <li> Ekundayo</li>
                <li> David Hookes</li>
                <li> Ron English</li>
                <li> Smithe One</li>
                <li> Wes21 x ONUR</li>
                <li> Simon Grendene </li>
                <li> Eman Raharno Jeman</li>
                <li> Dean Stockton</li>
                <li> Elio Mercado</li>
                <li> Nadirah Razak </li>
                <li> James Bullough</li>
                <li> Jason Woodside</li>
                <li> Patrick Moya</li>
                <li> Nils Westergard</li>
                <li> Onur Dinc</li>
                <li> James Thornhill</li>
                <li> Taylor White</li>
                <li> Vladimir Manzhos</li>
                <li> Ed Trask</li>
                <li> Hanneke Treffers</li>
                <li> Jacob Eveland</li>
                <li> Jade Rivera</li>
                <li> Victor Quiñonez</li>
                <li> Lawrence Atoigue</li>
                <li> Véronique Vanblaere</li>
                <li> Remi Rough</li>
                <li> Jerkface</li>
                <li> Juan Fernandez</li>
                <li> Victor Anselmi</li>
                <li> Mateusz Gapski “Bezt”</li>
            </ul>
        </body>

        </div>    

        <div class="globe">
        <div class = "globe-img">
            <img src = "rva.png" alt = "Temporary Place Holder Image">
        </div>
        <div class="circle">
            <div class="icon"><img src="image1.png" alt="Rotated Image 1"></div>
            <div class="icon"><img src="image2.png" alt="Rotated Image 2"></div>
            <div class="icon"><img src="image3.png" alt="Rotated Image 3"></div>
            <div class="icon"><img src="image4.png" alt="Rotated Image 4"></div>
            <div class="icon"><img src="image5.png" alt="Rotated Image 5"></div>
            <div class="icon"><img src="image6.png" alt="Rotated Image 6"></div>
            <div class="icon"><img src="image7.png" alt="Rotated Image 7"></div>
            <div class="icon"><img src="image8.png" alt="Rotated Image 8"></div>
    </div> 
    </div>
</body>
</head>
</html>