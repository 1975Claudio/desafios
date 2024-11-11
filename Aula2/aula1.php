<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    $carros = array("ferrai","bmw","mustang","volvo","jaguar");
    $contador = 1;
    
      
    while ($contador <= 10) {
        echo "O contador é :" . $contador;
            echo "<br>";
            $contador++;
    }

    for ($i = 0; $i < 10; $i++) {
        
    echo $i;
    echo "<br>";
    }
foreach ($carros as $carro) {
    
    echo $carro;
    echo "<br>";
    # code...
}
do{
    echo "<br>";
    echo $contador;
    echo "<br>";
    $contador++;
} while ($contador <= 10);

    ?>

</body>

</html>