const title = document.title;
const titleText = document.querySelector("h1");
titleText.innerText = title;

const links = document.querySelectorAll("nav a");
links.forEach((link) => {
    if (link.innerText == title) {
        link.classList.add("activeLink");
        link.setAttribute("tabindex", "-1");
    }
});