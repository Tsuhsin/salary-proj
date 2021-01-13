<template>
  <div>
      <h5>inquiry1!</h5>
      <a class="block" :href="article.link" target="_blank">
      <img :src="article.thumb" class="articleImg">
      <div class="title">
        <h6>{{ article.title }}</h6>
      </div>
    </a>
  </div>
</template>

<script>
// import axios from 'axios';
// import VueC3 from 'vue-c3';
// import 'c3/c3.min.css';

export default {
  name: 'inquiry1',
  props: {
      article: Object,
  },
//   components: {
//     VueC3,
//   },
}

</script>

<style lang="scss">
  @import '../assets/scss/construction.scss';
</style>
