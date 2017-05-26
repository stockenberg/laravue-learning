<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">

	<title>Laravel</title>
	<link rel="stylesheet" href="{{asset("css/all.css")}}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style>
		span {
			cursor: pointer;
		}
		.hidden{
			opacity: 0;
		}
		.fadein{
			opacity: 1;
		}
		.fade{
			-webkit-transition: opacity 1s;
			-moz-transition: opacity 1s;
			-ms-transition: opacity 1s;
			-o-transition: opacity 1s;
			transition: opacity 1s;
		}
	</style>

</head>
<body>
<nav class="center black">
	<a href="/">Startseite</a>
</nav>

<div id="test">
	<div class="row">
		<div class="col m8 offset-m2">
			<h1 class="center">Events</h1>
			<hr>
			<br><br><br>
			<h4>Events = @Dom-Events</h4>
			<a href="https://vuejs.org/v2/guide/events.html">Events - Documentation</a>
			<table class="table striped">
				<thead>
				<tr>
					<th>DOM</th>
					<th>jquery</th>
					<th>VueJS</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>onclick</td>
						<td>$("").click()</td>
						<td>@click</td>
					</tr>
					<tr>
						<td>onkeyup</td>
						<td>$("").keyup()</td>
						<td>@keyup</td>
					</tr>
					<tr>
						<td>onmouseenter</td>
						<td>$("").mouseenter()</td>
						<td>@mouseenter</td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
						<td>...</td>
					</tr>
				</tbody>
			</table>
			<br><br><br>
			<label for="text">Dein Text</label>
			<input type="text" v-model="text" id="text">
			<button class="btn" @click="talk(text)">Click me!</button>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
<script>
    new Vue({
        el: '#test',
        data: {
            text: "",
        },
        methods: {
            talk(text){
                alert(text)
            }
        }
    })
</script>

</body>
</html>





