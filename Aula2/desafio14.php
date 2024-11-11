<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    $palavras = ["carro", "Bicicleta", "Moto", "Avião", "Trem"];
   

        foreach ($palavras as $palavra) {
            if (strlen($palavra)>5) {
                echo $palavra. "<br>";
            }
        }



    ?>

</body>

</html>