<?php
$user = 'root';
$password = '';
$db = 'adcd';
$host = 'localhost';
#$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db
   #$port
);


if(isset($_POST['submit'])){
$user = $_POST['username'];
$pass = $_POST['password'];

/*if(preg_match("/[^a-zA-Z0-9]+/", $user))
{
    echo "Login Attempt restricted.  :-/  ";
}

if(preg_match("/[^a-zA-Z0-9]+/", $pass))
{
    echo "Login Attempt restricted.  :-/  ";
}

else{*/

$query = "select * from users where username='$user' and password='$pass' ";
$execute = mysqli_query($link,$query);
    while($row=mysqli_fetch_array($execute)){

        header("location:welcome.php");
        }
}
#}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
    <h1> Login Form </h1>
    <form method="post">
    <input type="text" name="username" placeholder="username" id=""><br /><br />
    <input type="password" name="password" placeholder ="password"id=""><br /><br />
    <input type="submit" name="submit" value="Login">
    </form>
</div>
</body>
</html>