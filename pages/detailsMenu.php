<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Modal -->
    <div id="details" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">

        <div class="bg-white w-full max-w-3xl rounded-lg shadow-lg p-6 overflow-y-auto max-h-screen relative">
            <!-- Close Button -->
            <button id="close-modal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>

            <!-- Modal Header -->
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">menu 1</h2>

            <!-- Dish Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Dish 1 -->
                <div class="border rounded-lg overflow-hidden shadow-sm">
                    <img src="https://via.placeholder.com/300" alt="Dish 1" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800">Grilled Chicken</h3>
                        <p class="text-sm text-gray-500 mt-2">Juicy grilled chicken served with fresh herbs and spices.</p>
                        <p class="mt-4 text-gray-700 text-sm">
                            <strong>Ingredients:</strong> Chicken, Olive Oil, Garlic, Lemon, Rosemary.
                        </p>
                    </div>
                </div>

                <!-- Dish 2 -->
                <div class="border rounded-lg overflow-hidden shadow-sm">
                    <img src="https://via.placeholder.com/300" alt="Dish 2" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800">Vegan Salad</h3>
                        <p class="text-sm text-gray-500 mt-2">A mix of fresh veggies with a light dressing.</p>
                        <p class="mt-4 text-gray-700 text-sm">
                            <strong>Ingredients:</strong> Lettuce, Tomatoes, Cucumbers, Olive Oil, Lemon.
                        </p>
                    </div>
                </div>

                <!-- Dish 3 -->
                <div class="border rounded-lg overflow-hidden shadow-sm">
                    <img src="https://via.placeholder.com/300" alt="Dish 3" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800">Pasta Alfredo</h3>
                        <p class="text-sm text-gray-500 mt-2">Creamy Alfredo pasta topped with Parmesan cheese.</p>
                        <p class="mt-4 text-gray-700 text-sm">
                            <strong>Ingredients:</strong> Pasta, Cream, Butter, Garlic, Parmesan.
                        </p>
                    </div>
                </div>

                <!-- Dish 4 -->
                <div class="border rounded-lg overflow-hidden shadow-sm">
                    <img src="https://via.placeholder.com/300" alt="Dish 4" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800">Beef Steak</h3>
                        <p class="text-sm text-gray-500 mt-2">Tender beef steak with a side of grilled vegetables.</p>
                        <p class="mt-4 text-gray-700 text-sm">
                            <strong>Ingredients:</strong> Beef, Olive Oil, Garlic, Thyme, Black Pepper.
                        </p>
                    </div>
                </div>

            </div>

        </div>
        
    </div>

    <script>
        const openModal = document.getElementById('open-modal');
        const closeModal = document.getElementById('close-modal');
        const menuModal = document.getElementById('menu-modal');

        // Show the modal
        openModal.addEventListener('click', () => {
            menuModal.classList.remove('hidden');
        });

        // Hide the modal
        closeModal.addEventListener('click', () => {
            menuModal.classList.add('hidden');
        });

        // Close modal on clicking outside
        menuModal.addEventListener('click', (e) => {
            if (e.target === menuModal) {
                menuModal.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
