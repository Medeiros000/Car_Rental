function scrollOffset3(id) {
  const target = document.querySelector("#" + id);
  const offset = document.querySelector("#header").offsetHeight;
  const targetPosition = target.offsetTop - offset;

  window.scrollTo({
    top: targetPosition,
    behavior: "smooth",
  });
  if (window.innerWidth < 630) {
    document.getElementById("sidebar-toggle").click();
  }
}

function scrollOffset(id) {
  const target = document.querySelector("#" + id);
  const offset = document.querySelector("#header").offsetHeight;
  const targetPosition = target.offsetTop - offset;

  window.scrollTo({
    top: targetPosition,
    behavior: "smooth",
  });
  if (window.innerWidth < 630) {
    document.getElementById("sidebar-toggle").click();
  }
  if (
    document.querySelector("#details-" + id) != null &&
    document.querySelector("#details-" + id).classList.contains("hidden")
  ) {
    toggleDetails(id);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("sidebar-toggle")
    .addEventListener("click", function () {
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

function toggleSection(name) {
  let section = document.getElementById("section-" + name);
  let icon = document.getElementById("icon-" + name);
  if (section.classList.contains("hidden")) {
    section.classList.remove("hidden");
    icon.textContent = "▼";
  } else {
    section.classList.add("hidden");
    icon.textContent = "▶";
  }
}

function toggleDetails(id) {
  let details = document.getElementById("details-" + id);
  if (details.classList.contains("hidden")) {
    details.classList.remove("hidden");
  } else {
    details.classList.add("hidden");
  }
}

function toggleSectionDD(name) {
  let section = document.getElementById("section-" + name);
  let icon = document.getElementById("icon-" + name);
  // Verifica se a seção está "fechada" baseado na opacidade
  if (section.classList.contains("opacity-0")) {
    // Remove o estado fechado e aplica o estado aberto
    section.classList.remove("opacity-0", "max-h-0");
    section.classList.add("opacity-100");
    icon.textContent = "▼";
  } else {
    // Retorna ao estado fechado
    section.classList.remove("opacity-100");
    section.classList.add("opacity-0");
    // Ajusta a altura para 0 com transição
    section.classList.add("max-h-0");
    icon.textContent = "▶";
  }
}

window.scrollOffset = scrollOffset;
window.toggleSection = toggleSection;
window.toggleDetails = toggleDetails;
