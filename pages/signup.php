<?php
 include('../database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- Main Container -->
    <div class=" h-[80%] flex flex-col justify-center items-center px-4">
        <!-- Card -->
        <div class="bg-white w-full max-w-md p-6 md:p-8">
            <!-- Header -->
            <h2 class="text-3xl font-bold text-center text-gray-800">Sign Up</h2>
            <p class="text-center text-gray-500 mt-2">Join us to start your journey!</p>
            
            <!-- Sign-Up Form -->
            <form id="form" class="mt-6 space-y-6" action="" method="post">

                <!-- First Name -->
                <div>
                    <label for="fname" class="block text-sm font-medium text-gray-700">First name</label>                    
                    <input type="text" id="fname" name="fname" placeholder="John"  class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"required>
                </div>

                <!-- Last Name -->
                <div>
                    <label for="lname" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" id="lname" name="lname" placeholder="Doe" class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password"  name="password" placeholder="••••••••" class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"required>
                </div>
                <!-- Submit Button -->
                <button type="submit" name="signup" id="signup" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">Sign Up</button>
            </form>

            <!-- Footer -->
            <p class="text-center text-sm text-gray-500 mt-6">Already have an account? <a href="../pages/login.php" class="text-blue-600 hover:underline">Log In</a></p>
        </div>
    </div>
    <script>
        let form = document.getElementById("form");
        let fname = document.getElementById("fname").value;
        let lname = document.getElementById("lname").value;
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;

        form.onsubmit = function (e) {
            // First Name Validation
            if (!/^[A-Za-z]+$/.test(fname)) {
            alert("First name must contain only letters.");
            e.preventDefault();
            return;
            }

            // Last Name Validation
            if (!/^[A-Za-z]+$/.test(lname)) {
            alert("Last name must contain only letters.");
            e.preventDefault();
            return;
            }

            // Email Validation
            if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            alert("Please enter a valid email address.");
            e.preventDefault();
            return;
            }

            // Password Validation
            if (!/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password)) {
            alert(
                "Password must be at least 8 characters long, contain at least one letter, one number, and one special character."
            );
            e.preventDefault();
            return;
        }
    }

    </script>
</body>
</html>

<?php
//ajouter une nouvelle personne à la base des données
if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $id_role = 2;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nom, prenom, email, password, id_role) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {

        mysqli_stmt_bind_param($stmt, "ssssi", $lname, $fname, $email, $hashed_password, $id_role);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../pages/menu.php");
        } else {
            echo "<p class='text-red-500 text-center'>Erreur lors de l'inscription : " . mysqli_error($conn) . "</p>";
        }
        mysqli_stmt_close($stmt);
        
    } else {
        echo "<p class='text-red-500 text-center'>Erreur lors de la préparation de la requête : " . mysqli_error($conn) . "</p>";
    }
}


mysqli_close($conn);
?>
