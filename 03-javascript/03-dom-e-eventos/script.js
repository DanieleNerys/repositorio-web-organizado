const mensagem = document.querySelector('#mensagem');
document.querySelector('#alternar').addEventListener('click', () => {
  mensagem.classList.toggle('destaque');
  mensagem.textContent = mensagem.classList.contains('destaque') ? 'Destaque ativado!' : 'Clique no botão para mudar minha aparência.';
});
