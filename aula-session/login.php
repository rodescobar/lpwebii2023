<?php
    session_start();
    /*
        $usuario = $_POST['usuario'];
        $senha = $request->input("senha");

        Banco: SELECT * FROM usuario....
    */
    $array = [
        "login" => "true",
        "usuario" => "teste@gmail.com",
        "nome" => "Rodrigo Escobar",
        "data" => "03/05/2023"
    ];

    $_SESSION["login"] = $array;

?>