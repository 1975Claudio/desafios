<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "post"){
        if(isset($_POST["nome"])&& strlen($_POST["nome"]) > 0){
           echo "olá" . $_POST["nome"];

    } else {
        $erro = "o nome é obrigatório";
    }
}
    ?>
   
   


    
    
    