<template>
	<div class="col-lg-6" style="margin-left: 100px">
					<div class="details_content">
						<div class="details_name"><h2>Smart Phone</h2></div>
					

						<div class="details_price"><h4>$670</h4></div>
						
						<!-- In Stock -->
						<div class="in_stock_container" style="display:flex">
							<div class="availability">Availability:</div> <span> In Stock</span>
						</div>
						<br>
						<div class="details_text">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
						</div>
						<br>
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<br>
							<div class="button is-medium"><a href="#">Add to cart</a></div>
						</div>
						<br>
						
						<!-- Share -->
						<div  style="display:flex">
							<span style="margin-right:5px">Share: </span>
							<ul style="display:flex">
								<li style="margin-right:10px"><a href="#">  <i class="fa fa-pinterest" aria-hidden="true"></i></a>  </li>
								<li style="margin-right:10px"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
								<li style="margin-right:10px"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>  </li>
								<li ><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
</template>

<script >
	export default{
		name: "datails",
	};
</script>