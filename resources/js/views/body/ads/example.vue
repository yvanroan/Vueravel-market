<!-- <template>
  <div class="nov-row-wrap row">
    <div class="nov-image col-lg-12 col-md-12">
      <div class="block">
        <div class="block_content">
          <div class="effect"><a href="#"> <img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/banner-home1-08.jpg" title="banner 1-5" alt="banner 1-5" /></a></div>
          <div v-if="loaded===true">
            <pie-chart :chartdata="chartData" :options="chartOptions"/>
            <p>Country:{{listnames}}</p>
            <br>
            <p>TotalConfirmed:{{listdonnee}}</p>
            <br>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</template> -->

<script>
import axios from 'axios';
import { Pie } from 'vue-chartjs'

export default{
  name: 'Ad2',
  extends: Pie,
  created(){
    this.start();
  },
  mounted(){
      this.renderChart(this.chartdata, this.options); 
  },
  methods: {
        start(){
          axios
        .get("https://api.covid19api.com/summary")
        .then((response) => {
                      response.data.Countries.forEach(country =>{
                        this.Africa.forEach(bled =>{
                          if (bled.names === country.Country){
                            this.listnames.push(country.Country);
                            this.listdonnee.push(country.TotalConfirmed);
                            return "here we go";
                            console.log("what the fuck are you doing?");
                            
                          }
                        })
                        
                    })
                    }).catch(e => {
                console.log(e)
                });
        }
  },
  data:() => ({

    chartdata: {

      labels: new Promise(function(resolve,reject){
        
      }
      datasets: [
        {
          label: 'Coronavirus cases',
          backgroundColor: '#f87979',
          data: this.setdonnee()
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  }),
  data(){
    return{
      loaded:false,
      covid:null,
      listnames:[],
      listdonnee:[],
      Africa:
        [
          {
            "id": 1,
            "names":"Algeria"
          },
          {
            "id": 2,
            "names":"Angola"
          },
          {
            "id": 3,
            "names":"Benin"
          },
          {
            "id":4,
            "names": "Botswana"
          },
          {
            "id": 5,
            "names": "Burkina Faso"
          },
          {
            "id": 6,
            "names":"Burundi"
          },
          {
            "id": 7,
            "names":"Cameroon"
          },
          {
            "id":8,
            "names":"Cape Verde"
          },
          {
            "id": 9,
            "names": "Central African Republic"
          },
          {
            "id": 10,
            "names": "Chad"
          },
          {
            "id": 11,
            "names": "Comoros"
          },
          {
            "id": 12,
            "names":"Republic of the Congo "
          },
          {
            "id": 13,
            "names": "Democratic Republic of the Congo "
          },
          {
            "id": 14,
            "names":"Côte d'Ivoire"
          },
          {
            "id": 15,
            "names": "Djibouti"
          },
          {
            "id": 16,
            "names":"Egypt"
          },
          {
            "id": 17,
            "names": "Equatorial Guinea"
          },
          {
            "id": 18,
            "names":"Eritrea"
          },
          {
            "id": 19,
            "names":"Ethiopia"
          },
          {
            "id": 20,
            "names":"Gabon"
          },
          {
            "id": 21,
            "names":"Gambia"
          },
          {
            "id": 22,
            "names":"Ghana"
          },
          {
            "id":23,
            "names":"Guinea"
          },
          {
            "id":24,
            "names": "Guinea-Bissau"
          },
          {
            "id": 25,
            "names": "Kenya"
          },
          {
            "id": 26,
            "names": "Lesotho"
          },
          {
            "id": 27,
            "names":"Liberia"
          },
          {
            "id": 28,
            "names": "Libya"
          },
          {
            "id": 29,
            "names": "Madagascar"
          },
          {
            "id": 30,
            "names": "Malawi"
          },
          {
            "id": 31,
            "names":"Mali"
          },
          {
            "id": 32,
            "names": "Mauritania"
          },
          {
            "id":33,
            "names":"Mauritius"
          },
          {
            "id": 34,
            "names":"Mayotte"
          },
          {
            "id": 35,
            "names":"Morocco"
          },
          {
            "id": 36,
            "names":"Mozambique"
          },
          {
            "id":37,
            "names": "Namibia"
          },
          {
            "id": 38,
            "names":"Niger"
          },
          {
            "id": 39,
            "names": "Nigeria"
          },
          {
            "id": 40,
            "names": "Réunion"
          },
          {
            "id":41,
            "names": "Rwanda"
          },
          {
            "id":42,
            "names": "Saint Helena"
          },
          {
            "id":43,
            "names": "São Tomé and Príncipe"
          },
          {
            "id": 44,
            "names": "Senegal"
          },
          {
            "id": 45,
            "names": "Seychelles"
          },
          {
            "id": 46,
            "names":"Sierra Leone"
          },
          {
            "id": 47,
            "names":"Somalia"
          },
          {
            "id":48,
            "names":"South Africa"
          },
          {
            "id": 49,
            "names":"Sudan"
          },
          {
            "id": 50,
            "names":"Swaziland"
          },
          {
            "id": 51,
            "names":"Tanzania"
          },
          {
            "id": 52,
            "names":"Togo"
          },
          {
            "id": 53,
            "names":"Tunisia"
          },
          {
            "id": 54,
            "names":"Uganda"
          },
          {
            "id": 55,
            "names": "Zambia"
          },
          {
            "id": 56,
            "names": "Zimbabwe"
          }
        ]

    } 
  }
  
};

</script>