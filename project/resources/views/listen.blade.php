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
	<h1 class="center">Listen</h1>
	<hr>
	<br><br><br>

	<div class="row">
		<ul class="collection col m8 offset-m2">
			<li class="collection-header"><h4>Listen mit Arrays</h4></li>
			<li v-for="item in arr" class="collection-item">@{{item}}</li>
		</ul>


		<ul class="collection col m8 offset-m2">
			<li class="collection-header"><h4>Listen mit Objects</h4></li>
			<li v-for="item in obj" class="collection-item">@{{ item.title }}</li>
		</ul>

	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
<script>
    new Vue({
        el: '#test',
        data: {
            arr: ["one", "Two", "three"],
            obj: [
                {title: "one"},
                {title: "two"},
                {title: "three"},
            ]
        }
    })
</script>

</body>
</html>





