<template>
	<div class="row">
		<div class="col m8 offset-m2 center">
			<child v-bind:headline="headline" color="blue" v-bind:paragraph='lorem' @custom-notify="sayHello"></child>
		</div>
	</div>

</template>


<script>
    import Child from "./Child.vue"
    export default{

        data () {
            return {
                headline: "Das ist meine Überschrift",
                lorem: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam atque, commodi, cupiditate doloribus dolorum eius id iure iusto maiores necessitatibus neque nostrum, omnis quam tempora tenetur voluptatibus? Quis, vitae?"
            }
        },

        components: {
            Child
        },

        methods: {
            sayHello () {

                /**
				Event.$emit('applied');
				Event.$on('applied', () => alert("test"));
				**/


                alert("hallo! Ich wurde vom Child gerufen!");

            }
        }
    }

</script>

<style>


</style>