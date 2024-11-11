<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    function nome($nome){
        echo "$nome";
    }
  
    nome("Claudio");
    echo"<br>";
    nome("Karen");
    echo"<br>";
    nome("Ana");
    echo"<br>";
    nome("Luiza");
    echo"<br>";
    nome("Cleber");
    echo"<br>";
    nome("Edson");
    echo"<br>";
    nome("Gustavo");
   
    function soma($numero1, $numero2){
        $resultado = $numero1 + $numero2;
        echo"<br>";
        echo "O resultado da soma é: " . $resultado;
    }

    soma(1, 2);

    ?>

</body>

</html>