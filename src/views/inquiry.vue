<template>
<div>
  <div class="inquiryContainer">
    <p class="p_inquiry"></p>
    <inquiry1></inquiry1>
    <hr>
    <inquiry2></inquiry2>
  </div>
</div>
</template>

<script>
import axios from 'axios';
import inquiry1 from '../components/inquiry1';
import inquiry2 from '../components/inquiry2';
export default {
  name: 'inquiry',
  components: {
    inquiry1,
    inquiry2
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
@import '../assets/scss/inquiry.scss';

</style>
