<?php
include '../database.php';
ob_start();
?>


<h1 class="text-4xl font-bold text-center mt-4 mb-10">Our Menu</h1>
<!-- Menu cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6">

    <!-- Card 1 -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://via.placeholder.com/300" alt="Menu Item" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">Menu Item Title</h2>
            <p class="text-gray-600 mb-4">This is a description of the menu item. It’s tasty and delicious!</p>
            <div class="flex justify-evenly">
                <button id="open" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 details-button" data-menu-id="1">Details</button>
            </div>
        </div>
    </div>

</div>

<!-- Details Modal -->
<div id="modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 md:w-3/4 lg:w-1/2">

        <button id="close" class="text-gray-500 hover:text-gray-700 float-right">&times;</button>
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Menu Details</h2>
        <div id="menuDetails" class="space-y-4">
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

        </div>

        <form  action="" method="POST" class="mt-6 space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="date_reservation">Reservation Date</label>
                    <input type="date" id="date_reservation" name="date_reservation" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="time_reservation">Reservation Time</label>
                    <input type="time" id="time_reservation" name="time_reservation" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2" for="people_number">Number of People</label>
                    <input type="number" name="people_number" id="people_number" min="1" class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
            <button type="submit" name="ajouter_reservation" class="bg-green-500 text-white px-6 py-3 rounded-lg w-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Reserve Now</button>
        </form>
    </div>
</div>

<?php
// faire une réservation
if(isset($_POST['ajouter_reservation'])){
    $date_reservation = mysqli_real_escape_string($conn,$_POST['date_reservation']);
    $time_reservation = mysqli_real_escape_string($conn,$_POST['time_reservation']);
    $people_number = mysqli_real_escape_string($conn,$_POST['people_number']);

    $sql = "INSERT INTO reservation (id_user, id_menu, date_reservation, heure_reservation,	nombre_personnes, statut)
            VALUES ()";

}


?>



<?php
    $content = ob_get_clean();
    include '../layout/layout.php';
?>
