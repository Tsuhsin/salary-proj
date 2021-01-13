<template>
<div>
  <div class="inquiryContainer">
    <h1>查詢</h1>

  </div>
</div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'inquiry',
  components: {

  },
  data (){
    return{
      salaryList: [],
    }
  },
  mounted() {
      this.getSalaryList();
  },
  methods: {
    getSalaryList () {
      axios({
        method: 'GET',
        url: 'https://www.dgbas.gov.tw/public/data/open/Cen/Mp05001.xml'})
      .then((response) => {
        this.salaryList = response.data;
        console.log(response.data);
      })
      .catch(function (err) {
          console.log(err);
      })
    },

  }
}
</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/construction.scss';
</style>
