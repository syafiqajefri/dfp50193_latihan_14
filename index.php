<?php
date_default_timezone_set('Asia/Kuala_Lumpur')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Contoh cookie</h1>

    <?php
    $masa = time();
    echo $masa . ' | ';
    echo 'sekarang: ' .  date('h:i a', $masa);

    $baru = $masa + (60 * 5);
    echo '<br>' . $baru .' : 5 minit kemudian: ' . date('h:i a', $baru);
    ?>
    <p><a href="cookie.php">Cookie</a></p>
</body>
</html>