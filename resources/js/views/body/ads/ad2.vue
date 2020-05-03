<template>
	<div class="nov-row-wrap row">
		<div class="nov-image col-lg-12 col-md-12">
			<div class="block">
				<div class="block_content">
					<div class="effect"><a href="#"> <img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-home1-08.jpg" title="banner 1-5" alt="banner 1-5" /></a></div>
					<!-- <div v-if="loaded===true">
						<pie-chart :chartdata="chartData" :options="chartOptions"/>
						<p>Country:{{listnames}}</p>
						<br>
						<p>TotalConfirmed:{{listdonnee}}</p>
						<br>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</template>

<script>
// import { Pie } from 'vue-chartjs';

export default{
	name: 'Ad2',
	// extends: Pie,
	// created(){
	// 	this.$store.dispatch('getCovidCountry');
		
	// },
	// mounted(){
	// 	// this.chartdata.labels=this.$store.getters.covidCountries;
	// 	// this.chartdata.datasets[0].data = this.$store.getters.covidCases;
	// 	this.renderChart(this.chartdata, this.options);	
 //  },
 //  methods:{
 //  },
 //  data (){
 //  	const vm = this;
 //  	return {
 //  		chartdata: {

	//       labels: ["papa","ton","lilo"],
	//       datasets: [
	//         {
	//           label: 'Coronavirus cases',
	//           backgroundColor: '#f87979',
	//           data: [56,23,72]
	//         }
	//       ]
	//     },
	//     options: {
	//       responsive: true,
	//       maintainAspectRatio: false
	//     }
 //  	}
 //  }
	
};

</script>