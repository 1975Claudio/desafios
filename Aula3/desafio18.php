<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <form method="POST" action="">
    Nome: <input type="text" name="nome"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit" value="enviar"><br>
    </form>
  
    <?php
   if ($_SERVER ['REQUEST_METHOD'] == "POST") {
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $nome_err = $email_err ="";
    
    if (empty($nome)) {
        $nome_err = "O campo nome não póde estar vazio.";
   };
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_err = "Por favor, insira um endereço de email válido.";
   }
   if (empty($nome_err) && empty($email_err)) {
    echo "Olá " .htmlspecialchars($nome). ", agradecemos pelo seu contato. Respoderemos para " . htmlspecialchars($email). " em breve.";
    $nome_err = "O campo nome não pode estar vazio.";
   } else {
    echo $nome_err. "<br>";
    echo $email_err. "<br>";
   }
}
?>
</body>
</html>
    