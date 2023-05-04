<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBW</title>
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
            </div>
        </nav>
    </header>


    <main class="pt-15" style="background-color: #0e4166; position: relative text-align: white;">
        <main class="pt-15" style="background-color: #0e4166; text-align: white;">

            <section>
                <div>

                    <div class="flex flex-col items-center justify-center float">
                        <img class="flex items-center mb-6 text-4xl mt-16 font-semibold text-gray-900 dark:text-white w-36 h-36 mr-2"
                            src="img/logo.png" alt="logo">

                        {{-- form login  --}}
                        <div
                            class="w-full bg-white rounded-lg shadow dark:border md:mt-4 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                                <h1
                                    class="text-xl font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white ">
                                    Log In
                                </h1>
                                <form class="space-y-4 md:space-y-6 float-none" action="/">
                                    <div>
                                        <input type="masuk" name="masuk" id="masuk" placeholder="Masuk Sebagai"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="">
                                    </div>
                                    <div>
                                        <input type="npm" name="npm" id="npm"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="NIP/NPM" required="">
                                    </div>
                                    <div>
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="">
                                    </div>

                                    <div href="/dashboard">
                                        <button type="submit"
                                            class="w-full hover:text-black text-white hover:bg-blue-200 bg-sky-800 border font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- Akhir form login --}}
                    </div>
                    <x-background></x-background>
                </div>
            </section>

        </main>
    </main>


    <footer class="py-5 text-center bg-white fixed-bottom">
        <p>&copy; 2023 NoobDev</p>
    </footer>


</body>

</html>
