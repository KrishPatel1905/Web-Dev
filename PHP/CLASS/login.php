<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <script>alert("Hello")</script> -->
    WELCOME
    <form action="" method="post">
        <input type="text" name="txtuname" placeholder="Enter the name ">
        <br>
        <input type="text" name="txtpsd" placeholder="Enter the number ">
        <br>
        <input type="submit" name="btnlogin">
        <?php

        if (isset($_POST["txtuname"]) && isset($_POST["txtpsd"])) {
            $uname = $_REQUEST["txtuname"];
            $psd = $_REQUEST["txtpsd"];
            echo 'Name :' . $uname . '<br>PASS :' . htmlspecialchars($psd) . '';

        }
        // if (isset($_POST["btnlogin"])) {
        //     $uname = $_POST["txtuname"];
        //     $psd = $_POST["txtpsd"];
        //     echo 'Name :' . $uname . '<br>PASS :' . $psd . '';

        // }
        ?>
    </form>
</body>

</html>