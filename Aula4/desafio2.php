<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php
  class ContaBancaria {
    private $saldo =0;

    public function depositar($valor) {
        $this->saldo += $valor;
    }
    public function getSaldo() {
        return $this->saldo;
 
  }
}
  $conta = new ContaBancaria();

  $conta->depositar (2500);
 echo("Saldo em conta bancária é R$ " . $conta->getSaldo(). "<br>");
  
    ?>
   