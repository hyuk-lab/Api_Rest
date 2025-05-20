<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'tmdb_filmes';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $usuario, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexeao Realizada com sucesso";

} catch (PDOException $e) {

    echo "Não foi possivel conectar!" .
        $e->getMessage();
}








?>