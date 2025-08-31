<?php
session_start();

if (!isset($_GET['name']) || strlen($_GET['name']) < 1) {
    die("Name parameter missing");
}

$names = array("Rock", "Paper", "Scissors");

function check($computer, $human) {
    if ($human == $computer) return "Tie";
    elseif (($human == 0 && $computer == 2) || 
            ($human == 1 && $computer == 0) || 
            ($human == 2 && $computer == 1)) {
        return "You Win";
    } else {
        return "You Lose";
    }
}

$human = isset($_POST["human"]) ? $_POST["human"] + 0 : -1;
$computer = rand(0, 2);
$result = false;

if (isset($_POST['logout'])) {
    header("Location: index.php");
    return;
}

if ($human == 3) {
    $result = "";
    for ($c = 0; $c < 3; $c++) {
        for ($h = 0; $h < 3; $h++) {
            $r = check($c, $h);
            $result .= "Human=$names[$h] Computer=$names[$c] Result=$r<br/>";
        }
    }
} elseif ($human >= 0 && $human <= 2) {
    $result = "Your Play=" . $names[$human] . " Computer Play=" . $names[$computer] . " Result=" . check($computer, $human);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>c6158261 - Rock Paper Scissors</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <p>Welcome: <?= htmlentities($_GET["name"]) ?></p>

    <form method="POST">
        <select name="human">
            <option value="-1">Select</option>
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
            <option value="3">Test</option>
        </select>
        <input type="submit" value="Play">
        <input type="submit" name="logout" value="Logout">
    </form>

    <pre>
<?php
    if ($result !== false) {
        echo $result;
    }
?>
    </pre>
</body>
</html>
