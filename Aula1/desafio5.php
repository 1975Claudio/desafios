<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php

    $preco = 250;
    $percentual = .20;
    $desconto = $preco * $percentual;
    $final = $preco - $desconto;

    
    echo "O preço final do produto com desconto é $final";
   

    ?>

</body>

</html>