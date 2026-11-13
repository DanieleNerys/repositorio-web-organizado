document.querySelector('#verificar').addEventListener('click', () => {
  const campo = document.querySelector('#nota');
  const nota = Number(campo.value);
  const resultado = document.querySelector('#resultado');
  if (campo.value === '' || nota < 0 || nota > 10) resultado.textContent = 'Digite uma nota válida entre 0 e 10.';
  else if (nota >= 7) resultado.textContent = 'Aprovado(a)!';
  else resultado.textContent = 'Ainda não atingiu a média. Continue estudando!';
});
const numeros = [];
for (let i = 1; i <= 5; i++) numeros.push(i);
document.querySelector('#contagem').textContent = numeros.join(' — ');
