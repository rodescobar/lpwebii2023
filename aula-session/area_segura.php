<?php
    session_start();

    if(!isset($_SESSION['login']))
    {
        echo "Area restrita... redierct(login)";
    }
    else
    {
        echo "Olá " . $_SESSION['login']['nome'];
    }
?>