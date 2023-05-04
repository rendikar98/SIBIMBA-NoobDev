<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistic</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
	

<body>

	<header>
        <nav class="bg-sky-800 border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex items-center">
                    <img src="img/logo.png" class="ml-3 mr-3" alt="Logo Usk" width="75" height="75" />
                    <div class="text-center">
                        <h1 class="text-6xl font-bold text-white">SIMBIMA</h1>
                        <em class="text-2xl font-normal text-white">Universitas Syiah Kuala</em>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="#" class="mx-4 font-normal text-white hover:text-gray-400">Dashboard</a>
                    <a href="/data_bimbingan" class="mx-4 font-normal text-white hover:text-gray-400">Input Data</a>
                    <a href="/barchart" class="mx-4 font-normal text-white hover:text-gray-400">Statistik</a>
                    <a href="#" class="mx-4 font-normal text-white hover:text-gray-400">Logout</a>
                </div>
            </div>
        </nav>
    </header>


	<h2>Statistik</h2>


	<div class="container">
	<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary active">
			<input value="pendamping" class="sex" type="radio" name="options" id="option1" autocomplete="off" checked>pendamping
		</label>
		<label class="btn btn-primary	">
			<input value="penguji" type="radio" class="sex" name="options" id="option2" autocomplete="off" >penguji
		</label>
		<label class="btn btn-primary">
			<input value="total" type="radio" class="sex" name="options" id="option3" autocomplete="off" >total
		</label>
	</div>

	<div id="vis"></div>
	<div id="table-container"></div>

	<!-- Libraries -->
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"
		type="text/css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/d3.v7.min.js') }}"></script>

	<!-- your script file -->
	<link rel="icon" href="data:;base64,iVBORwOKGO=" />
	<!-- <script src="js/barchart.js"></script> -->

	<script src="{{ asset("js/barchart.js") }}"></script>
	<script src="{{ asset("js/main.js") }}"></script>
</div>
	

</body>
