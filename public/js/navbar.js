const navbar = document.querySelector(["nav"]);
const textLinks = document.querySelectorAll("#textLinks");
const loginText = document.querySelector("#loginText");
const humburger = document.querySelectorAll("[hamburger]");
const mobileBar = document.querySelector("[mobileBar]");
const classNavbar = navbar.classList;
const classLoginText = loginText.classList;
const laptopScreen = window.innerWidth >= 1024;
const mobileScreen = window.innerWidth < 1024;
const mobileScreenHeight = window.innerHeight < 450;

// ?: Responsive background
window.addEventListener("scroll", function () {
    scrollVertical = window.scrollY;
    if (scrollVertical > 50) {
        textLinks.forEach((n) => {});
        classNavbar.remove("bg-transparent");
        classNavbar.add("bg-white");
        classNavbar.add("shadow-lg");
        if (laptopScreen) {
            n.classList.remove("text-white");
            n.classList.add("text-black");
            classLoginText.remove("text-white");
            classLoginText.add("text-black");
        } else if (mobileScreen) {
            humburger.forEach((element) => {
                if (mobileBar.classList.contains("right-0")) {
                    element.classList.remove("bg-black");
                    element.classList.add("bg-white");
                } else {
                    element.classList.remove("bg-white");
                    element.classList.add("bg-black");
                }
            });
        }
    } else if (scrollVertical <= 50) {
        textLinks.forEach((n) => {
            if (laptopScreen) {
                n.classList.remove("text-black");
                n.classList.add("text-white");
            } else if (mobileScreen) {
                humburger.forEach((element) => {
                    element.classList.remove("bg-black");
                    element.classList.add("bg-white");
                });
            }
        });
        classLoginText.remove("text-black");
        classLoginText.add("text-white");
        classNavbar.remove("bg-white");
        classNavbar.remove("shadow-lg");
        classNavbar.add("bg-transparent");
    }
});
let tes = true;
humburger.forEach((n) => {
    n.addEventListener("click", () => {
        tes = !tes;
        if (tes === true) {
        }
        mobileBar.classList.toggle("-right-105");
        mobileBar.classList.toggle("right-0");
    });
});
