<?php $nota = 8.5; $tecnologias = ['HTML', 'CSS', 'JavaScript', 'PHP']; ?>
<!doctype html><html lang="pt-BR"><head><meta charset="UTF-8"><title>Condicionais e loops PHP</title></head><body><h1>Condicionais e repetição</h1>
<p>Nota: <?= number_format($nota, 1, ',', '.') ?></p><p><?= $nota >= 7 ? 'Aprovado(a)!' : 'Continue estudando.' ?></p><h2>Tecnologias</h2><ul>
<?php foreach ($tecnologias as $item): ?><li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?>
</ul></body></html>
