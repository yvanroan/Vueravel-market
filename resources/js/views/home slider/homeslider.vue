
<template>
	<div id="slider">
		<div class="home">
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
		  			<sliderItem />
		  			<sliderItem />
		  			<sliderItem />
		  			<div class="home_slider_dots_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_dots">
										<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
											<li class="home_slider_custom_dot active">01.</li>
											<li class="home_slider_custom_dot">02.</li>
											<li class="home_slider_custom_dot">03.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>	
					</div>
		  		</div>
			</div>
  		</div>
	</div>	
</template>

<script>
import sliderItem from './sliderItem';

export default {
	name: 'homeslider',
	component:{
		'sliderItem'
	} 
};
</script>
