// ?: Variabel declaration
const navbar = document.querySelector(["nav"]);
const textLinks = document.querySelectorAll("[textLinks]");
const loginText = document.querySelector("[loginText]");
const hamburger = document.querySelectorAll("[hamburger]");
const mobileBar = document.querySelector("[mobileBar]");
const classNavbar = navbar.classList;
const classLoginText = loginText.classList;
const laptopScreen = window.innerWidth >= 1024;
const mobileScreen = window.innerWidth < 1024;
function screenNavbarActive() {
    if (laptopScreen) {
        classLoginText.remove("text-white");
        classLoginText.add("text-black");
    } else if (mobileScreen) {
        hamburger.forEach((element) => {
            if (mobileBar.classList.contains("right-0")) {
                element.classList.remove("bg-black");
                element.classList.add("bg-white");
            } else {
                element.classList.remove("bg-white");
                element.classList.add("bg-black");
            }
        });
    }
}

function screenNavbarNonActive() {
    textLinks.forEach((n) => {
        if (laptopScreen) {
            n.classList.remove("text-black");
            n.classList.add("text-white");
        } else if (mobileScreen) {
            textLinks.forEach((n) => {
                n.classList.remove("text-black");
                n.classList.add("text-white");
            });
            hamburger.forEach((element) => {
                element.classList.remove("bg-black");
                element.classList.add("bg-white");
            });
        }
    });
}

function hamburgerNavbar() {
    if (classNavbar.contains("bg-white")) {
        hamburger.forEach((n) => {
            n.classList.remove("bg-white");
            n.classList.add("bg-black");
        });
    } else if (classNavbar.contains("bg-transparent")) {
        hamburger.forEach((n) => {
            n.classList.remove("bg-black");
            n.classList.add("bg-white");
        });
    }
}
// ?: Responsive background
window.addEventListener("scroll", function () {
    scrollVertical = window.scrollY;
    if (scrollVertical > 50) {
        textLinks.forEach((n) => {
            if (laptopScreen) {
                n.classList.add("text-black");
            }
        });
        classNavbar.remove("bg-transparent");
        classNavbar.add("bg-white");
        classNavbar.add("shadow-lg");
        screenNavbarActive();
    } else if (scrollVertical <= 50) {
        classLoginText.remove("text-black");
        classLoginText.add("text-white");
        classNavbar.remove("bg-white");
        classNavbar.remove("shadow-lg");
        classNavbar.add("bg-transparent");
        screenNavbarNonActive();
    }
});

hamburger.forEach((n) => {
    n.addEventListener("click", () => {
        mobileBar.classList.toggle("-right-105");
        mobileBar.classList.toggle("right-0");

        for (let i = 0; i < hamburger.length; i++) {
            hamburger[1].classList.toggle("mr-4");
        }

        if (
            mobileBar.classList.contains("right-0") &&
            classNavbar.contains("bg-white")
        ) {
            hamburger.forEach((n) => {
                n.classList.remove("bg-black");
                n.classList.add("bg-white");
            });
        } else {
            hamburgerNavbar();
        }
    });
});
