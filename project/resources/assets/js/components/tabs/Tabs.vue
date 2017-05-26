<template>
	<div>
		<div class="tabs">
			<ul>
				<li v-for="tab in tabs" :class="{'is-active' : tab.isActive}">
					<a :href="tab.href" @click="selectTab(tab)">
						{{tab.name}}
					</a>
				</li>
			</ul>
		</div>

		<div class="tabs-details">
			<slot></slot>
		</div>
	</div>
</template>

<script>
	export default{
        data(){
            "use strict";
            return{
                tabs: ""
            }
        },
        created() {
            "use strict";
            this.tabs = this.$children;
            console.log(this.$children)
        },
        methods: {
            selectTab(selectedTab) {
                "use strict";
                this.tabs.forEach(tab => {
                    tab.isActive = (tab.name == selectedTab.name);
                });
            }
        }
	}
</script>