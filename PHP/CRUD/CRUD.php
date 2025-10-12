<?php
$conn = new mysqli("localhost","root","","crud_example");


 if(isset($_POST['add']))
 {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $conn->query("INSERT INTO users(name,email) VALUES ('$n','$e')");
 }

 if(isset($_POST['del']))
 {
    $id = $_GET['del'];
    $conn->query("DELETE FROM users WHERE id = $id");

 }
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>SIMPLE PHP CRUD </h3>
    <form  method="post">
        Name : <input type="text" name="name">
        Email : <input type="text" name="email">

        <input type="submit" name="add" value="add">
    </form>
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Deleted </th>
    </tr>
    <?php
    $r = $conn->query("SELECT * FROM  users");
    while($row = $r->fetch_assoc())
    {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td> 
                <td>{$row['email']}</td>
<tr>";
            
    }
    ?>
    

    </table>
</body>
</html>