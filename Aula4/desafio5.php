<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
    interface FormaGeometrica {
        public function calcularArea();
        public function calcularPerimetro();
    }

    class Quadrado implements FormaGeometrica { 
        private $lado;
        public function __construct($lado) {
        $this->lado = $lado;
        }
        public function calcularArea(){
        return $this->lado * $this->lado;
         }        
    
        public function calcularPerimetro() {
        return 4 * $this->lado;
        }
    }

   class Circulo implements FormaGeometrica {
        private $raio;
        public function __construct($raio) {
            $this->raio = $raio;
        }
        public function calcularArea() {
        return  pi() * $this->raio * $this->raio;
        }
        public function calcularPerimetro() {
            return  2 * pi() * $this->raio;
            }
}
$quadrado = new Quadrado(5);
$circulo = new Circulo(4);

echo "A área do quadrado: " .  number_format($quadrado->calcularArea(), 2) . "<br>";
echo "Perímetro do quadrado: ". number_format($quadrado->calcularPerimetro(), 2) . "<br>";
echo "Área do circulo: ". number_format($circulo->calcularArea(), 2)  . "<br>";
echo "Perímetro do circulo: ". number_format($circulo->calcularPerimetro(), 2);


?>
   