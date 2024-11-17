// import "./bootstrap";

const menuButton = document.querySelector("#menu-button");
const closeMenuButton = document.querySelector("#close-menu-button");
const mobileMenu = document.querySelector("#mobile-menu");
menuButton.addEventListener("click", function (e) {
    e.preventDefault();
    mobileMenu.classList.toggle("hidden");
});
closeMenuButton.addEventListener("click", function (e) {
    e.preventDefault();
    mobileMenu.classList.toggle("hidden");
});
