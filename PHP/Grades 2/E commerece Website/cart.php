<?php
require "config.php";

// initialize cart
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

// add product
if (isset($_GET['add'])) {
    $id = (int)$_GET['add'];
    if (!isset($_SESSION['cart'][$id])) $_SESSION['cart'][$id] = 1;
    else $_SESSION['cart'][$id]++;
    header("Location: cart.php");
    exit;
}

// fetch cart items
$items = [];
$total = 0;
if ($_SESSION['cart']) {
    $ids = implode(",", array_keys($_SESSION['cart']));
    $res = $conn->query("SELECT * FROM products WHERE id IN ($ids)");
    while ($row = $res->fetch_assoc()) {
        $qty = $_SESSION['cart'][$row['id']];
        $row['qty'] = $qty;
        $row['subtotal'] = $row['price'] * $qty;
        $items[] = $row;
        $total += $row['subtotal'];
    }
}
?>
<!doctype html>
<html>
<head><title>Cart</title></head>
<body>
<h2>Your Cart</h2>
<a href="products.php">Continue Shopping</a> | <a href="profile.php">Profile</a>
<hr>
<?php if (!$items): ?>
  <p>Cart is empty.</p>
<?php else: ?>
  <ul>
    <?php foreach($items as $i): ?>
      <li><?php echo $i['title']; ?> (x<?php echo $i['qty']; ?>) - ₹<?php echo $i['subtotal']; ?></li>
    <?php endforeach; ?>
  </ul>
  <p><strong>Total: ₹<?php echo $total; ?></strong></p>
<?php endif; ?>
</body>
</html>
