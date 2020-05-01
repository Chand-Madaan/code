<?php include 'connection.php'; ?>
<?php include 'adminheader.php'; ?>
<?php

if(isset($_POST['submit']))
{
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $cnfnewpass = $_POST['cnfnewpass'];
    if($newpass == $cnfnewpass)
    {
        $sql = "SELECT admin_id,admin_user,admin_password FROM admins";


        $oldpass = $_POST['oldpass'];
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                if($row[1]==$admin_user)
                {
                    $admin_id = $row['admin_id'];
                    if($oldpass == $row["admin_password"])
                    {
                        $newpass = $_POST['newpass'];
                        $sql2 = "UPDATE admins SET admin_password='".$newpass."' WHERE admin_id=".$admin_id;
                        if($conn->query($sql2) === TRUE)
                        {
                            echo "<h4 align='center'><span style=\"color: green; \"><b>Password Succesfully Changed !</b></span></h4>";
                        }
                    }
                    else
                    {
                        echo "<h4 align='center'><span style=\"color: red; \"><b>Incorrect old password</span></b></h4>";
                    }
                }
            }
        }


    }
    else
    {
        echo "<h4 align='center'><span style=\"color: red; \"><b>new password do not match !</span></h4>";
    }
}

?>
<style>

    hr {
        margin-top: 150px;
        margin-bottom: 0;
        border: 0;
        border-top: 1px solid #eee;
    }
    body {
        padding: 10px;
        margin: 10px;
        background: #FFF;
        font-family: 'Dosis', sans-serif;
    }

    .page-header {
        padding-bottom: 9px;
        margin: 20px 0 20px;
        border-bottom: 1px solid #eee;
        text-align: center;
        font-weight: bold;
        font-size: 36px;
    }
    .panel-heading {
        padding: 10px 20px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        font-size: 15px;
        font-family: sans-serif;
        font-weight: bold;
    }

    .panel-body{
        padding: 10px;
        margin: 15px;
    }

    .form-group {
        width: 100%;
        height: 80px;
        padding-left: 70px;
        padding-right: 70px;
        background-color: #ffffff;
        border: white solid;
        margin-bottom: 1px;
        box-sizing: border-box;
    }

    .form-control {
        display: block;
        width: 100%;
        height: 40px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #000;
        background: #fff;
        border: 1px solid #00000096;
        border-radius: 8px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        text-align: left;
        margin: 1px;
        box-sizing: inherit;
    }

    .btn {
        padding: 10px 15px;
        font-size: 15px;
        line-height: 1.5;
        border-radius: 4px;
        display: inline-block;
        font-weight: normal;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        border: 1px solid transparent;
    }
    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }


</style>

<hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
    </div>
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">Change Password</div>
                        <div class="panel-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" name="oldpass" placeholder= "*******" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="newpass" placeholder="*******" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cnfnewpass" placeholder="*******" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <a href="dashboard.php" class="btn btn-danger btn-sm">Cancel</a>
                                    <input type="submit" value="Update" name="submit" class="btn btn-success btn-sm"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>