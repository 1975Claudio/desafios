<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <form method="POST" action="">
    Nome de usuario: <input type="text" name="username"><br>
    Senha: <input type="password" name="password"><br>
    <input type="submit" value="login"><br>
    </form>
  
    <?php
   if ($_SERVER ['REQUEST_METHOD'] == "POST") {
    $username = $_POST ["username"];
    $password = $_POST ["password"];

    $username_err = $password_err ="";
   
    if (empty($username)) {
        $username_err = "O campo nome do usuário não pode estar vazio.";
   }

   if (empty($password)) {
    $password_err = "O campo senha não pode estar vazio.";
   }

   if ($username === "admin" && $password === "1234") {
    echo "Bem-vindo, " .htmlspecialchars($username). "!";
    
   } else {
    if (empty($username_err) && empty($password_err)) {
        echo "Nome do usuário ou senha incorretos.";
    } else {
        echo $username_err . "<br>";
        echo $password_err . "<br>";

    }
   }
}
?>
</body>
</html>