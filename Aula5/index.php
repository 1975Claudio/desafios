<?php
include("connection.php");

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "<h1>Usuários sem filtro</h1>";

$result = $stmt->fetchAll();
foreach ($result as $row) {
    echo $row['nome'] . "<br>";
}

echo "<h2>Usuários com filtro</h2>";

// Filtragem por paremetro
$sql = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);

// Definir o valor do parâmetro e executar a consulta
$email = "exemplo@dominio.com";
$stmt->execute();

$result = $stmt->fetchAll();
foreach ($result as $row) {
    echo $row['nome'] . "<br>";
}

