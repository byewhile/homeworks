const links = document.querySelectorAll("nav a");
const title = document.title;
const titleText = document.querySelector("h1");
titleText.innerText = title;

links.forEach((link) => {
    if (link.innerText == title) {
        link.classList.add("activeLink");
        link.setAttribute("tabindex", "-1");
    }
});