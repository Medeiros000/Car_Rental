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
    if (window.innerWidth < 630) {
        // Fechar o menu lateral ao clicar em um item
        document.getElementById("sidebar-toggle").click();
    }
}

// document.addEventListener("click", function (e) {
//     if (window.innerWidth < 630) {
//         const sidebar = document.getElementById("separator-sidebar");
//         if (sidebar && !sidebar.contains(e.target)) {
//             document.getElementById("sidebar-toggle").click();
//         }
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("sidebar-toggle")
        .addEventListener("click", function () {
            console.log("click");
            var sidebar = document.getElementById("separator-sidebar");
            var iconRight = document.getElementById("icon-right");
            var iconLeft = document.getElementById("icon-left");

            if (sidebar.classList.contains("-translate-x-full")) {
                iconRight.classList.add("hidden");
                iconLeft.classList.remove("hidden");
            } else {
                iconRight.classList.remove("hidden");
                iconLeft.classList.add("hidden");
            }
        });
});
