const btnMenu = document.getElementById("btnMenu");
const sidebar = document.getElementById("sidebar");
const btnCloseSidebar = document.getElementById("btnCloseSidebar");
const sidebarOverlay = document.getElementById("sidebarOverlay");

function openSidebar() {
  sidebar.classList.add("active");
}

function closeSidebar() {
  sidebar.classList.remove("active");
}

btnMenu.addEventListener("click", openSidebar);
btnCloseSidebar.addEventListener("click", closeSidebar);
sidebarOverlay.addEventListener("click", closeSidebar);

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && sidebar.classList.contains("active")) {
    closeSidebar();
  }
});
