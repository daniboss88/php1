<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

// Session example. //

session_start();

echo 'Welcome to page #1';

$_SESSION['favcolor']   = 'green';
$_SESSION['animal']     = 'cat';
$_SESSION['time']       = time();
$_SESSION['name']       = 'Steve';

echo '<br> /><a href="page2.php">page 2 </a>';

    ?>
    
</body>
</html>