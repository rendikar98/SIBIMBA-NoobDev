<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="data:;base64,iVBORwOKGO=" />
	<title>D3 Tutorial 3 Activity 1</title>

	<!-- Custom files -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />

</head>

<body class="container">
	<h2>Statistik</h2>

    <div id="vis"></div>

	<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary">
			<input value="pendamping" class="sex" type="radio" name="options" id="option1" autocomplete="off" >pendamping
		</label>
		<label class="btn btn-primary active">
			<input value="penguji" type="radio" class="sex" name="options" id="option2" autocomplete="off" checked>penguji
		</label>
		<label class="btn btn-primary active">
			<input value="total" type="radio" class="sex" name="options" id="option2" autocomplete="off" checked>total
		</label>
	</div>


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

</body>
