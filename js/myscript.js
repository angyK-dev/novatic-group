"use strict";

const navLinks = document.querySelectorAll(".nova-link");

Object.keys(navLinks).forEach(key => {
    // console.log(key, typeof navLinks[key], navLinks[key], navLinks[key].classList);
    navLinks[key].addEventListener("click", () => {
        // console.log(navLinks[key]);
        const _menuButton = document.querySelector("#menu-button");
        const _menu = document.querySelector("#navbarSupportedContent");
        console.log(_menuButton.classList); 
        _menuButton.classList.add("collapsed");
        _menu.classList.remove("show");
    })
})