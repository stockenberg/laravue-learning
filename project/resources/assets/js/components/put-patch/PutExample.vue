<template>
	<div class="row">
		<div class="col m8 offset-m2">
			<br><br>
			<h2>PUT - Example</h2>
			<h3>Snippet</h3>
			<code>
				axios.put("/api/put/user/", {
				id: this.id,
				name: this.name,
				email: this.email,
				})<br>
				.then((response) => {
				console.log(response);
				this.name = null;
				this.email = null;
				this.get();
				});
			</code>
			<br><br><br>
			<table class="striped">
				<thead>
				<tr>
					<th class="center">Edit</th>
					<th class="center">ID</th>
					<th class="center">Name</th>
					<th class="center">E-Mail-Adresse</th>
					<th class="center">Erstellt</th>
					<th class="center">Verändert</th>
				</tr>
				</thead>
				<tbody>
				<tr v-for="user in users">
					<td>
						<button class="btn" @click="getForEdit(user.id)">Edit Me</button>
					</td>
					<td class="center">
						{{user.id}}
					</td>

					<td class="center">
						{{user.name}}
					</td>

					<td class="center">
						{{user.email}}
					</td>
					<td class="center">{{user.created_at}}</td>
					<td class="center">{{user.updated_at}}</td>
				</tr>
				</tbody>
			</table>
			<br><br>
			<h2>Überschreibe ID: {{id}}</h2>
			<form action="" @submit="updateEntry">
				<div>
					<label for="">Username</label>
					<input type="text" required v-model="name">
				</div>
				<div>
					<label for="">EMail</label>
					<input type="email" required v-model="email">
				</div>
				<button class="btn">Überschreiben!</button>
			</form>
		</div>
	</div>
</template>

<script>
    export default{
        data() {
            return {
                users: null,
                name: null,
                email: null,
                id: null
            }
        },
        mounted() {
            this.get();
        },
        methods: {
            get() {
                axios.get("/api/users")
                    .then((response) => {
                        this.users = response.data;
                    });
            },
	        getForEdit(id){
                this.users.forEach(user => {
                    if(user.id == id){
                        this.id = id;
                        this.name = user.name;
                        this.email = user.email;
                    }
                })
	        },
	        updateEntry(event){
	            event.preventDefault();
	            axios.put("/api/put/user/", {
	                id: this.id,
		            name: this.name,
		            email: this.email,
	            })
	            .then((response) => {
                    console.log(response);
                    this.name = null;
                    this.email = null;
		            this.get();
	            });
	        }
        }
    }
</script>

<style lang="sass"></style>