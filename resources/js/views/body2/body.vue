<template>
	<div style="background-color:white">
		<navigation style="background-color:white"/>
		<container />
		<Footer />
	</div>
</template>

<script >
import Footer from "./footer/footer.vue";
import navigation from './header/navigation';
import container from "./section/container_prod";
	export default{
		name: "body2",
		components:{
			"Footer":Footer,
			"navigation":navigation,
			"container":container
		}
	};
</script>