<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

        session_start();
        if (session_destroy())
        {
            echo 'Session delete successfull.';
        }
        else
        {
            echo 'Session delete failure.';
        }

    ?>
</body>
</html>