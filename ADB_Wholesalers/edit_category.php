<!doctype html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#edit").validate();
        })
    </script>
</head>
<body>
<?php
include 'adminheader.php';
?>
<?php
$s="select * from categories WHERE category_id='".$_REQUEST["category_id"]."'";
include "connection.php";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>

<div class="container">
    <form id="edit" action="edit_action_category.php" method="post">
        <div class="form-group">
            Category ID
            <input readonly type="text" value="<?php echo $_REQUEST["category_id"]?>" class="form-control" name="category_id" id="category_name" data-rule-required="true" data-msg-required="please enter the category id">
        </div>

        <div class="form-group">
           Category Name
            <input value="<?php echo $row[1];?>" class="form-control" id="category_name" name="category_name" data-rule-required="true" data-msg-required="please enter the category"></input>
        </div>
        <div class="form-group">
            <input type="submit" value="SUBMIT" class="btn btn-success">
        </div>
    </form>
</div>
</body>
</html>
