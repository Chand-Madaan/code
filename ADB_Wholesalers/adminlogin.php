<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title> LOGIN </title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar">
        <a href="dashboard.php">
            <h1>ADB WHOLESALERS</h1></a>
    </nav>

    <form action="adminloginprocess.php" method="post">
            <div class="f">
                <h1>Welcome To Login</h1>
                <div class="login">
                    <input class="form-control1" placeholder="username" name="admin_user" type="text">
            <input class="form-control2" placeholder="password" name="admin_password" type="password">
                </div>
                <div class="button">

        <button class="btn btn-primary" type="submit" name="login">Sign In </button>
         </div>
            </div>
    </form>

</body>
</html>
            <!-- <input class="form-control" placeholder="username" name="admin_user" type="text">
            <input class="form-control2" placeholder="password" name="admin_password" type="password">
        <!-- </div>
        <div class="form-group">
        <input class="form-control2" placeholder="password" name="admin_password" type="password">
        </div>

         <button class="btn btn-primary" type="submit" name="login">Sign In </button>
    </body
