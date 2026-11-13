<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php'); exit; }
$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$nomeValido = mb_strlen($nome) >= 2 && mb_strlen($nome) <= 80;
$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
?>
<!doctype html><html lang="pt-BR"><head><meta charset="UTF-8"><title>Resultado</title></head><body>
<?php if ($nomeValido && $emailValido): ?><h1>Dados recebidos!</h1><p>Olá, <?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>.</p><p>E-mail: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p><p>Esta demonstração não armazena nem envia dados.</p>
<?php else: ?><h1>Dados inválidos</h1><p>Informe nome e e-mail válidos.</p><a href="index.php">Voltar</a><?php endif; ?>
</body></html>
