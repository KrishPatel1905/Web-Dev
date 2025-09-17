<?php
require "config.php";
$products = $conn->query("SELECT * FROM products");
?>
<!doctype html>
<html>
<head><title>Products</title></head>
<body>
<h2>Products</h2>
<a href="profile.php">Profile</a> | <a href="cart.php">Cart</a>
<hr>
<?php while($p = $products->fetch_assoc()): ?>
  <p>
    <?php echo $p['name']; ?> - ₹<?php echo $p['price']; ?>
    <a href="cart.php?add=<?php echo $p['id']; ?>">Add to Cart</a>
  </p>
<?php endwhile; ?>
</body>
</html>
