<?php
include "connection.php";
include "adminheader.php";
include "headerfiles.php";
?>
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