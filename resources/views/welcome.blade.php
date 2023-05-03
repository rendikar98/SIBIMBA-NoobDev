    <html>
    {{-- Ini dah final --}}
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        <nav class="bg-white border-gray-500 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-green-50 ">
            <div class="container box-border mx-auto bg-gray-100 rounded-sm">

                <form action="dataInsert" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="px-10 pt-10 mb-6 text-center">
                        <P>Input Data</P>
                    </div>
                    <div class="px-10 mb-6">
                        {{-- <label for="email" class="block mx-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label> --}}
                        <input type="text" list="nama" placeholder="Nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                        <datalist id="nama">
                            {{-- <select id="mhs" name="mhs"> --}}
                                @foreach ($nama as $value)
                                <option value="{{ $value }}"></option>
                                @endforeach
                            {{-- </select> --}}
                        </datalist>
                    </div>
                    <div class="px-10 mb-6">

                        {{-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label> --}}
                        <input type="text" list="NIM" placeholder="NIM" name="NIM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                        <datalist id="NIM">
                            @foreach ($NIM as $value)
                            <option value="{{ $value }}"></option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="px-10 mb-6">
                            <input type="text" list="dosen_1" placeholder="Dosen Pembimbing 1" name="dosen_1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                            <datalist id="dosen_1">
                                {{-- <select id="pembimbing_1" name="pembimbing_1"> --}}
                                    @foreach ($dosen_1 as $value)
                                    <option value="{{ $value }}"> </option>
                                    @endforeach
                                {{-- </select> --}}
                            </datalist>
                    </div>
                    <div class="px-10 mb-6">
                        <input type="text" list="dosen_2" placeholder="Dosen Pembimbing 2 " name="dosen_2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                        <datalist id="dosen_2">
                            {{-- <select id="pembimbing_2" name="pembimbing_2"> --}}
                                @foreach ($dosen_2 as $ID2 => $Nama)
                                <option value="{{ $Nama }}"></option>
                                @endforeach
                            {{-- </select> --}}

                        </datalist>
                    </div>

                    <div class="px-10 mb-6">
                        <input type="text" list="dosen_penguji" placeholder="Dosen Penguji " name="dosen_penguji" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        <datalist id="dosen_penguji">
                            {{-- <select id="penguji" name="penguji"> --}}
                                @foreach ($dosen_penguji as $ID3 => $Nama)
                                <option value="{{ $Nama }}"></option>
                                @endforeach
                            {{-- </select> --}}
                        </datalist>




                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none  focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>

    </body>

    </html>
