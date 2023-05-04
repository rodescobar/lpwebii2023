<?php

    session_start();

    unset($_SESSION['login']);

    echo "Sua sessao acabou";
?>