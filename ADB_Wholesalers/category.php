<?php include 'connection.php'; ?>
<?php
$sql="SELECT * FROM categories";
$result = $conn->query($sql);
$i= 1;

?>
<?php include 'adminheader.php'; ?>
<style>

    hr {
        margin-top: 150px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
        color: black;
        text-align: center;
    }

    .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .page-header {
        padding-bottom: 20px;
        margin: 20px 0 20px;
        border-bottom: 1px solid #eee;
    }

    .text-right {
        text-align: center;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings', sans-serif;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 1px;
        font-size: 14px;
        font-weight: normal;
        line-height: 2;
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
        border-radius: 7px;
        font-family: sans-serif;
    }

    .btn-danger{
        color: white;
        background-color: cornflowerblue;
        border-color: cornflowerblue;
    }

    .glyphicon-pencil{
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings', sans-serif;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .glyphicon-trash {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings', sans-serif;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 1px;
        font-size: 14px;
        font-weight: normal;
        line-height: 2;
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
        border-radius: 7px;
        font-family: sans-serif;
    }

    .panel {
        margin: 20px 40px 20px;
        background-color: #fff;
        border-radius: 6px;
        border: solid #00000096;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 2px 2px rgba(0, 0, 0, .05);
        font-family: sans-serif;
        font-size: 10px;
    }

    .table-bordered {
        border: 0;
    }
    .table {
        border-spacing: 1px;
        border-collapse: collapse
        display: table;
        box-sizing: border-box;
        white-space: normal;
        line-height: normal;
        font-weight: normal;
        font-size: medium;
        font-style: normal;
        color: black;
        text-align: center;
        border-color: black;
        box-shadow: darkgrey;
        font-variant: normal;
        max-width: 100%;
        width: 100%;
        background-color: transparent;
    }

    thead {
        display: table-header-group;
        vertical-align: middle;
        border-color: inherit;
    }

    tr {
        display: table-row;
        vertical-align: inherit;
        border-color: inherit;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        box-sizing: border-box;
    }

    th {
        border-bottom: 0;
        text-align: center;
    }

    th.header{
        border: 1px solid whitesmoke;
        padding: 5px;
        vertical-align: bottom;
        text-align: center;
        display: table-cell;
        font-weight: bold;
        font-family: sans-serif;
        font-size: 18px;
        color: black;
        font-variant: normal;
        border-collapse: separate;
        white-space: normal;
    }

    tbody {
        display: table-row-group;
        vertical-align: middle;
        border-color: inherit;
    }

    td {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        border: 1px solid black;
        padding: 5px;
        line-height: 2;
        vertical-align: top;
        display: table-cell;
    }

</style>
<hr>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
    </div><!--/.row-->
    <div class="page-action-links text-right">
        <a href="add_category.php?operation=create">
            <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add new </button>
        </a>
    </div>
    <br>
    <div class="panel panel-container">
        <table class="table table-hover table-bordered table-condensed">

            <thead>
            <tr>
                <th class="header">Sr.No</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo htmlspecialchars($row['category_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['category_name']); ?></td>
                    <td>
                        <a href="edit_category.php?category_id=<?php echo $row['category_id'] ?>&operation=edit" class="btn btn-danger" style="margin-right: 8px;"><span class="glyphicon glyphicon-pencil"></span>
                    </td>
                    <td>
                        <a href="delete_category.php?category_id=<?php echo $row['category_id'] ?>&operation=delete" class="btn btn-danger" style="margin-right: 8px;"><span class="glyphicon glyphicon-trash"></span>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
