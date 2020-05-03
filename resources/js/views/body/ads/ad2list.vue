<template>
	<div class="nov-row spacing-bg-30 col-lg-12 col-xs-12" >
		<div class="nov-row-wrap row">
			<div class="nov-html col-xl-3 col-lg-3 col-md-3">
	    		<div class="block">
	                <div class="block_content">
	                	<Ad2 ></Ad2>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
	
import Ad2 from './ad2.vue';

export default{
	name:'Ad2list',
	components:{'Ad2':Ad2
	},
};
</script>