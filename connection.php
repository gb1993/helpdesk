<?php

SESSION_START();
$host = "localhost";
$user = "root";
$pass = "";
$db = "helpdesk";

global $pdo;

try {
    $pdo = new PDO ("mysql:dbname=".$db."; host=".$host, $user, $pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Erro relacionado ao banco de dados: ".$error->getMessage();
    exit;
}