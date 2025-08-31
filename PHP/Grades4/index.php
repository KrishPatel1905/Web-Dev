<!DOCTYPE html>
<html>
<head>
    <title>MD5 PIN Cracker</title>
</head>
<body>
    <h1>MD5 PIN Cracker</h1>
    <p>This application takes a 32-character MD5 hash 4-digit PIN (0000-9999).</p>

    <form>
        <input type="text" name="md5" size="40" placeholder="Enter MD5 ">
        <input type="submit" value="Crack">
    </form>

    <pre>
<?php
if (isset($_GET['md5'])) {
    $md5 = $_GET['md5'];
    $time_pre = microtime(true);
    $show = 15;
    $found = "PIN: Not found";

    for ($i = 0; $i <= 9999; $i++) {
        $try = str_pad((string)$i, 4, '0', STR_PAD_LEFT);  // ensures leading zeroes (e.g., '0034')
        $check = hash('md5', $try);

        if ($show > 0) {
            echo "Trying $try => $check\n";
            $show -= 1;
        }

        if ($check == $md5) {
            $found = "PIN: $try";
            break;
        }
    }

    $time_post = microtime(true);
    $elapsed = $time_post - $time_pre;

    echo "\n$found\n";
    echo "Elapsed time: $elapsed seconds\n";
}
?>
    </pre>
</body>
</html>