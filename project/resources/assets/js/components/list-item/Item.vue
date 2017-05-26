<template>
	<li class="collection-item">
		<a v-bind:href="path">
			<slot></slot>
		</a>
	</li>

</template>


<script>
    export default{
        props: ["path"]
    }
</script>