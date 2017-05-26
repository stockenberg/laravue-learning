<template>
	<div class="row">
		<div class="col m8 offset-m2">
			<br><br><br>
			<h1 class="center">{{parent}}</h1>
			<child class="center">

				Das steht in dem Template wenns genestet ist!

				<p slot="content">Thats my Named Content</p>

				<!-- No wrapper -->
				<template slot="footer"> Thats my Footer Content</template>
			</child>
		</div>
	</div>
</template>


<script>
	import Child from "./Child.vue"

    export default{
        data () {
            return {
                parent: "Iam a Parent Text!"
            }
        },
        components: {
            Child
        }
    }

</script>


<style>


</style>