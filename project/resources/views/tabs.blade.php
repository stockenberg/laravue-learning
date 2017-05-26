@extends("layouts.master")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">

@section("content")
<tabs>
	<tab name="About" :selected="true">
		<h1>lorem About</h1>
	</tab>
	<tab name="About Us">
		<h1>lorem About Us</h1>

	</tab>
	<tab name="About Our Culture">
		<h1>lorem Our Culture</h1>
	</tab>
</tabs>
@endsection