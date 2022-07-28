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
        n.style.width = `${width}px`;
    });
}

inputField.forEach((element) => {
    element.addEventListener("input", inputLenght);
});

inputLenght();

// ?: Toogle Editing Button
const buttonEdit = document.querySelectorAll("[edit-button]");
let toggleFieldEdit = true;
for (let indexButton = 0; indexButton < buttonEdit.length; indexButton++) {
    buttonEdit[indexButton].addEventListener("click", () => {
        toggleFieldEdit = !toggleFieldEdit;
        inputField[indexButton].disabled = toggleFieldEdit;
        inputField[indexButton].classList.toggle("border-b-2");
        inputField[indexButton].classList.toggle("border-gray-400");
    });
}
