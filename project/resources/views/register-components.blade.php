@extends("layouts.master")


@section("content")

	<div class="row">
		<div class="col m8 offset-m2">
			<h1 class="center">Register Components</h1>
			<hr>
			<br><br><br>
			<ol class="collection">
				<li class="collection-item">
					<h5>Closure Based Components</h5>
					<pre>
Vue.component('my-component', {
	template: '<span>myData...</span>',
	data: {
	    message: 'hello'
	},
	methods: {

	}
})
					</pre>
				</li>
				<li class="collection-item">
					<h5>Single File Components</h5>
					<pre>
Vue.component('example', require('./components/Example.vue'));
					</pre>
				</li>
				<li class="collection-item">
					<h5>Usage</h5>
					<pre>
{{ utf8_decode("<my-component></my-component>")}}
{{ utf8_decode("<example></example>")}}
					</pre>
				</li>
			</ol>

		</div>
	</div>

@endsection