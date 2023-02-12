<!DOCTYPE html>
<html> 
    <head>

    <link rel="stylesheet" href="index.css">
    <style type="text/css"></style>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css">
   <!--Alternative Favicon <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">-->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="js/bootstrap.min.js"></script>


    </head>
    <body>


<?php
include 'navbar.php';
 $flag = false;
$con = mysqli_connect("cmsc508.com","prestong","Shout4_prestong_GOME","202310_teams_team25");
if(isset($_POST['valueToSearch']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `awardedView` WHERE CONCAT(`mural_id`, `mural_name`, `artist_name`, `mural_description`, `image_url`, `art_style`, `year_build`, `commission_by`, `is_covered`, `street`, `zip`, `county`) 
    LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    $flag = true;
}
 else {
    $query = "SELECT * FROM `awardedView`";
    $search_result = filterTable($query);
    $flag = false;
}

// function to connect and execute the query
function filterTable($query)
{
    $con = mysqli_connect("cmsc508.com","prestong","Shout4_prestong_GOME","202310_teams_team25");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>

<form action="search.php" method="post">
<input type="text" name="valueToSearch" placeholder="Search..">
<button type="submit">search</button>

<?php

    if($flag == true){
        echo '<form method="post">
        <input type="submit" name="clear"
        class="button" value="clear" href= "search.php"/>';    
    }
?>

<br><br>
<table class= "table table-striped table-dark table-bordered">
    <thead>
        <tr class = "table-activated"> 
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Artist</th>
                <th scope="col">Description</th>
                <th scope="col">Mural</th>
                <th scope="col">Art Style</th>
                <th scope="col">Build Date</th>
                <th scope="col">Commissioner</th>
                <th scope="col">Currently Covered?</th>
                <th scope="col">street</th>
                <th scope="col">zip</th>
                <th scope="col">county</th>

        </tr>
</thead>

    <tbody>                
    <?php 
       
    while($row = mysqli_fetch_array($search_result))
        {
            $url = $row["image_url"];
            $mural_id = $row["mural_id"];
    ?>

                <tr>
                    <td><?php echo $row['mural_id']?></td>
                    <td><?php echo $row['mural_name']?></td>
                    <td><?php echo $row['artist_name']?></td>
                    <td><?php echo $row['mural_description']?></td>
                    <td><?php echo "<a href=$url><img src=$url alt='image' width = '360' height = '360'>"?></td>
                    <td><?php echo $row['art_style']?></td>
                    <td><?php echo $row['year_build']?></td>
                    <td><?php echo $row['commission_by']?></td>
                    <td><?php echo $row['is_covered']?></td>
                    <td><?php echo $row['street']?></td>
                    <td><?php echo $row['zip']?></td>
                    <td><?php echo $row['county']?></td>

            <?php
                if (isset($_SESSION["loggedin"])){

                    ?>


        <td><a class = "btn btn-info" href="muralUpdate.php?mural_id=<?php echo $row ['mural_id']; ?>">Update</a> &nbsp;</td>
        <td><a class= "btn btn-danger" href="muralDelete.php?mural_id=<?php echo $row['mural_id'];?>">Delete</a> </td>
                    <?php };?>
                </tr>
                <?php
                }
    $con-> close();            
    ?>


    </tbody>
            </table>
        </form>
        
    </body>
</html>