// modal product 
const cancelModal = document.querySelector("#cancelModal");
const openModal = document.querySelector("#openModal");
const modalProduct = document.querySelector("#modal-product");

// modal settings id
const modalSettings = document.querySelector("#modal-settings");
const cancelSettings = document.querySelector("#cancelSettings");
const openSettings = document.querySelector("#openSettings");


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
// cancel the settings modal
cancelSettings.addEventListener("click", () => {
    modalSettings.classList.remove("fixed");
    modalSettings.classList.add("hidden");
});

// open the settings modal
openSettings.addEventListener("click", () => {
    modalSettings.classList.remove("hidden");
    modalSettings.classList.add("fixed");
});



//1cc31119-13f1-483e-8cd3-9e75086faa8d

