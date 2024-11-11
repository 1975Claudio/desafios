<?php
include("connection.php");

 // Consulta SQL para deletar um registro
 $sql = "DELETE FROM usuarios WHERE id = :id";
    
 // Preparando a consulta
 $stmt = $pdo->prepare($sql);

 // Definindo o valor do parâmetro
 $id = 4; // Supondo que estamos deletando o usuário com ID 1

 // Vinculando o parâmetro ao valor
 $stmt->bindParam(':id', $id);

 // Executando o comando
 $stmt->execute();

 echo "Usuário deletado com sucesso!";