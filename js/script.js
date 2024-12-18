const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

//sign up modal opening and closing 
const opensignup = document.getElementById('signup');
const closesignup = document.getElementById('close-modal');
const modal = document.getElementById('modal');

opensignup.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

closesignup.addEventListener('click', () => {
    modal.classList.add('hidden');
});


// Handle modal  menu logic
const Mmodal = document.getElementById('details-modal');
const closeModalButton = document.getElementById('close-modal');
const detailsButtons = document.querySelectorAll('.details-button');

detailsButtons.forEach(button => {
    button.addEventListener('click', () => {
        const menuId = button.getAttribute('data-menu-id');
        // You can use the menuId here to load details dynamically if necessary.

        Mmodal.classList.remove('hidden');
    });
});

closeModalButton.addEventListener('click', () => {
    Mmodal.classList.add('hidden');
});