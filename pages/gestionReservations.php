<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-700">Reservation Table</h1>
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-gray-300 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-4 px-6 text-left font-semibold">Client Name</th>
                        <th class="py-4 px-6 text-left font-semibold">Reservation Time & Date</th>
                        <th class="py-4 px-6 text-left font-semibold">Menu</th>
                        <th class="py-4 px-6 text-left font-semibold">People Number</th>
                        <th class="py-4 px-6 text-left font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <!-- Example Row -->
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
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
                    </tr>
                    <!-- Additional rows can be added dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
