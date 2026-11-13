const form = document.querySelector('#form-tarefa');
const campo = document.querySelector('#tarefa');
const lista = document.querySelector('#lista');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  const texto = campo.value.trim();
  if (!texto) return;
  const item = document.createElement('li');
  const descricao = document.createElement('span');
  descricao.textContent = texto;
  const remover = document.createElement('button');
  remover.type = 'button'; remover.textContent = 'Remover';
  remover.addEventListener('click', () => item.remove());
  item.append(descricao, remover); lista.append(item); form.reset(); campo.focus();
});
