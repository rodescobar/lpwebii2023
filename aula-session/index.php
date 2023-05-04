<?php
    session_start();   

    if (!isset($_SESSION['login']))
    {
        $_SESSION['login'] = 1;
    }
    else
    {
        //$_SESSION['login'] += 1;
        $_SESSION['login'] = $_SESSION['login'] + 1;
    }

    echo $_SESSION['login'];
?>
