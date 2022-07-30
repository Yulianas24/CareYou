// ?: Container Photo
const inputPhoto = document.querySelector("[input-photo]");
const buttonInputPhoto = document.querySelector("[button-input-photo]");
// todo: input Photo Trigger
buttonInputPhoto.addEventListener("click", () => {
    inputPhoto.click();
});

// ?: Dynamic Length
const inputField = document.querySelectorAll("[dynamis-lenght]");
const perCharacter = 9.5;
function inputWidth() {
    inputField.forEach((n) => {
        const size = n.value.length;
        let width = perCharacter * size;
        n.style.width = `${width}px`;
    });
}

inputField.forEach((element) => {
    element.addEventListener("input", inputWidth);
});

inputWidth();

// ?: Toggle Editing Button
inputField.disabled = true;
const buttonEdit = document.querySelectorAll("[edit-button]");
let toggleFieldEdit = true;
for (let indexButton = 0; indexButton < buttonEdit.length; indexButton++) {
    buttonEdit[indexButton].addEventListener("click", () => {
        toggleFieldEdit = !toggleFieldEdit;
        inputField[indexButton].disabled = toggleFieldEdit[indexButton];
        inputField[indexButton].classList.toggle("border-b-2");
        inputField[indexButton].classList.toggle("border-gray-400");
    });
}

//?: previewImage
function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".imgPreview");

    imgPreview.style.display = "block";

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
