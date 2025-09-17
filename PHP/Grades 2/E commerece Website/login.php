<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $_SESSION['user'] = $res->fetch_assoc();
        header("Location: profile.php");
        exit;
    } else {
        $error = "Invalid login!";
    }
}
?>
<!doctype html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="post">
  Email: <input type="email" name="email"><br><br>
  Password: <input type="password" name="password"><br><br>
  <button type="submit">Login</button>
</form>
</body>
</html>
