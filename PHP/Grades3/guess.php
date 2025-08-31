<?php
// Set the correct number for the guessing game
// You'll need to modify this to match what the autograder expects
$correct_number = 58; // Change this number as needed for the autograder

?>
<!DOCTYPE html>
<html>
<head>
    <title> 5d3113c8</title>
</head>

<body>
    <h1>Number Guessing Game</h1>
    
    <?php
    // Check if guess parameter exists
    if (!isset($_GET['guess'])) {
        echo "<p>Missing guess parameter</p>";
    }
    // Check if guess parameter is empty
    elseif ($_GET['guess'] === '') {
        echo "<p>Your guess is too short</p>";
    }
    // Check if guess is numeric
    elseif (!is_numeric($_GET['guess'])) {
        echo "<p>Your guess is not a number</p>";
    }
    else {
        // Convert to integer for comparison
        $guess = (int)$_GET['guess'];
        
        // Compare guess with correct number
        if ($guess < $correct_number) {
            echo "<p>Your guess is too low</p>";
        }
        elseif ($guess > $correct_number) {
            echo "<p>Your guess is too high</p>";
        }
        else {
            echo "<p>Congratulations - You are right</p>";
        }
    }
    ?>
    
</body>
</html>