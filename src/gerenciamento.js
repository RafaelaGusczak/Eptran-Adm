function abrirMenu() {
    const menu = document.getElementById('menuEditar');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

function fecharMenu() {
    document.getElementById('menuEditar').style.display = 'none';
}
