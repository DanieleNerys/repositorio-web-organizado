const numeroA = 12;
const numeroB = 8;
function somar(a, b) { return a + b; }
document.querySelector('#somar').addEventListener('click', () => {
  document.querySelector('#resultado').textContent = `Resultado: ${somar(numeroA, numeroB)}`;
});
