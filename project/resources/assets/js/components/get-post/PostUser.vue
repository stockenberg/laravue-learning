<template>
	<div class="row">
		<div class="col m8 offset-m2">
			<br><br><br>
			<h3>POST Data To Server</h3>
			<h4>Snippet</h4>
			<pre>
		axios.post('/api/user/save', {
		    username: this.input.username,
                    email: this.input.email,
                    password: this.input.password
                })
		.then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
			</pre>
			<hr>
			<form action="" method="POST" @submit="save"  @keydown="errors.clear($event.target.name)">
				<div>
					<label for="username">Username</label>
					<input type="text" name="name" v-model="input.name" id="">
					<p class="red-text" v-if="errors.has('name')" v-text="errors.get('name')"></p>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="email" name="email" v-model="input.email" >
					<p class="red-text" v-if="errors.has('email')"  v-text="errors.get('email')"></p>

				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" name="password" v-model="input.password" >
					<p class="red-text" v-if="errors.has('password')" v-text="errors.get('password')"></p>

				</div>
				<div>
					<input type="submit" class="btn green" :disabled="errors.any()" value="Speichern">
				</div>
				<p v-show="dataSaved">Erfolgreich gespeichert!</p>
			</form>

		</div>
		<users></users>
	</div>
</template>

<script>

	import {Errors} from './Errors'

    export default {

        data() {
            return {
                input: {
		            name: null,
		            email: null,
		            password: null
                },
	            errors: new Errors(),
	            dataSaved: false,
            }
        },

	    methods: {
            save(event){
                event.preventDefault();

                axios.post('/api/user/save', this.input)
                .then( (response) =>  {
                    console.log(response);

                    this.dataSaved = true;

					this.input.name = null;
					this.input.email = null;
					this.input.password = null;

                    setTimeout(() => {
                        this.dataSaved = false;
                    }, 1000)

                })
                .catch( (error) => {
                    console.log(error);
                    this.errors.set(error.response.data);
                });

		    }
	    }



    }

</script>


<style>


</style>