<?php
$conn = mysqli_connect("localhost","root","","crud_example");

if(isset($_POST["add"])){
    mysqli_query($conn,"INSERT INTO users (name,email) VALUES ('{$_POST['name']}','{$_POST['email']}')");

}

if (isset($_GET['delete'])) {
    mysqli_query($conn, "DELETE FROM users WHERE id={$_GET['delete']}");
}

$result = mysqli_query($conn, "SELECT * FROM users");
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Detail </h2>
    <form method="post" action="">
        <input type="text" name="name" id="" placeholder="name">
        <input type="text" name="email" id="" placeholder="email">
        <button name="add">Add</button>
    </form>
<h3>Users List</h3>
<table border="1" cellpadding="8">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
    <?php foreach($users as $u): ?>
    <tr>
        <form method="post">
            <td><?= $u['id'] ?></td>
            <td><input type="text" name="name" value="<?= $u['name'] ?>"></td>
            <td><input type="email" name="email" value="<?= $u['email'] ?>"></td>
            <td>
                <input type="hidden" name="id" value="<?= $u['id'] ?>">
                <button name="update">Update</button>
                <a href="?delete=<?= $u['id'] ?>">Delete</a>
            </td>
        </form>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

