<?php
ob_start();
?>

<div class="mb-8 mt-8 h-[70%] p-4 overflow-auto">
    <table class="w-full text-sm text-center text-gray-500 bg-gray-100 border border-purple-500">
        <thead class="text-s text-gray-700 bg-[#f9f3fe]">
            <tr>
                <th scope="col" class="px-6 py-3">N° Réservation</th>
                <th scope="col" class="px-6 py-3">Nom</th>
                <th scope="col" class="px-6 py-3">Menu</th>
                <th scope="col" class="px-6 py-3">Statut</th>
                <th scope="col" class="px-6 py-3">Date de Réservation</th>
                <th scope="col" class="px-6 py-3">Nb Personnes</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white lowercase hover:bg-purple-50">
                <td class="px-6 py-4">001</td>
                <td class="px-6 py-4">Ali</td>
                <td class="px-6 py-4">Menu 1</td>
                <td class="px-6 py-4">
                    <span class="text-green-500 cursor-pointer hover:underline" onclick="changerStatut(this)">Confirmée</span>
                </td>
                <td class="px-6 py-4">2024-12-18</td>
                <td class="px-6 py-4">4</td>
                <td class="px-6 py-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" onclick="modifierReservation(1)">Modifier</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600" onclick="supprimerReservation(1)">Supprimer</button>
                </td>
            </tr>
            <tr class="bg-white lowercase hover:bg-purple-50">
                <td class="px-6 py-4">002</td>
                <td class="px-6 py-4">Sara</td>
                <td class="px-6 py-4">Menu 2</td>
                <td class="px-6 py-4">
                    <span class="text-red-500 cursor-pointer hover:underline" onclick="changerStatut(this)">Annulée</span>
                </td>
                <td class="px-6 py-4">2024-12-19</td>
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">
                    <button id="open" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Modify</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600" onclick="supprimerReservation(2)">Annuler</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal for modifying reservation -->
<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden ">
        <div class="bg-white p-6 rounded-lg w-96 h-[55%]">
            <button id="close" class="text-gray-500 hover:text-gray-700 float-right">&times;</button>
            <h3 class="text-xl font-semibold text-center mb-4">Modify Your Reservation</h3>
            <form id="editForm">

                <div class="grid grid-cols-3 gap-4 text-center ">
                    <div class="mb-4">
                        <label for="client_name" class="block text-gray-700">Nom</label>
                        <input type="text" id="client_name" name="client_name" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    
                    <div class="mb-4">
                        <label for="menu" class="block text-gray-700">Menu</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md">
                            <option>m1</option>
                            <option>m2</option>
                            <option>m3</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="nb_personnes" class="block text-gray-700">People</label>
                        <input type="number" id="nb_personnes" name="nb_personnes" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                </div>
                
                <div class="flex gap-4 justify-between"> 
                    <div class="mb-4">
                        <label for="date_reservation" class="block text-gray-700">Reservation Date</label>
                        <input type="date" id="date_reservation" name="date_reservation" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="date_reservation" class="block text-gray-700">Reservation Time</label>
                        <input type="date" id="date_reservation" name="date_reservation" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                </div>
                
                <div class="flex justify-evenly">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
$content = ob_get_clean();
include '../layout/layout.php';
?>
