<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>artcile read</title>
</head>

<body>
    <?php

    $my_id = $_GET["id2"];

    $data = new mysqli("localhost", "root", "", "data_project_three");

    $table = $data->query("select * from table_string where id = $my_id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            print $row["features"];
        }
    }
    ?>
</body>

</html>