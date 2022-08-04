const closeBooking = document.querySelectorAll("[close-pop-up-booking]");
const BookingContainer = document.querySelector("[ pop-up-container]");
const buttonBooking = document.querySelector("[button-booking]");
const bookingKonselor = document.querySelector("[booking-konselor]");
const opsiKonsultasi = document.querySelector("[opsi-konsultasi]");
const jadwalContainer = document.querySelector("[jadwal-konsultasi]");
console.log(jadwalContainer);
console.log(opsiKonsultasi);
buttonBooking.addEventListener("click", () => {
    BookingContainer.classList.remove("hidden");
    BookingContainer.classList.add("flex");
});

closeBooking.forEach((n) => {
    n.addEventListener("click", () => {
        BookingContainer.classList.remove("flex");
        BookingContainer.classList.add("hidden");
    });
});

bookingKonselor.addEventListener("click", () => {
    opsiKonsultasi.classList.remove("block");
    opsiKonsultasi.classList.add("hidden");
    jadwalContainer.classList.remove("hidden");
    jadwalContainer.classList.add("block");
});
