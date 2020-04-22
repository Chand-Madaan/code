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
                            echo "<h4 align='center'><font color='green'><b>Password Succesfully Changed !</b></font></h4>";
                        }
                    }
                    else
                    {
                        echo "<h4 align='center'><font color='red'><b>Incorrect old password</font></b></h4>";
                    }
                }
            }
        }


    }
    else
    {
        echo "<h4 align='center'><font color='red'><b>new password do not match !</font></h4>";
    }
}

?>
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