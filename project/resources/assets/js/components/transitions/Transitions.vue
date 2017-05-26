<template>
	<div class="row">
		<div class="col m8 offset-m2">
			<br><br><br>
			<button @click="show = !show" class="btn">
				Basic Transition
			</button>
			<transition name="fade">
				<p v-if="show">Hello!</p>
			</transition>
			<br><br><br>
			<button @click="show2 = !show2" class="btn">
				Cubic-Bezier
			</button>
			<transition name="slide-fade">
				<p v-show="show2">Look what happens!</p>
			</transition>
			<br><br><br>
			<button @click="show3 = !show3" class="btn">Animation</button>
			<transition name="bounce">
				<p v-if="show3">Look at me!</p>
			</transition>
			<br><br>
			<hr>
			<br><br>
			<h4>Transition States</h4>
			<ol class="collection">
				<li class="collection-item"><p><code>v-enter</code>: Starting state for enter. Added before element is inserted, removed one frame after element is inserted.</p>
				</li>
				<li class="collection-item"><p><code>v-enter-active</code>: Active state for enter. Applied during the entire entering phase. Added before element is inserted, removed when transition/animation finishes. This class can be used to define the duration, delay and easing curve for the entering transition.</p>
				</li>
				<li class="collection-item"><p><code>v-enter-to</code>: <strong>Only available in versions &gt;=2.1.8.</strong> Ending state for enter. Added one frame after element is inserted (at the same time <code>v-enter</code> is removed), removed when transition/animation finishes.</p>
				</li>
				<li class="collection-item"><p><code>v-leave</code>: Starting state for leave. Added immediately when a leaving transition is triggered, removed after one frame.</p>
				</li>
				<li class="collection-item"><p><code>v-leave-active</code>: Active state for leave. Applied during the entire leaving phase. Added immediately when leave transition is triggered, removed when the transition/animation finishes. This class can be used to define the duration, delay and easing curve for the leaving transition.</p>
				</li>
				<li class="collection-item"><p><code>v-leave-to</code>: <strong>Only available in versions &gt;=2.1.8.</strong> Ending state for leave. Added one frame after a leaving transition is triggered (at the same time <code>v-leave</code> is removed), removed when the transition/animation finishes.</p>
				</li>
			</ol>
		</div>
	</div>
</template>

<script>
    export default{
        name: "demo",

        data() {
            return {
                show: false,
	            show2: false,
	            show3: false
            }
        }
    }
</script>

<style lang="sass">

	/* BASIC */
	.fade-enter-active, .fade-leave-active
		transition: opacity .5s


	.fade-enter, .fade-leave-to
		opacity: 0

	/* Cubic */
	.slide-fade-enter-active
		transition: all .3s ease

	.slide-fade-leave-active
		transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0)

	.slide-fade-enter, .slide-fade-leave-to
		transform: translateX(10px)
		opacity: 0

	/* BOUNCE */
	.bounce-enter-active
		animation: bounce-in .5s;

	.bounce-leave-active
		animation: bounce-in .5s reverse;

	@keyframes bounce-in
		0%
			transform: scale(0);

		50%
			transform: scale(1.5);

		100%
			transform: scale(1);



</style>