<template>
	<div v-show="isActive"><slot></slot></div>
</template>


<script>
	export default{
        props: {
            name: {
                required: true,
            },
            selected: {default: false}
        },

        data() {
            "use strict";
            return {
                isActive :false
            }
        },

        computed: {
            href() {
                //return "test";
                return "#" + this.name.toLowerCase().replace(/ /g, "-");
            }
        },

        mounted() {
            "use strict";
            this.isActive = this.selected;
        }
	}
</script>