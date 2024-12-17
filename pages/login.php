<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex flex-col justify-center items-center w-full h-[100vh] bg-[#282D2D] px-5">
    <div class="flex flex-col items-end justify-start overflow-hidden mb-2 xl:max-w-3xl w-full"></div>

        <div class="w-full p-5 sm:p-10 rounded-md">

        <h1 class="text-center text-xl sm:text-3xl font-semibold text-white">
            log in Now!
        </h1>
        <div class="w-full mt-8">

            <form class="mx-auto max-w-xs sm:max-w-md md:max-w-lg flex flex-col gap-4">
     

                <!-- Email -->
                <div>
                    <label for="email" class="text-white">Email</label>
                    <input id="email" name="email" class="w-full px-5 py-3 rounded-lg font-medium border-2 border-transparent placeholder-gray-500 text-sm focus:outline-none focus:border-2 focus:outline" type="email" placeholder="Your email" />
                </div>

                <!-- PWD -->
                <div>
                    <label for="password" class="text-white">Password</label>
                    <input id="password" name="password" class="w-full px-5 py-3 rounded-lg font-medium border-2 border-transparent placeholder-gray-500 text-sm focus:outline-none focus:border-2 focus:outline" type="password" placeholder="Your password" />
                </div>

                <button class="mt-5 tracking-wide font-semibold bg-[#D2691E] text-gray-100 w-full py-4 rounded-lg hover:bg-[#D2691E]/90 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                    <span class="ml-3">Log In</span>
                </button>

            </form>

        </div>
    </div>
  </div>
</body>

</html>