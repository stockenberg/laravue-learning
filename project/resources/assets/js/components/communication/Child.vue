<template>
	<div>
		<h1 v-bind:class="color + '-text'">{{headline}}</h1>
		<p>{{paragraph}}</p>
		<button @click="$emit('custom-notify')" class="btn green">Notify Me!</button>
	</div>
</template>

<script>

	export default{
	    props: ["headline", "paragraph", "color"],

	}

</script>

<style>


</style>