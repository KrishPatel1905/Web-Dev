<?php
$conn = mysqli_connect("localhost", "root", "", "democlass");

if (!$conn) {
    die("DB connection failed");
}

if ($_POST) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO democlass (name, pass) VALUES ('$name', '$pass')";
    if (mysqli_query($conn, $sql)) {
        echo "User registered!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Fill the form first.";
}

mysqli_close($conn);
?>
