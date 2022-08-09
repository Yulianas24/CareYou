const loginText = document.querySelector("[loginText]");
const hamburger = document.querySelectorAll("[hamburger]");
const mobileBar = document.querySelector("[mobileBar]");
const laptopScreen = window.innerWidth >= 1024;
const mobileScreen = window.innerWidth < 1024;

hamburger.forEach((n) => {
    n.addEventListener("click", () => {
        mobileBar.classList.toggle("-right-105");
        mobileBar.classList.toggle("right-0");
        for (let i = 0; i < hamburger.length; i++) {
            hamburger[i].classList.toggle("bg-black");
            hamburger[i].classList.toggle("bg-white");
        }
    });
});
