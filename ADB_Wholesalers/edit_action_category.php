<?php
$category_id = $_REQUEST["category_id"];
$category_name = $_REQUEST["category_name"];
include "connection.php";

$update = "update categories set category_name='$category_name' WHERE category_id='" . $_REQUEST["category_id"] . "'";

mysqli_query($conn, $update);
header("location:category.php");