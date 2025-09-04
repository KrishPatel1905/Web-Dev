<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    WELCOME
    <form action="logout.php" method="post">
        <input type="text" name="txtuname" placeholder="Enter the name">
        <br>
        <input type="password" name="txtpsd" placeholder="Enter the password">
        <br>
        <input type="submit" name="btnlogin" value="Login">
         <input type="submit" name="btnlogin1" value="Logout">
    </form>
    <?php
    session_start();
    define("USER", "ADMIN");
    define("PSD", "1234");

    if (isset($_POST["btnlogin"])) {
        $uname = $_POST["txtuname"];
        $psd = $_POST["txtpsd"];
        echo 'Name: ' . htmlspecialchars($uname) . '<br>';

        if ($uname === USER && $psd === PSD) {
            $_SESSION['uname']=$uname   ;
            header("Location: profile.php?str=" . urlencode($uname));
            exit;
        } else {
            echo "Login Failed";
        }
    }
    ?>
</body>

</html>