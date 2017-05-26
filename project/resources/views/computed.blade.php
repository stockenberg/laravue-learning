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
			<h1 class="center">Computed</h1>
			<hr>
			<br><br><br>
			<p>Count is: @{{number}}</p>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
<script>
    new Vue({
        el: '#test',
        data: {
            visible: false,
        },
        computed: {
            number(){
                return this.number = 5 + 4 + 6 + 7 * 9 * 10;
            }
        }
    })
</script>

</body>
</html>





