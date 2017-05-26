<template>
	<div class="row">
		<div class="col m8 offset-m2">
			<br><br><br>
			<h3>Get / Delete Data From Server</h3>
			<h4>Snippet</h4>
			<pre>
		axios.get("/api/users")
		     .then( (response) => {
	                    this.users = response.data;
                });

			</pre>
			<h3>Delete</h3>
			<h4>Snippet</h4>
			<pre>
		axios.delete("api/users/delete")
	            .then((response) => {
	                console.log(response);
	                this.get();
		})
			</pre>
			<hr>
			<button @click="get" class="btn green">Refresh</button>
			<button @click="deleteUsers" class="btn red">Delete</button>
			<table class="striped">
				<thead>
					<tr>
						<th class="center">ID</th>
						<th class="center">Name</th>
						<th class="center">E-Mail-Adresse</th>
						<th class="center">Erstellt</th>
						<th class="center">Verändert</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="user in users">
						<td class="center">{{user.id}}</td>
						<td class="center">{{user.name}}</td>
						<td class="center">{{user.email}}</td>
						<td class="center">{{user.created_at}}</td>
						<td class="center">{{user.updated_at | time}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>

	export default {

	    data() {
	        return {
	            users: null
	        }
	    },

	    created() {
            axios.get("/api/users")
                .then( (response) => {
                    this.users = response.data;
                });
	    },
		methods: {
	        get() {
                axios.get("/api/users")
                    .then( (response) => {
                        this.users = response.data;
                    });
	        },
			deleteUsers(){
	            axios.delete("api/users/delete")
		            .then((response) => {
	                    console.log(response);
	                    this.get();
		            })
			}
		}

	}

</script>


<style>


</style>