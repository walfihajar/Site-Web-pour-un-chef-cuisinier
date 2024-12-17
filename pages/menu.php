<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Menu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 w-full h-screen"> 

    <nav class="bg-white shadow-md">
        <!-- Normal Menu -->

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex justify-between h-16 items-center">

                <!-- Logo or Brand Name -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold text-blue-500">BrandName</a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Menu</a>
                    <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Contact</a>
                    <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">About</a>
                </div>

                <!-- Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Sign Up</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">Log In</button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none focus:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden h-screen">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Menu</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
            <div class="px-4 py-2">
                <button class="bg-blue-500 text-white w-full px-4 py-2 rounded hover:bg-blue-600 mb-2">Sign Up</button>
                <button class="bg-gray-200 text-gray-700 w-full px-4 py-2 rounded hover:bg-gray-300">Log In</button>
            </div>
        </div>

    </nav>

    <main class="max-w-6xl mx-auto px-4 p-8">
    <h1 class="text-4xl font-bold text-center mb-10">Our Menu</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/300" alt="Menu Item" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Menu Item Title</h2>
                <p class="text-gray-600 mb-4">This is a description of the menu item. It’s tasty and delicious!</p>
                <div class="text-lg font-bold text-gray-800 mb-4">$10.00</div>
                <div class="flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 details-button" data-menu-id="1">Details</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Reservation</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/300" alt="Menu Item" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Menu Item Title</h2>
                <p class="text-gray-600 mb-4">This is a description of the menu item. It’s tasty and delicious!</p>
                <div class="text-lg font-bold text-gray-800 mb-4">$15.00</div>
                <div class="flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 details-button" data-menu-id="2">Details</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Reservation</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Details Modal -->
    <div id="details-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 md:w-3/4 lg:w-1/2">
            <button id="close-modal" class="text-gray-500 hover:text-gray-700 float-right">&times;</button>
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Menu Details</h2>
            <div id="menu-dishes" class="space-y-4">
                <!-- Example Dish -->
                <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 space-y-4">
                    <div class="flex items-center space-x-4">
                        <img src="https://via.placeholder.com/100" alt="Dish Image" class="w-24 h-24 rounded-lg object-cover">
                        <div>
                            <h3 class="text-lg font-medium text-gray-700">Dish Title</h3>
                            <p class="text-gray-500">Dish description...</p>
                            <p class="text-gray-500 text-sm">Ingredients: Ingredient 1, Ingredient 2, Ingredient 3</p>
                        </div>
                    </div>
                </div>
                <!-- Add more dishes dynamically -->
            </div>

            <form id="reservation-form" class="mt-6 space-y-4">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div>
            <label class="block text-gray-600 font-medium mb-2" for="reservation-date">Reservation Date</label>
            <input type="date" id="reservation-date" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block text-gray-600 font-medium mb-2" for="reservation-time">Reservation Time</label>
            <input type="time" id="reservation-time" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block text-gray-600 font-medium mb-2" for="people-number">Number of People</label>
            <input type="number" id="people-number" min="1" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
    </div>

    <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg w-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
        Reserve Now
    </button>
</form>

        </div>
    </div>
</main>

<script>
    // Handle modal logic
    const modal = document.getElementById('details-modal');
    const closeModalButton = document.getElementById('close-modal');
    const detailsButtons = document.querySelectorAll('.details-button');

    detailsButtons.forEach(button => {
        button.addEventListener('click', () => {
            const menuId = button.getAttribute('data-menu-id');
            // You can use the menuId here to load details dynamically if necessary.

            modal.classList.remove('hidden');
        });
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>


        
    <footer class="bg-gradient-to-r from-gray-800 via-gray-900 to-black text-gray-300 py-10 p-4 mt-4">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <!-- Top Section -->
            <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-700 pb-8">
                <!-- Logo and Info -->
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h1 class="text-2xl font-bold text-white">Hajar Walfi</h1>
                    <p class="mt-2 text-sm text-gray-400">Empowering business through creativity and innovation.</p>
                </div>
                <!-- Navigation Links -->
                <ul class="flex flex-wrap justify-center md:justify-start space-x-6">
                    <li><a href="#about" class="text-gray-400 hover:text-white">About</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-white">Services</a></li>
                    <li><a href="#portfolio" class="text-gray-400 hover:text-white">Portfolio</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Bottom Section -->
            <div class="mt-8 flex flex-col md:flex-row justify-between items-center">
                 <!-- Copyright -->
                <p class="text-sm text-gray-400 text-center md:text-left">&copy; 2024 Hajar Walfi. All rights reserved.</p>
                <!-- Social Media Icons -->
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="https://facebook.com" class="text-gray-400 hover:text-white" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988H8.294v-2.89h2.144V9.856c0-2.123 1.263-3.293 3.196-3.293.928 0 1.902.166 1.902.166v2.091h-1.071c-1.055 0-1.384.654-1.384 1.326v1.594h2.35l-.376 2.89h-1.974V21.878C18.343 21.128 22 16.991 22 12z"/></svg></a>
                    <a href="https://twitter.com" class="text-gray-400 hover:text-white" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6.011c-.805.356-1.67.597-2.573.703a4.53 4.53 0 0 0 1.993-2.496c-.876.518-1.847.894-2.885 1.095a4.493 4.493 0 0 0-7.656 4.095 12.785 12.785 0 0 1-9.28-4.703 4.5 4.5 0 0 0 1.393 6.012 4.481 4.481 0 0 1-2.033-.562v.057a4.493 4.493 0 0 0 3.603 4.408 4.52 4.52 0 0 1-2.028.076 4.496 4.496 0 0 0 4.197 3.121 9.008 9.008 0 0 1-5.582 1.926c-.362 0-.719-.021-1.072-.062a12.743 12.743 0 0 0 6.91 2.027c8.295 0 12.829-6.873 12.829-12.829 0-.195-.004-.39-.013-.584a9.154 9.154 0 0 0 2.256-2.335z"/></svg></a>
                    <a href="https://linkedin.com" class="text-gray-400 hover:text-white" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452H17.27v-5.569c0-1.328-.027-3.038-1.85-3.038-1.854 0-2.141 1.446-2.141 2.939v5.668H9.09V9.048h3.046v1.561h.043c.425-.803 1.463-1.65 3.01-1.65 3.22 0 3.813 2.121 3.813 4.877v6.616zM5.337 7.433a1.743 1.743 0 1 1 0-3.487 1.743 1.743 0 0 1 0 3.487zM6.863 20.452H3.811V9.048h3.052v11.404zM22.225 0H1.771C.792 0 0 .772 0 1.729v20.542C0 23.228.792 24 1.771 24h20.451C23.208 24 24 23.228 24 22.271V1.729C24 .772 23.208 0 22.225 0z"/></svg></a>
                </div>
            </div>
        </div>
    </footer>


    

    <script src="./js/script.js"></script>

</body>
</html>
