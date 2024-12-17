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