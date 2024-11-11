<!DOCTYPE html>
<html lang="pt-BR">


<body>
    <form method="POST" action="">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" value="atualizar"><br>
    </form>

    <?php

    include ("conection.php");
    
   if ($_SERVER ['REQUEST_METHOD'] == "POST") {
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $senha = $_POST["senha"];
    $id = 1;

    $nome_err = $email_err = $senha_err = "";
    
    if (empty($nome)) {
        $nome_err = "O campo nome não pode estar vazio.";
   }
   if (empty($email)) {
    $email_err = "O campo email não pode estar vazio.";
   //} elseif (!filter_has_var($email, FILTER_VALIDATE_EMAIL)) {
  // $email_err = "Por favor, insira um email válido. " ;
    }
    if (empty($senha)) {
        $senha_err = "O campo senha não pode está vazio.";
    }
      
   if (empty($nome_err) && empty($email_err) && empty($senha_err) ) {
    try {
       // $pdo = new PDO("mysql:host=localhost;dbname=vendas", "root", "");
       // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt = $pdo ->prepare("UPDATE dados (nome, email, senha, confirmar");
        $stmt->bindParam(":nome", $nome);   
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam("id", $id);
        $stmt->execute();
        echo "Dados atualizados com sucesso.";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
    
} else {
    echo $nome_err . "<br>";
    echo $email_err ."<br>";
    echo $senha_err ."<br>";
  }
}
?>
               
    </body>
</html>