const links = document.querySelectorAll("nav a");
const title = document.title;
const titleText = document.querySelector("h1");

if (titleText != null) {
    titleText.innerText = title;

    links.forEach((link) => {
        if (link.innerText == title) {
            link.classList.add("activeLink");
            link.setAttribute("tabindex", "-1");
        }
    });
}

const menu_icon = document.querySelector(".menu-icon");
const hamburger_menu = document.querySelector(".hamburger-menu");

menu_icon.addEventListener("click", () => {
    hamburger_menu.classList.toggle("show-menu");
});