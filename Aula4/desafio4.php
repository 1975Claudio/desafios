<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
  Class Animal {
    public function fazerSom() {
        echo "O animal está fazendo um som <br>";

  }
}
Class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo <br>";
    }
}
Class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando <br>";
    }
}
$cachorro = new Cachorro();
$gato = new Gato();

$cachorro ->fazerSom();
$gato -> fazerSom();


    ?>
   