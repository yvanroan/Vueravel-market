<template>
  <div id="prodlist">
  	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="product_grid">
						<items />
						<items />
						<items />
						<items />
						<items />
						<items />
						
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>	
</template>

<script>

import items from './productItems'
export default {
	name: 'prodlist',
	component:{
		'items'
	} 
};
</script>
