<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>
</head>

<body>

</body>
<?php

$my_id = $_GET["id4"];

$data = new mysqli("localhost", "root", "", "data_project_three");

$table = $data->query("select * from movies where id = $my_id");

if ($table->num_rows > 0) {
    while ($row = $table->fetch_assoc()) {
        print "<h1>" . $row["title"] . "</h1>" . "<br>" . $row["about_movies"] . "<br>" . $row["tiem"] . "<br>" . "<img src='image4/" . $row["image"] . "' style='width: 100%; height: 450px;' alt='the error is the server'>";
    }
}

?>

</html>