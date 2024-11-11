<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    $precos = [10.50, 20.30, 15.00, 5.25, 12.90];
    $total = 0;

        foreach ($precos as $preco) {
        $total += $preco;

       

        //echo " O total da compra é R$ ".number_format($total, 2, ",", "." )."<br>";
        }
        
        echo " O total da compra é R$ ". $total ."<br>";


    ?>

</body>

</html>