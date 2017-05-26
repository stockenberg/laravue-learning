<template>


	<div id="formdata" class="row">
		<br><br><br><br>
		<div class="col m8 offset-m2">
			<form action="">
				<h5>Payment</h5>
				<br>
				<p class="center">
					<input name="group1" v-model="formData.text.payment" type="radio" value="sofort" id="test1" />
					<label for="test1">Sofort</label>
				</p>
				<p class="center">
					<input name="group1" v-model="formData.text.payment" type="radio" value="paypal" id="test2" />
					<label for="test2">Paypal</label>
				</p>
				<br>
				<h5>Userdata</h5>
				<br>
				<div>
					<label for="">Firstname</label>
					<input type="text" v-model="formData.text.firstname">
				</div>
				<div>
					<label for="">Lastname</label>
					<input type="text" v-model="formData.text.lastname">
				</div>
				<input type="submit" value="Senden" @click.prevent="send">
			</form>
			<br>
			{{formData}}
			<h5>Ihre Daten</h5>
			<p>Vorname: {{formData.text.firstname }}</p>
			<p>Nachname: {{formData.text.lastname}}</p>
			<p>Bezahlweise: {{paymentDesc[formData.text.payment]}}</p>
		</div>
	</div>

</template>

<script>
    export default {
        name: 'formdata',
        data () {
            return {
                myValue: {name: "App"},
                formData: {
                    text: {
                        firstname: "",
                        lastname: "",
                        payment: ""
                    }
                },
                paymentDesc: {sofort: "Sofortüberweisung", paypal: "PayPal"}
            }
        },
        methods: {
            send() {
                console.log("Sending:" + JSON.stringify(this.formData));
            }
        }

    }
</script>

<style lang="scss">

	.warn {
		background: mistyrose;
	}

	#formdata {
		font-family: 'Avenir', Helvetica, Arial, sans-serif;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-align: center;
		color: #2c3e50;

	}

	h1, h2 {
		font-weight: normal;
	}


	a {
		color: #42b983;
	}
</style>
