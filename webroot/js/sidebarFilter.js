const openButton = document.getElementById('open-button');
const closeButton = document.getElementById('close-button');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('content');

openButton.addEventListener('click', () => {
    sidebar.style.right = '0';
    overlay.style.display = 'block';
    content.style.marginRight = '270px'; // Acomode o espaço da barra lateral
});

closeButton.addEventListener('click', () => {
    sidebar.style.right = '-350px';
    overlay.style.display = 'none';
    content.style.marginRight = '0';
});