<template>
	<div class="center">
		<br><br><br>
		<h3>Patch Data </h3>
		<h4>Snippet</h4>
		<code>
axios.patch("/api/patch/user/" + user_id, {
key: key,
value: value
})
.then((response) => {
console.log(response);
this.get();
})
		</code>
		<br><br>
		<hr>
		<button @click="showInput" class="btn ">Toggle Edit</button>
		<br>
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
				<td class="center">
					{{user.id}}
				</td>

				<td class="center">
					<span v-show="hidden" @click="showInput">{{user.name}}<br></span>
					<input type="text" @change="edit(user.id, 'name', user.name)" v-show="!hidden" v-model="user.name">
				</td>

				<td class="center">
					<span v-show="hidden" @click="showInput">{{user.email}}<br></span>
					<input type="text" @change="edit(user.id, 'email', user.email)" v-show="!hidden" v-model="user.email">
				</td>
				<td class="center">{{user.created_at}}</td>
				<td class="center">{{user.updated_at}}</td>
			</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
	export default{

	    data () {
	        return{
	            users: null,
		        hidden: true
	        }
	    },

	    created () {
	        axios.get("api/users")
		        .then((response) => {
	                this.users = response.data;
		        });
	    },

	    methods: {
	        get() {
                axios.get("api/users")
                    .then((response) => {
                        this.users = response.data;
                    });
	        },
	        showInput() {
				this.hidden = !this.hidden;
	        },
	        edit(user_id, key, value){
				console.log(value);
				let yes = window.confirm("Willst du den Datensatz editieren!");
				if(yes){
					axios.patch("/api/patch/user/" + user_id, {
	                    key: key,
						value: value
	                }).then((response) => {
					    console.log(response);
					    this.get();
					})
                }

	        }
	    }
	}
</script>