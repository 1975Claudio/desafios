<?php
include ("conection.php");
    // Conexão com o banco de dados usando PDO
//$pdo = new PDO('mysql:host=localhost;dbname=seu_banco_de_dados', 'seu_usuario', 'sua_senha');
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
// Configuração para a paginação
$produtos_por_pagina = 10;
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($pagina_atual - 1) * $produtos_por_pagina;
 
// Consulta para buscar os produtos com limite e offset
$stmt = $pdo->prepare("SELECT * FROM produtos LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $produtos_por_pagina, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
// Consulta para contar o total de produtos
$total_produtos = $pdo->query("SELECT COUNT(*) FROM produtos")->fetchColumn();
$total_paginas = ceil($total_produtos / $produtos_por_pagina);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Relação dos Produtos</h1>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li>
                <?php echo htmlspecialchars($produto['nome']); ?> - 
                <?php echo htmlspecialchars($produto['descricao']); ?> - 
                R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?> - 
                Estoque: <?php echo htmlspecialchars($produto['estoque']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
 
    <div>
        <?php if ($pagina_atual > 1): ?>
            <a href="?pagina=<?php echo $pagina_atual - 1; ?>">Página Anterior</a>
        <?php endif; ?>
 
        <?php if ($pagina_atual < $total_paginas): ?>
            <a href="?pagina=<?php echo $pagina_atual + 1; ?>">Próxima Página</a>
        <?php endif; ?>
    </div>
</body>
</html>
 