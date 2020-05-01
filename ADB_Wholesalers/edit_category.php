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
<style>

    body {
        padding: 10px;
        margin: 10px;
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }

    hr {
        margin-top: 40px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }

    .container {
        width: 100%;
        height: 100px;
        padding-right: 10px;
        padding-left: 10px;
        margin-right: 10px;
        margin-left: 10px;
        background: white;
        background-size: cover;
        border: transparent solid;
        text-align: center;
    }

    body {
        font-family: sans-serif;
        font-size: 20px;
        font-weight: bold;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
    }

    .form-group {
        width: 100%;
        height: 80px;
        padding-left: 60px;
        padding-right: 60px;
        background-color: #ffffff;
        border: white solid;
        margin-bottom: 1px;
        margin-top: 10px;
        box-sizing: border-box;
    }

    .form-control {
        display: block;
        width: 100%;
        height: 40px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        text-align: left;
        margin: 4px;
        margin-top: 10px;
        box-sizing: inherit;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }




</style>
<hr>
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
