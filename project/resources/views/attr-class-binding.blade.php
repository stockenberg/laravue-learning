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

</head>
<body>
<nav class="center black">
	<a href="/">Startseite</a>
</nav>

<div id="test">
	<h1 class="center">Attribute and Class Binding</h1>
	<hr>
	<br><br><br>
	<h5 :class="myClass" :title="text">Ich bin eine schräge Überschrift</h5>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
<script>
    new Vue({
        el: '#test',
        data: {
            text: "my Title",
	        myClass: "red",
        }
    })
</script>

</body>
</html>





