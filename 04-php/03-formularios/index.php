<!doctype html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Formulário PHP</title></head><body><h1>Formulário de contato (demonstração)</h1>
<form action="processa.php" method="post"><p><label for="nome">Nome:</label><br><input id="nome" name="nome" required minlength="2" maxlength="80"></p><p><label for="email">E-mail:</label><br><input id="email" name="email" type="email" required maxlength="120"></p><button type="submit">Enviar</button></form>
</body></html>
