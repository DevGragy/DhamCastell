

const btnClose = document.querySelector(".close-button");
const modal = document.querySelector(".modal-container");

document.addEventListener("DOMContentLoaded", (event) => {
    btnClose.addEventListener("click", closeModal);
    setTimeout(openModal, 3000);
});

function openModal() {
    if (modal == null) return;

    modal.classList.add("modal-active");

    overlay.classList.add("overlay-active");
}

function closeModal() {
    if (modal == null) return;

    modal.classList.remove("modal-active");

    overlay.classList.remove("overlay-active");
}

