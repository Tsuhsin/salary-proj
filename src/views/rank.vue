<template>
  <div>
      <div class="rankContainer box_rank">
        <h5 class="title_rank">比較各行業每年薪資</h5>
        <p class="p_rank">請輸入2009~2018之間的年份來查詢</p>
        <div class="pic_rank"></div>
        <form action="http://192.168.64.2/query3.php" method="get" class="form_rank">
            <p class="span_rank">我想查詢</p>
            <input type="text" name="year" class="text_rank">
            <p class="span_rank">年的資料</p>
            <input type="submit" value="送出" class="btn_rank">
        </form>
      </div>

  </div>
</template>

<script>
// import axios from 'axios';
// import VueC3 from 'vue-c3';
// import 'c3/c3.min.css';

export default {
  name: 'rank',
}

</script>

<style lang="scss">
@import '../assets/scss/rank.scss';
</style>
