<?php
include "connection.php";
include "headerfiles.php";
?>

<style>
    .nav li{
        display:inline-block;
    }

    body {
        padding: 10px;
        margin: 10px;
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }


.container {
    width: 100%;
    height: 60px;
    padding-right: 10px;
    padding-left: 10px;
    margin-right: 10px;
    margin-left: 10px;
    background: white;
    background-size: cover;
    border: transparent solid;
    text-align: center;
}


.container h1{
    margin: 5px;
    padding: 5px;
    font-family: sans-serif;
    color: black;
    font-weight: bold;
    font-size: 36px;
}


.form-group{
    width: 100%;
    height: 60px;
    padding-left: 60px;
    padding-right: 60px;
    background-color: #ffffff;
    border: white solid;
    margin-bottom: 1px;
    box-sizing: border-box;
}

    .form-control{
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
        box-sizing: inherit;

    }

    .nav {
        padding: 10px 60px;
        list-style: none;
        text-align: center;
        height: auto;
        background-color: whitesmoke;
        opacity: .8;
        box-sizing: content-box;
        font-size: 20px;
        font-weight: bold;
        line-height: 20px;
        text-decoration: none;
        color: white;
        display: block;
    }
    a {
        color: #000;
        text-decoration: none;
    }
    .nav li{
        display: inline-block;
        position: relative;

    }
    .nav li a{
        position: relative;
        display: block;
        padding: 10px 10px;
    }

    .nav li a:hover{
        background-color: white;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #878787;
        border-radius: 6px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

</style>

<div class="container">
    <a href="dashboard.php"><h1> ADB WHOLESALERS </h1></a>
</div>
<form role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
    </div>
</form>
<ul class="nav">
    <li><a href="dashboard.php"> Orders</a></li>
    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li ><a href="category.php"> Categories</a></li>
            <li><a href="products.php"> Products</a></li>
        </ul>
    </li>
    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Retailers <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li ><a href="add_retailer.php"> Add Retailer</a></li>
            <li><a href="products.php"> View Retailer</a></li>
            <li><a href="products.php"> Assign Retailer</a></li>
        </ul>
    </li>
    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Make Changes <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="changepassword.php"> Change Password</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </li>
</ul>
</div>