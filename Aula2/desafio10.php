
<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
     
      $soma=0;
      for ($i= 1; $i<=100; $i++) {
                  
       if ($i %2== 0) {
        $soma++;
                         
        }
    }
    echo "A soma de todos os números pares de 1 a 10O é " .$soma;
    ?>

</body>

</html>