<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Murals</title>
    <style type="text/css"></style>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
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

    <table class="table table-dark">
        <thead>
            <tr>
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
            use function CommonMark\Render\HTML;

            include 'config.php';

            $sql = "SELECT * FROM awardedView";

            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $url = $row["image_url"];

                    echo "<tr><td>" . $row["mural_id"] . "</td><td>" . $row["mural_name"] . "</td><td>" . $row["artist_name"] . "</td><td>" . $row["mural_description"] . "</td><td>" . "<a href =$url><img src=$url alt='image' width='200' height='132'>
                    </a>". "</td><td>" . $row["art_style"] . "</td><td>". $row["year_build"] . "</td><td>" . $row["commission_by"] . "</td><td>" . $row["is_covered"] . "</td><td>" . $row["street"] . "</td><td>" . $row["zip"] . "</td><td>" . $row["county"] . "</td><td>";
                }
            } else {
                echo "No Results";
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>
</body>

</html>