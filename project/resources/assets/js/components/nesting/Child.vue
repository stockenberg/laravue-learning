<template>
	<div class="row">
		<div class="col m8 offset-m2">
			<br><br><br>
			<h2 class="center">{{child}}</h2>
			<slot></slot>
			<slot name="content">
				Iam Default Text
			</slot>
			<slot name="footer">
				Me 2 Default here all the way!
			</slot>
		</div>
	</div>
</template>

<script>

    export default{
        data () {
            return {
                child: "Iam a Child Text!"
            }
        }
    }
</script>


<style>


</style>