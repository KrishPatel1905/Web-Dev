<?php
$conn = mysqli_connect("localhost", "root", "", "democlass");

if (!$conn) {
    die("DB connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name     = $_POST['fullname'];
    $email    = $_POST['email'];
    $mobile   = $_POST['mobile'];
    $username = $_POST['username'];
    $pass     = $_POST['password'];

    $sql = "INSERT INTO democlass (Name, email, mobile, username, pass) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $Name, $email, $mobile, $username, $pass);

    if ($stmt->execute()) {
        echo "✅ Registration successful!";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($conn);
?>
