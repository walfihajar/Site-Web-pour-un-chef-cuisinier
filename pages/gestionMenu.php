<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="bg-gray-100 w-full h-full font-sans">
    <div class="flex flex-wrap">
        <!-- Sidebar -->
        <aside class="w-1/5 min-h-screen bg-white p-6 flex flex-col shadow-lg">
            <h2 class="text-xl font-semibold mb-4 text-center">Menu</h2>
            <div class="space-y-4">
                <!-- Statistiques Button -->
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 rounded focus:outline-none"><a href="../pages/dashboard.php">Statistiques</a></button>
                <!-- Gestion des Réservations Button -->
                <button class="w-full bg-green-500 hover:bg-green-700 text-white py-2 rounded focus:outline-none"><a href="../pages/gestionReservations.php">Gestion des Réservations</a></button>
                <!-- Gestion des Plats Button -->
                <button class="w-full bg-yellow-500 hover:bg-yellow-700 text-white py-2 rounded focus:outline-none"><a href="../pages/gestionMenu.php" >Gestion des Plats</a></button>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="w-full md:w-4/5 px-4">
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-700">Menu Management</h1>

            <!-- Create Menu Section -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-gray-700">Create a New Menu</h2>
                <form id="menu-form" class="space-y-4">
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="menu-title">Menu Title</label>
                    <input type="text" id="menu-title" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="menu-description">Menu Description</label>
                    <textarea id="menu-description" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="menu-image">Menu Image</label>
                    <input type="file" id="menu-image" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none">
                </div>
                </form>
            </div>

        <!-- Add Dishes Section -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Add Dishes to Menu</h2>
            <div id="dishes-container" class="space-y-4">
            <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 space-y-4">
                <h3 class="text-lg font-medium text-gray-700">Dish 1</h3>
                <form class="space-y-4">
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-title-1">Dish Title</label>
                    <input type="text" id="dish-title-1" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-description-1">Dish Description</label>
                    <textarea id="dish-description-1" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-ingredients-1">Ingredients</label>
                    <textarea id="dish-ingredients-1" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-image-1">Dish Image</label>
                    <input type="file" id="dish-image-1" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none">
                </div>
                </form>
            </div>
            </div>
            <button id="add-dish-btn" class="mt-4 bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            + Add Another Dish
            </button>
        </div>

        <!-- Save Menu Button -->
        <button class="bg-green-500 text-white px-6 py-3 rounded-lg w-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
            Save Menu
        </button>
        </div>
    </div>

  <script>
    const dishesContainer = document.getElementById('dishes-container');
    const addDishButton = document.getElementById('add-dish-btn');
    let dishCount = 1;

    addDishButton.addEventListener('click', () => {
      dishCount++;
      const newDish = document.createElement('div');
      newDish.className = 'bg-gray-100 border border-gray-300 rounded-lg p-4 space-y-4';
      newDish.innerHTML = `
        <h3 class="text-lg font-medium text-gray-700">Dish ${dishCount}</h3>
        <form class="space-y-4">
          <div>
            <label class="block text-gray-600 font-medium mb-2" for="dish-title-${dishCount}">Dish Title</label>
            <input type="text" id="dish-title-${dishCount}" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label class="block text-gray-600 font-medium mb-2" for="dish-description-${dishCount}">Dish Description</label>
            <textarea id="dish-description-${dishCount}" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
          </div>
          <div>
            <label class="block text-gray-600 font-medium mb-2" for="dish-ingredients-${dishCount}">Ingredients</label>
            <textarea id="dish-ingredients-${dishCount}" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
          </div>
          <div>
            <label class="block text-gray-600 font-medium mb-2" for="dish-image-${dishCount}">Dish Image</label>
            <input type="file" id="dish-image-${dishCount}" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none">
          </div>
        </form>
      `;
      dishesContainer.appendChild(newDish);
    });
  </script>
</body>
</html>
