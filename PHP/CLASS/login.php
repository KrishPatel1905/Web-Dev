<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    WELCOME
    <form action="" method="post">
        <input type="text" name="txtuname" placeholder="Enter the name" required>
        <br>
        <input type="password" name="txtpsd" placeholder="Enter the password" required>
        <br>
        <input type="submit" name="btnlogin" value="Login">
    </form>
    <?php
    session_start();
    define("USER", "ADMIN");
    define("PSD", "1234");

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "democlass";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Database connection failed: " . mysqli_connect_error();
    }

    if (isset($_POST["btnlogin"])) {
        $uname = $_POST["txtuname"];
        $psd = $_POST["txtpsd"];

        // Store login data into admin table
        $sql = "INSERT INTO admin (na   me, password) VALUES ('$uname', '$psd')";
        mysqli_query($conn, $sql);

        if ($uname === USER && $psd === PSD) {
            $_SESSION['uname'] = $uname;
            header("Location: profile.php?str=" . urlencode($uname));
            exit;   
        } else {                            
            echo "Login Failed";    
        }       
    }       
    ?>      
</body>     

</html>