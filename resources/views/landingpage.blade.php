<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        <nav class="bg-sky-800 border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex items-center">
                    <img src="img/logo.png" class="ml-3 mr-3" alt="Logo Usk" width="50" height="50" />
                    <div class="text-center">
                        <h1 class="text-xl font-bold text-white">SIMBIMA</h1>
                        <em class="text-base font-normal text-white">Universitas Syiah Kuala</em>
                    </div>
                </div>
        </nav>
    </header>


    <main class="pt-20" style="background-color: #0e4166; text-align: white;">
        <div class="flex items-center justify-center">
            <div class="text-center">
                <h1 class="mb-10 font-bold text-white text-7xl">WELCOME TO SIMBIMA</h1>
                <p class="text-3xl text-white">SISTEM PEMBIMBINGAN MAHASISWA</p>
            </div>
        </div>
        <br>
        <img src="img/logo.png" alt="Logo Usk" class="block mx-auto" style="width: 170px">
        <br>
        <br>
        <div class="flex justify-center">
            <a href="/dashboard">
                <button
                    class="flex items-center px-4 py-2 font-bold text-blue-500 bg-white rounded-full hover:bg-blue-600">
                    <i class="mr-2 fas fa-play-circle"></i>
                    Get Started
                </button>
            </a>
        </div>

        <x-background></x-background>
    </main>


    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>

</body>

</html>
