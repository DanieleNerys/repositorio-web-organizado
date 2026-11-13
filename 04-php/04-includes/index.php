<?php $tituloPagina = 'Página com includes'; require __DIR__ . '/header.php'; ?>
<h2>Conteúdo da página</h2><p>O cabeçalho e o rodapé são carregados de arquivos separados usando <code>require</code>.</p>
<?php require __DIR__ . '/footer.php'; ?>
