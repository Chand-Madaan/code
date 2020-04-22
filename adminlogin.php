<!DOCTYPE>
<html>
<head>
    <title> LOGIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form action="adminloginprocess.php" method="post">
        <div class="form-group">
            <input class="form-control" placeholder="username" name="admin_user" type="text">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="password" name="admin_password" type="password">
        </div>
        <button class="btn btn-primary" type="submit" name="login">Sign In </button>
    </form>
</div>
</body>
</html>