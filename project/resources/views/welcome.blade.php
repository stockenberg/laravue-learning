@extends("layouts.master")

@section("content")

	<div class="quicklinks nav">
		<h5>Quicklinks</h5>
		<ul>
			<li><a href="#Basics">&raquo; Basics</a></li>
			<li><a href="#Components">&raquo; Components</a></li>
			<li><a href="#Uebungen">&raquo; Übungen</a></li>
			<li><a href="#Axios">&raquo; Axios</a></li>
			<li><a href="#Links">&raquo; Links und Literatur</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="col m8 offset-m2">
			<br>
			<img src="{{asset("images/var.png")}}" alt="" style="display: block; margin: auto;" height="100">
			<h3 class="center">Vue.js</h3>
			<br>
			<ol class="collection">
				<!-- Basics -->
				<li class="collection-item"><h4 id="Basics">Basics</h4></li>
				<item path="{{route("one.way")}}">One Way Databinding</item>
				<item path="{{route("two.way")}}">Two Way Databinding - [v-model]</item>
				<item path="{{route("listen")}}">Listen - [v-for]</item>
				<item path="{{route("conditions")}}">Conditions [v-show | v-if | Conditional CSS}</item>
				<item path="{{route("transitions")}}">Transitions</item>
				<item path="{{route("attr.class.binding")}}">Attribut und Class Binding</item>
				<item path="{{route("computed")}}">Computed Properties</item>
				<item path="{{route("filter")}}">Filter</item>
				<item path="{{route("events")}}">Events</item>
				<item path="https://vuejs.org/v2/guide/events.html#Event-Modifiers">Event Modifiers</item>
				<item path="#SPAintro">Intro in Vue as SPA's</item>
				<item path="#">Routing: Look into subproject - vue init webpack</a><br>
					<p>Projectname: vue-routing (Localhost)</p>
				</item>


				<!-- Component Basierte Beispiele -->
				<li class="collection-item"><h4 id="Components">Components</h4></li>
				<item path="{{route("register.components")}}">Registriere Components</item>
				<item path="{{route("single-page")}}">Inline Template</item>
				<item path="{{route("component")}}">Component.vue</item>
				<item path="{{route("nesting")}}">Verschachtelung von Components + Slots</item>
				<item path="{{route("communication")}}">Component Communication</item>
				<item path="{{route("communication")}}">Global Communication (see app.js and Communication)</item>

				<!-- Übungen -->
				<li class="collection-item"><h4 id="Uebungen">Übungen</h4></li>
				<item path="{{route("custom-component")}}">
					<i class="large material-icons"
					   style="font-size: 22px;">new_releases
					</i>
					Baut euch eigene Components
				</item>
				<item path="{{route("form-data")}}">
					<i class="large material-icons"
					   style="font-size: 22px;">new_releases
					</i>
					Form Data
				</item>

				<item path="{{route("todo.object")}}">
					<i class="large material-icons"
					   style="font-size: 22px;">new_releases
					</i>
					Todoliste mit Objekten
				</item>
				<item path="{{route("tabs")}}">
					<i class="large material-icons"
					   style="font-size: 22px;">new_releases
					</i>
					Tabs
				</item>

				<!-- Axios-->
				<li class="collection-item"><h4 id="Axios">Axios</h4></li>
				<item path="https://github.com/mzabriskie/axios">Axios Basics</item>
				<item path="{{route("get")}}">GET</item>
				<item path="{{route("post")}}">POST</item>
				<item path="{{route("put")}}">PUT</item>
				<item path="{{route("patch")}}"> PATCH</item>
				<item path="{{route("get")}}">DELETE</item>

				<!-- Links -->

				<li class="collection-item"><h4 id="Links">Fachliteratur und Links</h4></li>
				<item path="https://vuejs.org/v2/guide/">
					<i class="material-icons">language</i>
					Vue2 Docs
				</item>
				<item path="https://www.amazon.de/Learning-Vue-js-2-Olga-Filipova/dp/1786469944/ref=sr_1_1?ie=UTF8&qid=1495396671&sr=8-1&keywords=Vuejs">
					<i class="material-icons">language</i>
					Learning Vue.js 2
				</item>
				<item path="https://www.amazon.de/Vue-js-2-Cookbook-Andrea-Passaglia/dp/1786468093/ref=sr_1_1?ie=UTF8&qid=1495396709&sr=8-1&keywords=Vue+Cookbook">
					<i class="material-icons">language</i>
					Vue.js 2 Cookbook
				</item>
				<item path="https://laracasts.com/series/learn-vue-2-step-by-step">
					<i class="material-icons">play_circle_outline</i>
					Videoserie: Vue2 Step by Step
				</item>
				<item path="https://www.npmjs.com/package/vue2-filters">
					<i class="material-icons">language</i>
					Vue2Filters
				</item>
				<item path="https://github.com/mzabriskie/axios">
					<i class="material-icons">language</i>
					Axios HTTP Library
				</item>
				<item path="https://monterail.github.io/vuelidate/#getting-started">
					<i class="material-icons">language</i>
					Vue2 Form Validierung
				</item>
				<item path="https://vuejs.org/v2/guide/components.html#Content-Distribution-with-Slots">
					<i class="material-icons">language</i>
					More About Components and Slots
				</item>
				<item path="https://github.com/vuejs/awesome-vue">
					<i class="material-icons">language</i>
					Awesome Vue! Collection of Plugins
				</item>

			</ol>
		</div>
	</div>
@endsection
