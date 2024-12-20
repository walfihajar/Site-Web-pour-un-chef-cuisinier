<?php
include '../database.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 w-full h-full font-sans">
    <div class="flex flex-wrap">
        <!-- Sidebar -->
        <aside class="w-1/5 min-h-screen bg-white p-6 flex flex-col shadow-lg">
            <h2 class="text-xl font-semibold mb-4 text-center">Menu</h2>
            <div class="space-y-4">
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 rounded focus:outline-none"><a href="../pages/dashboard.php">Statistiques</a></button>
                <button class="w-full bg-green-500 hover:bg-green-700 text-white py-2 rounded focus:outline-none"><a href="../pages/gestionReservations.php">Gestion des Réservations</a></button>
                <button class="w-full bg-yellow-500 hover:bg-yellow-700 text-white py-2 rounded focus:outline-none"><a href="../pages/gestionMenu.php">Gestion des Plats</a></button>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="w-full md:w-4/5 px-4">
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-700">Menu Management</h1>

            <!-- Create Menu Section -->
            <form action="" method="POST" id="dishForm">
                <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-700">Create a New Menu</h2>
                    <div>
                        <label class="block text-gray-600 font-medium mb-2" for="menuTitle">Menu Title</label>
                        <input type="text" name="menuTitle" id="menuTitle" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>    
                    <div>
                        <label class="block text-gray-600 font-medium mb-2" for="menuDescription">Menu Description</label>
                        <textarea name="menuDescription" id="menuDescription" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-600 font-medium mb-2" for="menuPhoto">Menu Photo</label>
                        <input type="number" step="0.01" name="menuPhoto" id="menuPhoto" accept="image/*" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none">
                    </div>
                </div>

                <!-- Add Dishes Section -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-700">Add Dishes to Menu</h2>
                    <div id="dishes-container" class="space-y-4">
                        <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 space-y-4">
                            <div>
                                <label class="block text-gray-600 font-medium mb-2" for="dish-title">Dish Title</label>
                                <input type="text" name="dishes[title][]" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label class="block text-gray-600 font-medium mb-2" for="dish-category">Dish Category</label>
                                <textarea name="dishes[category][]" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-600 font-medium mb-2" for="dish-description">Dish Description</label>
                                <textarea name="dishes[description][]"  required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-600 font-medium mb-2" for="dish-ingredients">Ingredients</label>
                                <textarea name="dishes[ingredients][]"  required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-600 font-medium mb-2" for="dish-image">Dish Image</label>
                                <input type="file" name="dishes[photo][]"  accept="image/*" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none">
                            </div>
                        </div>
                    </div>
                    <button id="add-dish-btn" type="button" class="mt-4 bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">+ Add Another Dish</button>
                </div>

                <!-- Save Menu Button -->
                <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg w-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Save Menu</button>
            </form>
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
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-title">Dish Title</label>
                    <input type="text" name="dishes[title][]"  required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-category">Dish Category</label>
                    <textarea name="dishes[category][]" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-description">Dish Description</label>
                    <textarea name="dishes[description][]" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-ingredients">Ingredients</label>
                    <textarea name="dishes[ingredient][]" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="dish-image">Dish Image</label>
                    <input type="file" name="dishes[photo][]"  accept="image/*" required class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none">
                </div>
            `;
            dishesContainer.appendChild(newDish);
        });
    </script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuTitle = mysqli_real_escape_string($conn, $_POST["menuTitle"]);
    $menuDescription = mysqli_real_escape_string($conn, $_POST["menuDescription"]);
    $menuPhoto = mysqli_real_escape_string($conn, $_POST["menuPhoto"]);

    // Insertion du menu
    $queryMenu = "INSERT INTO menu (titre, description) VALUES (?, ?)";
    $stmtMenu = mysqli_prepare($conn, $queryMenu);
    mysqli_stmt_bind_param($stmtMenu, "sss", $menuTitle,$menuDescription, $menuPhoto);
    mysqli_stmt_execute($stmtMenu);
    $menu_id = mysqli_insert_id($conn);

    // Insertion des plats associés
    if (isset($_POST['dishes']['nom'])) {
        // Parcourir les données des plats
        $name = $_POST['dishes']['title'];
        $category = $_POST['dishes']['categorie'];
        $ingredient = $_POST['dishes']['ingredient'];
        $description = $_POST['dishes']['description'];
        $photo = $_POST['dishes']['photo'];
    
        for ($i = 0; $i < count($noms); $i++) {
            // Assurez-vous que toutes les données pour ce plat sont définies
            if (!empty($noms[$i]) && !empty($categories[$i]) && !empty($ingredients[$i]) && !empty($photos[$i])) {
                $nomPlat = mysqli_real_escape_string($conn, $noms[$i]);
                $categoriePlat = mysqli_real_escape_string($conn, $categories[$i]);
                $ingredientPlat = mysqli_real_escape_string($conn, $ingredients[$i]);
                $descriptionPlat = isset($descriptions[$i]) ? mysqli_real_escape_string($conn, $descriptions[$i]) : null;
                $photoPlat = mysqli_real_escape_string($conn, $photos[$i]);
    
                // Insertion dans la table `plat`
                $queryPlat = "INSERT INTO plat (id_menu, nom, categorie, ingredient, description, photo) VALUES (?, ?, ?, ?, ?, ?)";
                $stmtPlat = mysqli_prepare($conn, $queryPlat);
                mysqli_stmt_bind_param($stmtPlat, "isssss", $menu_id, $nomPlat, $categoriePlat, $ingredientPlat, $descriptionPlat, $photoPlat);
                mysqli_stmt_execute($stmtPlat);
                mysqli_stmt_close($stmtPlat);
            }
        }
    }

    mysqli_stmt_close($stmtMenu);
   // header("Location: success.php"); // Redirection ou message de succès
}
?>