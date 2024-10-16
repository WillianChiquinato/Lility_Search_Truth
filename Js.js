const menuDiv = document.getElementById('Menu-Mobile');
const btn = document.getElementById('Btn-Menu');

menuDiv.addEventListener('click', Animar);

function Animar()
{
    menuDiv.classList.toggle('abrir')
    btn.classList.toggle('Ativar-Menu-Mobile')
}