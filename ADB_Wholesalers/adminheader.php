<?php
include "connection.php";
include "headerfiles.php";
?>
<style>
.nav li{
    display:inline-block;
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
