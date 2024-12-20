<?php
session_start();
include("../database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 w-full h-full font-sans">
    <div class="flex flex-wrap">
        <!-- Sidebar -->
        <aside class="w-1/5 min-h-screen bg-white p-6 flex flex-col shadow-lg">
            <h2 class="text-xl font-semibold mb-4 text-center">Menu</h2>
            <div class="space-y-4">
                <!-- Statistiques Button -->
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 rounded focus:outline-none">
                    <a href="../pages/dashboard.php">Statistiques</a>
                </button>
                <!-- Gestion des Réservations Button -->
                <button class="w-full bg-green-500 hover:bg-green-700 text-white py-2 rounded focus:outline-none">
                    <a href="../pages/gestionReservations.php">Gestion des Réservations</a>
                </button>
                <!-- Gestion des Plats Button -->
                <button class="w-full bg-yellow-500 hover:bg-yellow-700 text-white py-2 rounded focus:outline-none">
                    <a href="../pages/gestionMenu.php">Gestion des Plats</a>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="w-4/5 px-8 py-6">
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Reservation Table</h1>
            <div class="overflow-x-auto shadow-lg rounded-lg">
                <table class="min-w-full bg-white rounded-lg">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-sm uppercase">
                            <th class="py-4 px-6 text-left font-semibold">Client Name</th>
                            <th class="py-4 px-6 text-left font-semibold">Reservation Time & Date</th>
                            <th class="py-4 px-6 text-left font-semibold">Menu</th>
                            <th class="py-4 px-6 text-left font-semibold">People Number</th>
                            <th class="py-4 px-6 text-left font-semibold">Status</th>
                            <th class="py-4 px-6 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700 text-sm font-light">
                        <!-- Example Row -->
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-4 px-6 text-left">John Doe</td>
                            <td class="py-4 px-6 text-left">2024-12-20 18:00</td>
                            <td class="py-4 px-6 text-left">Vegetarian</td>
                            <td class="py-4 px-6 text-left">4</td>
                            <td class="py-4 px-6 text-left">
                                <select class="bg-gray-200 border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                    <option value="confirmed">Confirmed</option>
                                    <option value="pending">En attente</option>
                                    <option value="canceled">Annulée</option>
                                </select>
                            </td>
                            <td class="py-4 px-6 text-left flex space-x-2">
                                <button class="bg-green-500 text-white px-4 py-2 rounded-lg shadow hover:bg-green-600 focus:ring-2 focus:ring-green-400">Accept</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600 focus:ring-2 focus:ring-red-400">Decline</button>
                            </td>
                        </tr>
                        <!-- Additional rows can be added dynamically -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
