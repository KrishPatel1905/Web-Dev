<?php
$conn = new mysqli("localhost", "root", "", "demo");
if ($conn->connect_error) die("Connection failed");

$sql = "CREATE TABLE IF NOT EXISTS sdemo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100)
)";
$conn->query($sql);

$conn->query("INSERT INTO sdemo (name, email) VALUES ('Krish', 'krish@example.com')");
$conn->query("INSERT INTO sdemo (name, email) VALUES ('Patel', 'patel@example.com')");

$result = $conn->query("SELECT * FROM sdemo");
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    while ($field = $result->fetch_field()) echo "<th>{$field->name}</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $cell) echo "<td>$cell</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records";
}

$conn->close();
?>
