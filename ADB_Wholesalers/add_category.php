<?php
include "connection.php";
include "adminheader.php";
include "headerfiles.php";
?>
<style>

    hr {
        margin-top: 150px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }


    .nav > li {
        position: relative;
        display: inline-block;
    }

    a {
        color: #000;
        text-decoration: none;
    }
    .nav li a{
        position: relative;
        display: block;
        padding: 10px 10px;
    }

    .nav li a:hover{
        background-color: white;
    }

    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: 10px;
        margin-left: 10px;
    }

    .panel-heading {
        padding: 20px 10px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
    }

    .panel-body {
        padding: 20px;
    }

    .form-group {
        width: auto;
        height: 60px;
        background-color: white;
        border: white solid;
        margin-bottom: 15px;
    }
    label{
        margin: 10px;
        display: inline-block;
        max-width: 100%;
        font-weight: bold;
        font-size: 15px;
        text-align: center;
        color: black;

    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background: #fff none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    .panel-footer {
        padding: 10px;
        background-color: white;
        border-top: 1px solid white;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
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

    .btn-success {
        color: #fff;
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: bold;
        line-height: 1.42857143;
        text-align: center;
        background: #5cb85c none;
        border: 1px solid transparent;
        border-radius: 4px;

    }

</style>

<hr>

<div class="container">
    <form action="add_category_process.php" method="post">
        <div class="panel-heading">ADD CATEGORY</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="category_name" placeholder="Enter the category" class="form-control" required/>
            </div>
        </div>
        <div class="panel-footer">
            <div class="form-group">
                <a href="category.php" class="btn btn-danger btn-sm">CANCEL</a>
                <input type="submit" name="add" value="add" class="btn btn-success btn-sm"/>
            </div>
        </div>
    </form>
</div>