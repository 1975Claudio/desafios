<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
   $produtos = array(
    "Arroz" => 10.50,
    "Feijão" => 7.30,
    "Macarrão" => 5.90);

   foreach ($produtos as $nome => $preco) {
    echo " Produto: ". $nome .", Preço: R$: ". $preco ."<br>";
   }
    ?>
    