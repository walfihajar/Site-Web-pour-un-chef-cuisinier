<?php
ob_start();
?>

<!-- Hero Section -->
<section class="bg-cover h-[70%] bg-no-repeat bg-center md:h-screen  bg-[url('../img/home3.jpg')]">
    <div class="bg-black bg-opacity-50 h-[70%] md:h-screen flex items-center justify-center text-center text-white">
        <div class="px-4 sm:px-6 md:px-8">
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold leading-tight mb-6">Welcome to Our Amazing Website</h1>
            <p class="text-base sm:text-lg md:text-xl mb-6">Discover new opportunities, explore amazing features, and get started today.</p>
            <a href="menu.php" class="bg-blue-500 text-white px-6 py-3 rounded-full text-lg sm:text-xl md:text-2xl hover:bg-blue-600 transition">Get Started</a>
        </div>
    </div>
</section>


<!-- Features Section -->
<section id="services" class="py-20 bg-gray-50">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold mb-10">Our Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Feature 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <img src="../img/first.avif" alt="Feature Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Custom Meal Preparation</h3>
                    <p class="text-gray-600 mb-4">A private chef prepares personalized meals based on your preferences, dietary needs, and restrictions, such as vegan, gluten-free, or keto. They create curated menus using seasonal ingredients, ensuring a high-quality dining experience with fresh, homemade dishes tailored to your taste.</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <img src="../img/second.avif" alt="Feature Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Private Dining Experience</h3>
                    <p class="text-gray-600 mb-4">A private chef brings restaurant-quality dining to your home, offering personalized meals, intimate dining experiences, and catering for special occasions, all tailored to your preferences for a stress-free culinary experience.</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <img src="../img/third.avif" alt="Feature Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Special Occasion Catering</h3>
                    <p class="text-gray-600 mb-4">A private chef transforms intimate gatherings like family dinners, romantic evenings, or small celebrations into memorable experiences. They design personalized menus for special events such as birthdays, anniversaries, or holidays, handling everything from cooking to serving and clean-up, so you can relax and enjoy the occasion stress-free.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $content = ob_get_clean();
    include '../layout/layout.php';
?>

