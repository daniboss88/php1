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
    <p>Welcome to Cookie test.</p>

    <?php
        $value = 'content of test cookie';
        //setcookie( "TestCookie", $value );
        //setcookie( "TestCookie", $value, time()+3600); //expire in 1 hour
        setcookie( "TestCookie", $value, time()+3600, "/post_test/", "example.com" );

    ?>
<br><a href="page2.php">page 2 </a>;

    
</body>
</html>