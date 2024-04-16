<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    echo "<script>location.href ='login.php'</script>";
} else {
    if (isset($_REQUEST['button1'])) {
        session_unset();
        echo session_destroy();
        echo "<script>location.href='login.php'</script>";
    }
    echo "Welcome {$_SESSION['username']} <br> Your password was {$_SESSION['password']}<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>
    <form action="" method="post">
        <button name="button1" value="btn2">Log Out</button>
    </form>
</body>

</html>