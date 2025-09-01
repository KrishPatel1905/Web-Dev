<!DOCTYPE html>
<html>
<body>
  <form method="post">
    Enter your name: 
    <input type="text" name="firstname" placeholder="Enter the Name "> <br><br>
    <button type="submit">Submit</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["firstname"]; // get form value
    echo "Hello, " . $name . "!";
  }
  ?>
</body>
</html>