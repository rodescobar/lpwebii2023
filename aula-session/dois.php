<?php
    session_start();

    if (isset($_SESSION['login']))
    {
        echo $_SESSION['login'];
    }
    else
    {
        echo "Session não existe";
    }
?>