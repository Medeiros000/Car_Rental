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
