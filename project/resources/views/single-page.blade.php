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
	<div class="row">
		<div class="col m8 offset-m2">
			<h1 class="center">Single-Page Component</h1>
			<p>Not that recommended - harder to read</p>
			<hr>
			<br><br><br>
			<single-page inline-template>
				<p>Your Number is set to: @{{count}}</p>
			</single-page>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
<script>

	Vue.component('single-page', {
	    data () {
	        return {count: 1}
	    }
	});

    new Vue({
        el: '#test',

    })
</script>

</body>
</html>





