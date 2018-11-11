<?php

if ( count($_POST) > 0 );
{
    if ( $_POST['username'] == 'testuser' && $_POST['password'] == 'testpassword' )
        echo 'Login accepted...';
    else
        echo 'Access denied!';
}

?>