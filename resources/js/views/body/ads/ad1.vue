<template>
	<div class="nov-image col-lg-4 col-md-4">
		<div class="block">
			<div class="block_content">
			    <div class="effect">
			      <a href="#"> <img class="img-fluid" src="https://versions.bulma.io/0.7.0/images/book/book-cover.png" alt="banner-3" title="banner-3"></a>
			      <!-- <div>{{chartdata.labels}}</div>
			      <div>{{chartdata.datasets[0].data}}</div>
			      <div>{{mama}}</div>
			      <div>{{$store.getters.covidCountry}}</div> -->
			    </div>
		  	</div>
		</div>
	</div>
</template>
<!-- you have to set prop for the images in the ads -->
<script>

export default {
  name: 'Ad1'
 //  created(){
	// 	this.$store.dispatch('getCovidCountry');
	// 	this.getdata();
		
	// },
	// mounted(){
	// 	this.chartdata.labels=this.oklm;
	// 	this.chartdata.datasets[0].data = this.oklma;
	// 	// this.renderChart(this.chartdata, this.options);	
 //  },
 //  methods:{
 //  	getdata(){
 //  		this.mama.forEach( country =>{
 //  			// this.Africa.forEach(bled =>{
 //  			// 	if(country.Country===bled.names){
 //  					this.oklm.push(country.Country);
 //  					this.oklma.push(country.TotalConfirmed);
 //  			// 	}
 //  			// })
  			
 //  		})
 //  	}

 //  },
 //  data (){
 //  	var vm= this;
 //  	return {
 //  		oklm: [],
 //  		oklma: [],
 //  		mama: vm.$store.getters.covidCountry,
 //  		chartdata: {

	//       labels: null,
	//       datasets: [
	//         {
	//           label: 'Coronavirus cases',
	//           backgroundColor: '#f87979',
	//           data: null
	//         }
	//       ]
	//     },
	//     options: {
	//       responsive: true,
	//       maintainAspectRatio: false
	//     },
	    
 //  	}
 //  }
};
</script>    	   
