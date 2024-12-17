<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body class="min-h-screen space-y-4 w-full">
    <nav class="h-20 bg-black flex justify-between align-center items-center p-4" >
        <div><img src="" alt=""></div>
        <div>
            <ul class="flex gap-3 text-white">
                <li>Home</li>
                <li>Menu</li>
                <li>About</li>
                <li>Contact</li>
                <li><button id="signup" type="submit" class="bg-yellow-500 p-1" >Sign Up</button></li>
            </ul>
        </div>
    </nav>

    

    <main class="space-y-4">

        <div class=" h-full flex flex-col lg:flex-row lg:px-[20px] gap-20 relative justify-cente">
            <div class=" w-full ">
                <?php
                echo isset($content) ? $content : '<p>Hello World!</p>';
                ?>
            </div>
        </div>

    </main>

    <footer>

    </footer>
    
</body>
</html>