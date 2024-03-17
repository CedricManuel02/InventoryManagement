const cancelModal = document.querySelector("#cancelModal");
const openModal = document.querySelector("#openModal");
const modalProduct = document.querySelector("#modal-product");

// cancel the modal
cancelModal.addEventListener("click", () => {
    modalProduct.classList.remove("fixed");
    modalProduct.classList.add("hidden");
});

// open the modal
openModal.addEventListener("click", () => {
    modalProduct.classList.remove("hidden");
    modalProduct.classList.add("fixed");
});

//1cc31119-13f1-483e-8cd3-9e75086faa8d