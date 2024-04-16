<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="username">Username : </label><input type="text" name="username" id="username">
        <br>
        <label for="password">Password : </label><input type="password" name="password" id="password">
        <br>
        <button name="button" value="btn1">Login</button>
    </form>
</body>

</html>

<?php

session_start();
// echo "System temporary directory : " . sys_get_temp_dir() . "<br>";
// $_SESSION['username'] = 'Varun';
// $_SESSION['password'] = '1to8';
if ((isset($_SESSION['username'])) && (isset($_SESSION['password']))) {
    echo "<script>location.href='welcome.php'</script>";
} {

    if (isset($_REQUEST['button'])) {
        $uname = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        if (!empty($uname) && !empty($pass)) {
            $_SESSION['username'] = $uname;
            $_SESSION['password'] = $pass;
            echo "Session's variable username and password are set.<br>";
            echo "Username = " . $_SESSION['username'] . "<br>";
            echo "Password = " . $_SESSION['password'] . "<br>";
            echo "<script>location.href='welcome.php'</script>";
        } else {
            echo "No value entered.";
        }
    }
}
//Use unset($var); to uset any variable even a session var.
//Use session_unset(); will unset all session variable return i.e  deletes only the variables  t on successfull otherwise F
// Use session_destroy(); to destroy the session and all its session variables init 
// best practise is to use unset the session var. before destroying them.
// session_unset();
// session_destroy();
?>