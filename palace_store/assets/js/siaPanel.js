//startLoader
window.addEventListener("load", function () {
  const loader = document.querySelector(".loader");
  loader.className += " hidden";
});

//toggler
document.querySelector("#navbarSideCollapse").addEventListener("click", function () {
  document.querySelector(".offcanvas-collapse").classList.toggle("open");
});
