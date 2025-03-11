// Função para ajustar a rolagem com um offset para a div sticky
function scrollOffset(id) {
    const target = document.querySelector("#" + id);
    const offset = document.querySelector("#header").offsetHeight; // Altura da div sticky
    const targetPosition = target.offsetTop - offset; // Posição do alvo menos o offset da div sticky

    // Role a página até a posição desejada
    window.scrollTo({
        top: targetPosition,
        behavior: "smooth", // Rolagem suave
    });

    // Fechar o menu lateral ao clicar em um item
    const sidebar = document.getElementById("sidebar-multi-level-sidebar");
    const menuToggle = document.getElementById("menu-toggle");
    sidebar.classList.add("-translate-x-full");
    if (menuToggle) {
        menuToggle.checked = false;
    }
}

document.addEventListener("DOMContentLoaded", (event) => {
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("sidebar-multi-level-sidebar");

    if (menuToggle) {
        menuToggle.addEventListener("click", () => {
            if (sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.remove("-translate-x-full");
            } else {
                sidebar.classList.add("-translate-x-full");
            }
        });
    }

    // Adicionar evento de clique aos itens do menu
    const menuItems = document.querySelectorAll(
        "#sidebar-multi-level-sidebar a"
    );
    menuItems.forEach((item) => {
        item.addEventListener("click", () => {
            sidebar.classList.add("-translate-x-full");
            if (menuToggle) {
                menuToggle.checked = false;
            }
        });
    });
});
