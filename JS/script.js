// Selecciona todos los botones que abren modales
const openModalButtons = document.querySelectorAll('.open-modal-btn');
// Selecciona todos los botones que cierran modales
const closeModalButtons = document.querySelectorAll('.close-btn');

// Agrega un evento de clic a cada botón "Ver más"
openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.dataset.modalTarget;
        const modal = document.querySelector(modalId);
        if (modal) {
            modal.style.display = "block";
        }
    });
});

// Agrega un evento de clic a cada botón de cierre (la X)
closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal');
        if (modal) {
            modal.style.display = "none";
        }
    });
});

// Cierra el modal si el usuario hace clic fuera de él
window.addEventListener('click', (event) => {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
    }
});