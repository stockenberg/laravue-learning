<template>
	<li class="collection-item row" v-show="completed">
		<a href="#complete" class="left" @click="$emit('complete')"><i class="material-icons">done</i></a>
		<span class="col offset-m1">{{task.title}} - Task Abgeschlossen: {{task.completed}}</span>
		<a href="#" class="right" @click="$emit('delete')"><i class="material-icons">delete</i></a>
	</li>
</template>

<script>
    export default{
        props: {
            task: Object,
	        completed: Boolean
        }
    }
</script>

<style lang="scss">
	.collection {
		li.collection-item {
			padding-top: 20px;
			&:hover {
				background-color: #eee !important;
				cursor: pointer;
			}
		}
	}
</style>
