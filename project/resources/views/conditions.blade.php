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
			<h1 class="center">Conditions v-show | v-if | Conditional CSS</h1>
			<hr>
			<br><br><br>
			<h5 :class="{'fadein' : visible, 'hidden' : !visible, 'fade' : true}">Ich fade wild ein und aus!</h5>
			<br>
			<h5 v-show="visible">Ich bin versteckt!</h5>
			<hr>
			<h5 v-if="visible"> Ich Auch! Wenn...</h5>
			<h5 v-else="visible">Ich bin sichtbar! (Aber nur solange die anderen weg sind! )</h5>
			<br><br>
			<span class="btn" @click="toggle">Visible (click to toggle): @{{ visible }}</span>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
<script>
    new Vue({
        el: '#test',
        data: {
            visible: false
        },
        methods: {
            toggle () {
                this.visible = !this.visible;
            }
        }
    })
</script>

</body>
</html>





