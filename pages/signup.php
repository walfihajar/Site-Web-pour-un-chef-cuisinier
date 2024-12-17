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
        <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-6 md:p-8">
            <!-- Header -->
            <h2 class="text-3xl font-bold text-center text-gray-800">Sign Up</h2>
            <p class="text-center text-gray-500 mt-2">Join us to start your journey!</p>
            
            <!-- Sign-Up Form -->
            <form class="mt-6 space-y-6">
                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" placeholder="John Doe" 
                           class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" placeholder="you@example.com" 
                           class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" placeholder="••••••••" 
                           class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <!-- Confirm Password -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="confirm-password" placeholder="••••••••" 
                           class="mt-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    Sign Up
                </button>
            </form>

            <!-- Footer -->
            <p class="text-center text-sm text-gray-500 mt-6">
                Already have an account? 
                <a href="#" class="text-blue-600 hover:underline">Sign In</a>
            </p>
        </div>
    </div>

</body>
</html>
