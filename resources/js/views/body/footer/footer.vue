<template>
	<footer >
		<div class="color-foot start">
			<Head/>
		</div>

		<div style="display:flex; padding-top:40px" class="color-foot end">
			<Customer style="margin-left:40px" />
			<Gain style="margin-left:60px" />
			<!-- <About/> -->
			<Pay style="margin-left:60px" />
			<Follow style="margin-left:60px" />
		</div>

		<div class="color-foot end">
			<Marque style="padding-bottom: 50px; padding-top:30px;"/>
		</div>

	</footer>
</template>

<script >

import Customer from "./customer";
import Follow from "./follow";
import Gain from "./gain";
import Head from "./head";
import Marque from "./marque";
import Pay from "./pay";
// import About from " ./about";

export default{
	name:'Footer',
	components:{
		"Customer": Customer,
		"Follow": Follow,
		"Gain": Gain,
		"Head": Head,
		"Marque":Marque,
		"Pay": Pay,
		// "About": About
	},
};
</script>