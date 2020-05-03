<template>
	<div id="wrapper-site">
	    <div id="content-wrapper" class="hero">
	  		<div id="main">
	  			<navigation style="background-color:white"/>
	  			<slider/>
	  			<block1/>
	    		<section id="content" class="hero">
	          		<div class="container">
	            		<div class="row">
	            			<Prod1list />
	            			<!-- <Ad1list style ="margin-top: 100px"/> -->
	            			<Prod3list />
	            			<New />
	            			<!-- <Ad2list /> -->
	            			<Prod2list />
	            			
	            		</div>

	            	</div>
	            </section>
	            <Footer/>
	        </div>
	    </div>
	</div>
</template>

<script>
import Ad1list from './ads/ad1list';
import Ad2list from './ads/ad2list';

import Prod1list from './products/prod1list';
import Prod2list from './products/prod2list';
import Prod3list from './products/prod3list';
import New from './products/newproducts';

import navigation from './header/navigation';
import slider from './header/slider';
import block1 from './header/block1';

import Footer from "./footer/footer";

export default {
  name: 'Body',
  components: { 'Ad1list':Ad1list,
  				'Ad2list':Ad2list,
  				'Prod1list':Prod1list,
  				'Prod2list':Prod2list,		 
  				'Prod3list':Prod3list,
  				'slider': slider,
  				'navigation': navigation,
  				'block1' : block1,
  				'Footer': Footer,
  				'New': New
  			},
};
</script>    	   
