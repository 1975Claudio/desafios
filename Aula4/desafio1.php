<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
  class Livro {
    public $titulo;
    public $autor;
    public $ano;

    public function __construct($titulo, $autor, $ano) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->ano = $ano;
    }
  
    public function exibirInformacoes() {
     echo "Titulo: ".$this->titulo."<br>";
     echo "Autor: ".$this->autor."<br>";
     echo "Ano: ".$this->ano."<br>";

    }
}
    $livro1 = new Livro("O contrato social", "Rousseau, Jacques", 1762);
    $livro2 = new Livro("O Principe", "Maquiavel, Nicolau", 1532);
    
    $livro1 -> exibirInformacoes();
    echo "<br>";
    $livro2 -> exibirInformacoes();

?>
   
   