const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// 1. Opening and Closing modals
let open = document.getElementById('open');
let close = document.getElementById('close');
let modal = document.getElementById('modal');

open.addEventListener("click", ()=>{
    modal.classList.remove('hidden');
})
close.addEventListener("click", ()=>{
    modal.classList.add('hidden');
})

// 2. Regex validation

document.getElementById("form").addEventListener("submit", function(event) {
    let isValid = true;

    // Get form values
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Regex patterns
    const nameRegex = /^[A-Za-z]+$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Validate first name
    if (!nameRegex.test(fname)) {
        isValid = false;
        document.getElementById("fnameError").classList.remove("hidden");
    } else {
        document.getElementById("fnameError").classList.add("hidden");
    }

    // Validate last name
    if (!nameRegex.test(lname)) {
        isValid = false;
        document.getElementById("lnameError").classList.remove("hidden");
    } else {
        document.getElementById("lnameError").classList.add("hidden");
    }

    // Validate email
    if (!emailRegex.test(email)) {
        isValid = false;
        document.getElementById("emailError").classList.remove("hidden");
    } else {
        document.getElementById("emailError").classList.add("hidden");
    }

    // Validate password
    if (!passwordRegex.test(password)) {
        isValid = false;
        document.getElementById("passwordError").classList.remove("hidden");
    } else {
        document.getElementById("passwordError").classList.add("hidden");
    }

    // If any field is invalid, prevent form submission
    if (!isValid) {
        event.preventDefault();
    }
});










// //sign up modal opening and closing 
// const opensignup = document.getElementById('signup');
// const closesignup = document.getElementById('close-modal');
// const modal = document.getElementById('modal');

// opensignup.addEventListener('click', () => {
//     modal.classList.remove('hidden');
// });

// closesignup.addEventListener('click', () => {
//     modal.classList.add('hidden');
// });


// // Handle modal  menu logic
// const Mmodal = document.getElementById('details-modal');
// const closeModalButton = document.getElementById('close-modal');
// const detailsButtons = document.querySelectorAll('.details-button');

// detailsButtons.forEach(button => {
//     button.addEventListener('click', () => {
//         const menuId = button.getAttribute('data-menu-id');
//         // You can use the menuId here to load details dynamically if necessary.

//         Mmodal.classList.remove('hidden');
//     });
// });

// closeModalButton.addEventListener('click', () => {
//     Mmodal.classList.add('hidden');
// });