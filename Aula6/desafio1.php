<!DOCTYPE html>
<html lang="pt-BR">


<body>
    <form method="POST" action="">
    Nome: <input type="text" name="nome"><br>
    Descricao: <input type="text" name="descricao"><br>
    Preco: <input type="text" name="preco"><br>
    Estoque: <input type="text" name="estoque"><br>
    <input type="submit" value="enviar"><br>
    </form>

    <?php

    include ("conection.php");
    
   if ($_SERVER ['REQUEST_METHOD'] == "POST") {
    $nome = $_POST ["nome"];
    $descricao = $_POST ["descricao"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $nome_err = $descricao_err = $preco_err = $estoque_err = "";
    
    if (empty($nome)) {
        $nome_err = "O campo nome não pode estar vazio.";
   }
   if (empty($descricao)) {
    $descricao_err = "O campo nome não pode estar vazio.";
   }
   if (empty($preco) || !is_numeric($preco)) {
    $preco_err = "Insira uma quantidade válida.";
   }
   if (empty($estoque) || !is_numeric($estoque)) {
    $estoque_err = "Insira uma quantidade válida.";
   }
   if (empty($nome_err) && empty($descricao_err) && empty($preco_err) && empty($estoque_err)) {
    try {
       // $pdo = new PDO("mysql:host=localhost;dbname=vendas", "root", "");
       // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo ->prepare("INSERT INTO produtos(nome, descricao, preco, estoque");
        $stmt->bindParam(":nome", $nome);   
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam("estoque", $estoque);
        $stmt->execute();
        echo "Produto cadastrado com sucesso.";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
    
} else {
    echo $nome_err . "<br>";
    echo $descricao_err ."<br>";
    echo $preco_err ."<br>";
    echo $estoque_err ."<br>";
}
}
?>
               
    </body>
</html>