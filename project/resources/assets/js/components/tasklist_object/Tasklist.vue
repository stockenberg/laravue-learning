<template>

	<div id="tasklist">
		<h3 class="center">{{headline}}</h3>
		<ul class="collection">
			<task v-for="task in tasks"
			      :task="task"
			      :completed="!task.completed"
			      :key="task.id"
			      @delete="deleted(task.id)"
			      @complete='completed(task.id)'></task>
		</ul>
		<br><br><br>
		<h3 class="center">Abgeschlossene Aufgaben</h3>
		<ul class="collection">
			<task v-for="task in tasks"
			      :task="task"
			      :completed="task.completed"
			      :key="task.id"
			      @delete="deleted(task.id)"
			      @complete='completed(task.id)'></task>
		</ul>
	</div>
</template>

<script>
    import Task from './Task.vue';

    export default {
        name: "tasklist",
        data () {
            return {
                tasks: [
                    {id: 1, title: "Weiter arbeiten!", completed: false},
                    {id: 2, title: "Weiter Essen!", completed: false},
                    {id: 3, title: "Weiter Schlafen!", completed: false},
                    {id: 4, title: "Weiter Laufen!", completed: false},
                    {id: 5, title: "Weiter Fahren!", completed: false},
                ]
            }
        },
        methods: {
            completed(id) {
                this.tasks.forEach(task => {
                    if (task.id === id) {
                        task.completed = true;
                    }
                })
            },
            deleted (id) {
                this.tasks.forEach(task => {
                    if (task.id === id) {
                        this.tasks.pop(task)
                    }
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        props: ["headline"],
        components: {
            Task
        }
    }
</script>

<style>

</style>
