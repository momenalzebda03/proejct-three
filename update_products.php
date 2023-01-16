<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update products</title>
</head>

<body>
    <?php

    $my_id = $_GET["id3"];

    $data = new mysqli("localhost", "root", "", "data_project_three");

    $table = $data->query("select * from table_products where id = $my_id");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            $id1 = $row["id"];
            $salary1 = $row["salary"];
            $item1 = $row["item"];
            $address1 = $row["address"];
            $support1 = $row["support"];
            $database1 = $row["my_database"];
            $buss1 = $row["buss"];
            $address11 = $row["address1"];
            $support11 = $row["support1"];
            $database11 = $row["my_database1"];
        }
    }

    if (isset($_GET["btn"])) {

        $louk_id = $_GET["id"];
        $my_salary = $_GET["salary"];
        $my_item = $_GET["item"];
        $my_address = $_GET["address"];
        $my_support = $_GET["support"];
        $database = $_GET["my_database"];
        $my_buss = $_GET["buss"];
        $my_address1 = $_GET["address1"];
        $my_support1 = $_GET["support1"];
        $database1 = $_GET["my_database1"];

        $table = $data->query("UPDATE `table_products` SET `id`='$louk_id',`salary`='$my_salary',`item`='$my_item',`address`='$my_address',`support`='$my_support',`my_database`='$database',`buss`='$my_buss',`address1`='$my_address1',`support1`='$my_support1',`my_database1`='$database1' where id = $louk_id");

        if ($table > 0) {
            header("Location:project_three.php");
        } else {
            print "يوجد خطا لم يتم تعديل المنتج";
        }
    }
    ?>

    <form action="" method="GET">
        <input type="number" name="id" readonly value="<?php print  $id1 ?>">
        <br>
        <br>
        <input type="number" name="salary" value="<?php print  $salary1 ?>">
        <br>
        <br>
        <input type="text" name="item" value="<?php print  $item1 ?>">
        <br>
        <br>
        <input type="text" name="address" value="<?php print  $address1 ?>">
        <br>
        <br>
        <input type="text" name="support" value="<?php print  $support1 ?>">
        <br>
        <br>
        <input type="text" name="my_database" value="<?php print  $database1 ?>">
        <br>
        <br>
        <input type="text" name="buss" value="<?php print  $buss1 ?>">
        <br>
        <br>
        <input type="text" name="address1" value="<?php print  $address11 ?>">
        <br>
        <br>
        <input type="text" name="support1" value="<?php print  $support11 ?>">
        <br>
        <br>
        <input type="text" name="my_database1" value="<?php print  $database11 ?>">
        <br>
        <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>