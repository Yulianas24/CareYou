const navbar = document.querySelector(["nav"]);
const textLinks = document.querySelectorAll("#textLinks");
const loginText = document.querySelector("#loginText");
const classNavbar = navbar.classList;
const classLoginText = loginText.classList;
window.addEventListener("scroll", function () {
    scrollVertical = window.scrollY;
    if (scrollVertical > 50) {
        textLinks.forEach((n) => {
            n.classList.remove("text-white");
            n.classList.add("text-black");
        });
        classLoginText.remove("text-white");
        classLoginText.add("text-black");
        classNavbar.remove("bg-transparent");
        classNavbar.add("bg-white");
        classNavbar.add("shadow-lg");
    } else if (scrollVertical <= 50) {
        textLinks.forEach((n) => {
            n.classList.remove("text-black");
            n.classList.add("text-white");
        });
        classLoginText.remove("text-black");
        classLoginText.add("text-white");
        classNavbar.remove("bg-white");
        classNavbar.remove("shadow-lg");
        classNavbar.add("bg-transparent");
    }
});
