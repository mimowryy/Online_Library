const button = document.getElementById('randomButton');
const numberElement = document.getElementById('randomNumber');

button.addEventListener('click', () => {
  const randomNumber = Math.floor(Math.random() * 100000000) + 1;
  numberElement.textContent = randomNumber;
});