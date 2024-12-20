<?php
  include('../database.php');
?>


<?php

  $sql = "SELECT COUNT(*) AS sub_clients
  FROM users
  WHERE id_role = ?";

  $stmt = mysqli_prepare($conn, $sql);
  $client = 2;

  if($stmt){
    mysqli_stmt_bind_param($stmt, "i", $client);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $sub_clients);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
  }else {
    $sub_clients = "?" ;
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chef Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 w-full h-full font-sans">
  <!-- Container for Aside and Main -->
  <div class="flex">
    <!-- aside -->
    <aside class="w-1/5 min-h-screen bg-white p-6 flex flex-col shadow-lg">
      <h2 class="text-xl font-semibold mb-4 text-center">Menu</h2>
      <div class="space-y-4">
        <!-- Statistiques Button -->
        <button class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 rounded focus:outline-none"><a
            href="../pages/dashboard.php">Statistiques</a></button>
        <!-- Gestion des Réservations Button -->
        <button class="w-full bg-green-500 hover:bg-green-700 text-white py-2 rounded focus:outline-none"><a
            href="../pages/gestionReservations.php">Gestion des Réservations</a></button>
        <!-- Gestion des Plats Button -->
        <button class="w-full bg-yellow-500 hover:bg-yellow-700 text-white py-2 rounded focus:outline-none"><a
            href="../pages/gestionMenu.php">Gestion des Plats</a></button>
      </div>
    </aside>

    <!-- main -->
    <main class="w-4/5 p-6">

      <div class="max-w-6xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">

        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Statistiques du Chef</h1>

        <!-- cards of Statistiques -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Demandes en attente -->
          <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Demandes en Attente</h2>
            <p class="text-3xl font-bold text-blue-600">5</p>
          </div>

          <!-- Demandes approuvées aujourd'hui -->
          <div class="bg-green-100 p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Demandes Approuvées (Aujourd'hui)</h2>
            <p class="text-3xl font-bold text-green-600">12</p>
          </div>

          <!-- Demandes approuvées pour demain -->
          <div class="bg-yellow-100 p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Demandes Approuvées (Demain)</h2>
            <p class="text-3xl font-bold text-yellow-600">7</p>
          </div>

          <!-- Prochain client -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Prochain Client</h2>
            <p class="text-md text-gray-700"><strong>Nom :</strong> John Doe</p>
            <p class="text-md text-gray-700"><strong>Réservation :</strong> Dîner - 19h00</p>
          </div>

          <!-- Nombre de clients inscrits -->
          <div class="bg-purple-100 p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Subscribed Clients</h2>
            <p class="text-3xl font-bold text-purple-600"><?php echo $sub_clients; ?></p>
          </div>
          
        </div>
      </div>

    </main>

  </div>

</body>
</html>



