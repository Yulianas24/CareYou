// ?: Container Photo
const inputPhoto = document.querySelector("[input-photo]");
const buttonInputPhoto = document.querySelector("[button-input-photo]");
// todo: input Photo Trigger
buttonInputPhoto.addEventListener("click", () => {
    inputPhoto.click();
});

// ?: Dynamic Length
const inputField = document.querySelectorAll("[dynamis-lenght]");
const perCharacter = 8;
function inputLenght() {
    inputField.forEach((n) => {
        const size = n.value.length;
        let width = perCharacter * size;
        console.log(size);
        n.style.width = `${width}px`;
    });
}

inputField.forEach((element) => {
    element.addEventListener("input", inputLenght);
});

inputLenght();
