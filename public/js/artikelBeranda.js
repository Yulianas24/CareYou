const wrapImage = document.querySelectorAll("[wrap-image]");
const imageGendre = document.querySelectorAll("[image-gendre]");

wrapImage.forEach((n) => {
    imageGendre.forEach((imageGendre) => {
        n.style.height = `${imageGendre.clientHeight}px`;
        n.style.width = `${imageGendre.clientWidth}px`;
    });
});
