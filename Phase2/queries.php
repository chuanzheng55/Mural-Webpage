<?php
include "config.php";
include "navbar.php";
?>


<!DOCTYPE html>

<html>

<head>

    <title>Artist Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body> 

<form name="form" method="post">

<input type="submit" name="button1" value="Button 1" /> 
<input type="submit" name="button2" value="Button 2" /> 
<input type="submit" name="button3" value="Button 3" /> 
<input type="submit" name="button4" value="Button 4" />
<input type="submit" name="button5" value="Button 5" />
<input type="submit" name="button6" value="Button 6" />
<input type="submit" name="button7" value="Button 7" />
<input type="submit" name="button8" value="Button 8" />
<input type="submit" name="button9" value="Button 9" />
<input type="submit" name="button10" value="Button 10" />
<input type="submit" name="button11" value="Button 11" />
<input type="submit" name="button12" value="Button 12" />
<input type="submit" name="button13" value="Button 13" />
<input type="submit" name="button14" value="Button 14" />
<input type="submit" name="button15" value="Button 15" />
<input type="submit" name="button16" value="Button 16" />
<input type="submit" name="button17" value="Button 17" />
<input type="submit" name="button18" value="Button 18" />
<input type="submit" name="button19" value="Button 19" />
<input type="submit" name="button20" value="Button 20" />



</form> 


<?php

if (isset($_POST['button1'])) {

    $sql = "SELECT mural_id, mural_name, image_url, artist_name FROM awardedView where artist_name= 'Sonni Adrian'";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>

</tr>


<?php }

}

?>

</tbody>

</table>

</div>


 <?php }  ?>


<?php

if (isset($_POST['button2'])) {

    $sql = "SELECT mural_id, mural_name, artist_name, mural_description, image_url  FROM awardedView where zip = 23220";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button3'])) {

     $sql = "SELECT award_id, award_name, award_by FROM awardedView WHERE artist_name = 'Octavi Arrizabalaga'";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Award ID</th>

            <th>Award Name</th>

            <th>Award by</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['award_id']; ?>
    </td>

    <td>
        <?php echo $row['award_name']; ?>
    </td>

    <td>
        <?php echo $row['award_by']; ?>
    </td>

</tr>


<?php }

}

?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button4'])) {

    $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url  FROM awardedView WHERE award_by = 'Richmond Mural Project'";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button5'])) {

    $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url  FROM awardedView WHERE year_build BETWEEN 2012 AND 2015";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button6'])) {

    $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url  FROM awardedView WHERE year_build BETWEEN 2012 AND 2015 AND artist_name = 'Aaron Martin'";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button7'])) {

     $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url, award_year, award_id FROM awardedView WHERE award_year = 2012";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Award ID </th>

            <th>Award Year </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['award_id']; ?>
    </td>
    <td>
        <?php echo $row['award_year']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button8'])) {

     $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url,  award_by, award_id FROM awardedView WHERE award_by = 'G40'";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Award ID </th>

            <th>Award By </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['award_id']; ?>
    </td>
    <td>
        <?php echo $row['award_by']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button9'])) {

     $sql = "SELECT mural_id, mural_name, artist_name, is_studio ,mural_description,image_url  FROM awardedView WHERE is_studio = 'TRUE'";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Is Studio</th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>

    <td>   
        <?php echo $row['is_studio']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button10'])) {

     $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url, birth_country FROM awardedView WHERE birth_country = 'Switzerland'";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Birth Country </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['birth_country']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button11'])) {

     $sql = "SELECT mural_id, mural_name, artist_name, mural_description,image_url,gender FROM awardedView WHERE gender = 'male' OR gender = 'female' ORDER BY mural_id";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Artist Name </th>

            <th>Gender </th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button12'])) {

     $sql = "SELECT artist_name,gender, award_id, award_year FROM awardedView WHERE award_year = 2012 AND gender = 'male'";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist Name</th>

            <th>Gender</th>

            <th>Award ID</th>
            
            <th>Award Year</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>

    <td>
        <?php echo $row['gender']; ?>
    </td>

    <td>
        <?php echo $row['award_id']; ?>
    </td>
    <td>
        <?php echo $row['award_year']; ?>
    </td>

</tr>


<?php }

}

?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button13'])) {
    
     $sql = "SELECT mural_id, mural_name, mural_description, award_name, commission_by, image_url FROM awardedView WHERE commission_by='G40 Summit' AND award_name LIKE '%Africa%';";
    $result = $mysqli->query($sql);
?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Award Name </th>

            <th>Commission By</th>

            <th>Mural Description</th>

            <th>    Image    <th>

        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>

    <td>
        <?php echo $row['award_name']; ?>
    </td>

    <td>   
        <?php echo $row['commission_by']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>
