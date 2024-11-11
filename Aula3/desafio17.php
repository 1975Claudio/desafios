<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
   $notas = array(
    "Carlos" => 8.5,
    "Bruno" => 7.2,
    "Marcos" => 8.9);

    $soma = 0;
    $totalAlunos = count($notas);

   foreach ($notas as $nome => $nota) {
    echo " Aluno: ". $nome .", Nota: ". $nota ."<br>";
    $soma += $nota;
    $media = $soma / $totalAlunos;
    }
   echo "A média da turma é: ". number_format($media, 2) ."<br>";
    ?>