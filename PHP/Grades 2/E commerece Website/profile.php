<?php

require "config.php";
if (empty($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
?>
<!doctype html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
<p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
<p><a href="products.php">View Products</a></p>
<p><a href="cart.php">View Cart</a></p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
