<?php $titulo = 'Meu primeiro exemplo PHP'; $tecnologia = 'PHP'; ?>
<!doctype html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></title></head><body>
<h1><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></h1><p>Estou estudando <?= htmlspecialchars($tecnologia, ENT_QUOTES, 'UTF-8') ?>.</p><p>Data do servidor: <?= date('d/m/Y H:i') ?></p>
</body></html>
