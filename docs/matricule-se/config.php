<?php

    $dbHost = 'LocalHost';
    $dbusername = 'root';
    $dbPassword = 'Pontepreta@220404';
    $dbName = 'formulario-ctft';

    $conexao = new mysqli($dbHost, $dbusername, $dbPassword, $dbName);

    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    //if($conexao ->connect_errno)
    //{
    //    echo "Error";
    //}
    //else
    //{
    //   echo "Conexão efetuada com sucesso";
    //}
?>