<template>
	<div class="product_details">
		<div class="container">
			<div class="row">
				<div style="display: flex; margin-bottom: 50px;">
					<pictures />
					<detail />
				</div>
				<characteristics />
				<others />
			</div>
		</div>
	</div>
</template>

<script >
import detail from "./details";
import characteristics from "./full_details";
import pictures from './image_block';
import others from "./related_prod";

export default{
	name: "container",
	components:{
		"detail":detail,
		 "characteristics":characteristics,
		"pictures":pictures,
		"others":others
	}
};
</script>