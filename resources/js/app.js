import axios from 'axios';
import './bootstrap';


const firstProduct = document.querySelector(".product-card");

if (firstProduct) {
    localStorage.setItem("first_product", firstProduct.getAttribute("id"));
}


document.addEventListener("DOMContentLoaded", () => {
    if (!document.referrer) {
        const path = window.location.pathname.split("/");
        path.pop();

        const pathStr = path.join("/");
        window.location.replace(`${window.location.origin}${pathStr}/${localStorage.getItem("first_product")}`); //temp
    }
});

const orderBtn = document.querySelector(".single-product-info__order");

if (orderBtn) {
    orderBtn.addEventListener("click", () => {
        orderBtn.textContent = orderBtn.textContent === "Naruči" ? "Zatvori" : "Naruči";
        const form = document.querySelector(".form-wrap-form");
        form.style.display = form.style.display === "flex" ? "none" : "flex";
    });
}
