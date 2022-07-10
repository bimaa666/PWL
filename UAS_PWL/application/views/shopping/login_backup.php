<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action = "<?php echo base_url()."index.php/shopping/aksi_login"; ?>" method="POST">
        username : <input type="text" name="username" placeholder="username"><br>
        password : <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="Login">

    </form>
</body>
</html>