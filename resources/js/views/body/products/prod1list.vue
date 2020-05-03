<template>
						<div class="bord" style="background-color:white; margin-top:30px;width:1200px;height: 300px;" >
							<h2 style="margin-left:20px">WEEKLY DEALS</h2>
							<div class="divider">time before end of deal</div>
							<div class="columns is-mobile has-text-centered" style="margin-left:40px">
								
								<div class="bord"><a target="blank"><router-link to="/product"> <img class="resize is-small" src= '@/images/product_8.jpg' /></router-link></a>
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								<div class="bord"><img class="resize is-small" src= '@/images/product_5.jpg' />
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								<div class="bord"><img class="resize is-small" src= '@/images/details_1.jpg' />
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								<div class="bord"><img class="resize is-small" src= '@/images/product_5.jpg' />
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								<div class="bord"><img class="resize is-small" src= '@/images/product_8.jpg' />
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								<div class="bord"><img class="resize is-small" src= '@/images/details_1.jpg' />
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								<div class="bord">
									<img class="resize is-small" src= '@/images/product_5.jpg' />
									<div class="product_content">
										<div class="is-size-6"><a href="product.html">Smart Phone</a></div>
										<div class="is-size-5"><strong>$670</strong></div>
									</div>
								</div>
								
							
								
								<!-- this product list must be able to turn around so we'll need to add two arrows left and right to enable proper direction by the user  -->
							</div>
						</div>
</template>

<script>
import Prods1 from './prods1';

export default {
  name: 'Prod1list',
  components: { 'Prods1':Prods1 },
};
</script>  