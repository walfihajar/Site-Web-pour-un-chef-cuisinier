<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-700">Menu Management</h1>

        <!-- Menu List Section -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Available Menus</h2>
            <div id="menu-list" class="space-y-4">
                <!-- Example Menu -->
                <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-700">Menu Title</h3>
                            <p class="text-gray-500">A brief description of the menu...</p>
                        </div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 details-button" data-menu-id="1">
                            Details
                        </button>
                    </div>
                </div>
                <!-- Add more menus dynamically -->
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
                    <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg w-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Reserve Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Handle modal logic
        const modal = document.getElementById('details-modal');
        const closeModalButton = document.getElementById('close-modal');
        const detailsButtons = document.querySelectorAll('.details-button');

        detailsButtons.forEach(button => {
            button.addEventListener('click', () => {
                const menuId = button.getAttribute('data-menu-id');
                // Load menu details dynamically based on menuId

                modal.classList.remove('hidden');
            });
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    </script>
</body>
</html>