</tr>
<?php }
}
?>
</tbody>
</table>
</div>
 <?php }  ?>

<?php

if (isset($_POST['button14'])) {

     $sql = "SELECT artist_id, artist_name, age, gender, ethnicity, commission_by FROM awardedView WHERE commission_by = 'Richmond Mural Project'";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist ID</th>

            <th>Artist Name</th>

            <th>Age</th>

            <th>Gender</th>

            <th>Ethnicity</th>

            <th>Commission By</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_id']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['age']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>
    <td>
        <?php echo $row['ethnicity']; ?>
    </td>
    <td>
        <?php echo $row['commission_by']; ?>
    </td>

</tr>


<?php }

}

?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button15'])) {

     $sql = "SELECT mural_id, mural_name, award_name, county, mural_description,image_url  FROM awardedView WHERE county = 'Richmond' AND award_name = 'Most Expressive'";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Mural ID</th>

            <th>Mural Name</th>

            <th>Award Name</th>

            <th>County</th>

            <th>Mural Description</th>

            <th>image_url</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['mural_id']; ?>
    </td>

    <td>
        <?php echo $row['mural_name']; ?>
    </td>
    <td>
        <?php echo $row['award_name']; ?>
    </td>
    <td>
        <?php echo $row['county']; ?>
    </td>
    <td>
        <?php echo $row['mural_description']; ?>
    </td>
    <td>
        <?php
            $url = $row["image_url"];
            echo "<a href =$url><img src=$url alt='image' width='200' height='132'>
            </a>";
        ?>
    </td>

</tr>


<?php }

}

?>
</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button16'])) {

     $sql = "SELECT artist_id, artist_name, age, gender FROM awardedView WHERE (award_year BETWEEN 2012 AND 2022) and zip = 23220 GROUP BY artist_id;";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist ID</th>

            <th>Artist Name</th>

            <th>Age</th>

            <th>Gender</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_id']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['age']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>


</tr>


<?php }

}

?>

</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button19'])) {

     $sql = "SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE is_studio = 'FALSE' GROUP BY artist_id;
     ";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist ID</th>

            <th>Artist Name</th>

            <th>Age</th>

            <th>Gender</th>

            <th>Ethnicity</th>

            <th>Birth Country</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_id']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['age']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>
    <td>
        <?php echo $row['ethnicity']; ?>
    </td>
    <td>
    <?php echo $row['birth_country']; ?>
    </td>

</tr>


<?php }

}

?>

</tbody>
</table>
</div>
 <?php }  ?>



 
<?php

if (isset($_POST['button20'])) {

     $sql = "SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE art_style = 'Graffiti' AND zip = 23223 GROUP BY artist_id;";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist ID</th>

            <th>Artist Name</th>

            <th>Age</th>

            <th>Gender</th>

            <th>Ethnicity</th>

            <th>Birth Country</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_id']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['age']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>
    <td>
        <?php echo $row['ethnicity']; ?>
    </td>
    <td>
    <?php echo $row['birth_country']; ?>
    </td>

</tr>


<?php }

}

?>

</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button18'])) {

     $sql = "SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE (NOT birth_country = 'United States') AND (NOT birth_country = 'United State') AND is_studio = 'TRUE' GROUP BY artist_id;";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist ID</th>

            <th>Artist Name</th>

            <th>Age</th>

            <th>Gender</th>

            <th>Ethnicity</th>

            <th>Birth Country</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_id']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['age']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>
    <td>
        <?php echo $row['ethnicity']; ?>
    </td>
    <td>
    <?php echo $row['birth_country']; ?>
    </td>

</tr>


<?php }

}

?>

</tbody>
</table>
</div>
 <?php }  ?>

 <?php

if (isset($_POST['button17'])) {

     $sql = "SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE birth_country = 'United State' AND award_name = 'Richmond Mural Award' GROUP BY artist_id;";
    $result = $mysqli->query($sql);

?>
 
 <div class="container">

<h2>Queries Page</h2>

<table class="table">

    <thead>

        <tr>

            <th>Artist ID</th>

            <th>Artist Name</th>

            <th>Age</th>

            <th>Gender</th>

            <th>Ethnicity</th>

            <th>Birth Country</th>


        </tr>

    </thead>

    <tbody>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<tr>

    <td>
        <?php echo $row['artist_id']; ?>
    </td>

    <td>
        <?php echo $row['artist_name']; ?>
    </td>
    <td>
        <?php echo $row['age']; ?>
    </td>
    <td>
        <?php echo $row['gender']; ?>
    </td>
    <td>
        <?php echo $row['ethnicity']; ?>
    </td>
    <td>
    <?php echo $row['birth_country']; ?>
    </td>

</tr>


<?php }

}

?>

</tbody>
</table>
</div>
 <?php }  ?>

</body>


</html>