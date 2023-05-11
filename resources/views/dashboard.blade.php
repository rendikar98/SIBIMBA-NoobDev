<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
                <div class="flex items-center">
                    <a href="#" class="mx-4 font-normal text-white hover:text-gray-400">Dashboard</a>
                    <a href="/data_bimbingan/create" class="mx-4 font-normal text-white hover:text-gray-400">Input Data</a>
                    <a href="/barchart" class="mx-4 font-normal text-white hover:text-gray-400">Statistik</a>
                    <a href="#" class="mx-4 font-normal text-white hover:text-gray-400">Logout</a>
                </div>
            </div>
        </nav>
    </header>


    <main class="pt-20" style="background-color: #0e4166; position: relative text-align: white;">
        <x-background></x-background>
    </main>


    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>

</body>

</html>
