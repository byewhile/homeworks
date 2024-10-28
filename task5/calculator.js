const inputs = document.querySelectorAll("input");
const pricesText = document.querySelectorAll("label span");
const totalPriceText = document.querySelector("h2 span");
let prices = [];
let totalPrice = 0;

for (let i = 0; i < pricesText.length; i++) {
    prices[i] = Number(pricesText[i].innerText.replace(/[^0-9,]/g,""));
}

inputs.forEach((input, index) => {
    input.addEventListener("change", (e) => {
        if (e.target.checked) {
            totalPrice += prices[index];
        } else {
            totalPrice -= prices[index];
        }
        totalPriceText.innerText = totalPrice;
    });
});