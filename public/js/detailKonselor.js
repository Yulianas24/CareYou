const closeBooking = document.querySelectorAll("[close-pop-up-booking]");
const BookingContainer = document.querySelector("[ pop-up-container]");
const buttonBooking = document.querySelector("[button-booking]");
const bookingKonselor = document.querySelector("[booking-konselor]");
const opsiKonsultasi = document.querySelector("[opsi-konsultasi]");
const jadwalContainer = document.querySelector("[jadwal-konsultasi]");
const buttonBookingKonsultasi = document.querySelector("[booking-konsultasi]");
const succesBooking = document.querySelector("[succes-booking]");

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

buttonBookingKonsultasi.addEventListener("click", () => {
    jadwalContainer.classList.remove("block");
    jadwalContainer.classList.add("hidden");
    succesBooking.classList.remove("hidden");
    succesBooking.classList.add("flex");
});
