<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    class Pessoa
    {
        protected $nome;
        protected $idade;

        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function apresentar()
        {
            echo "Meu nome é " . $this->nome . " e tenho " . $this->idade . "anos. <br>";

        }
    }

    class Estudante extends Pessoa
    {
        private $curso;
        public function __construct($nome, $idade, $curso)
        {
            parent::__construct($nome, $idade);
            $this->curso = $curso;
        }
        public function apresentar()
        {
            echo "Meu nome é " . $this->nome . ", tenho " . $this->idade . "anos e estudo " . $this->curso . "<br>";
        }
    }
    $estudante1 = new Estudante("Carlos", 23, "Medicina");

    $estudante2 = new Estudante("Maria", 21, "Direito");
    $estudante1->apresentar();
    $estudante2->apresentar();

    ?>