<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

        session_start();

        if (isset($_SESSION['name']))
            echo 'Hello '.$_SESSION['name'];
        else
            echo 'Not logged in.';

    ?>
    <a href="page3.php">page 3</a>
</body>
</html>