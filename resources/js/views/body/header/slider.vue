<template>
<div class='slider-container shape'>
  <img class='slider-item' width="100%" src="@/images/home_slider_1.jpg" />
</div>

</template>


<script>
  export default{
    name:'slider',
    data() {
    return {
      pictures: [
      "@/images/avds_large.jpg",
      "@/images/home_slider_1.jpg",
      "@/images/slider1.png"
        // "https://cdn.pixabay.com/photo/2015/12/12/15/24/amsterdam-1089646_1280.jpg",
        // "https://cdn.pixabay.com/photo/2016/02/17/23/03/usa-1206240_1280.jpg",
        // "https://cdn.pixabay.com/photo/2015/05/15/14/27/eiffel-tower-768501_1280.jpg",
        // "https://cdn.pixabay.com/photo/2016/12/04/19/30/berlin-cathedral-1882397_1280.jpg"
      ],
      timer: null,
      currentIndex: 0
    };
  },

  mounted: function() {
    this.startSlide();
  },

  methods: {
    startSlide: function() {
      this.timer = setInterval(this.next, 3000);
    },

    next: function() {
      this.currentIndex += 1;
      if(this.currentIndex===this.pictures.length){
        this.currentIndex=0;
      }
    },
    prev: function() {
      this.currentIndex -= 1;
    }
  },

  computed: {
    currentImg: function() {
      return this.pictures[Math.abs(this.currentIndex)];
    }
  }
}
</script>
