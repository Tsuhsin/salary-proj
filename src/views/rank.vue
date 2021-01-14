<template>
  <div>
      <div class="inquiryContainer box_rank">
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
  @import '../assets/scss/construction.scss';
  * {
    transition-duration: .3s;
  }
  .title_rank {
    margin-left: 10px;
    color: #632b2b;
    letter-spacing: 1px;
  }
  .p_rank {
    margin-left: 10px;
    color: #632b2b;
    opacity: .8;
  }
  .box_rank {
    height: 500px;
    max-width: 800px;
    padding: 50px;
  }
  .pic_rank {
    margin: 50px 0px;
    background-image: url(https://www.flaticon.com/svg/vstatic/svg/1162/1162489.svg?token=exp=1610601673~hmac=be10063407870e1094c56be73ee1c573);
    background-repeat: no-repeat;
    height: 200px;
    background-size: contain;
    background-position: center center;
  }
  .form_rank {
    display: flex;
    align-content: center;
  }
  .text_rank {
    width: 150px;
    margin: 5px;
    padding: 0px 10px;
    border: 2px solid #a84388;
    border-radius: 35px;
    background-color: transparent;
  }
  .span_rank {
    margin: auto 0px;
    padding: 0px;
    color: #a84388;
  }
  .btn_rank {
    margin: 5px;
    margin-left: 50px;
    padding: 0px 10px;
    border: 2px solid #a84388;
    border-radius: 35px;
    color: #a84388;
    background-color: transparent;
    &:hover {
      background-color: #a84388;
      color: #fff;
    }
  }
  @media screen and (max-width: 576px) {
    .box_rank {
      padding: 30px 20px;
    }
    .text_rank {
      width: 150px;
    }
  }
  @media screen and (max-width: 660px) {
    .pic_rank {
      height: 150px;
    }
    .form_rank {
      display: inherit;
    }
    .text_rank {
      width: 120px;
    }
    .span_rank {
      display: inline;
    }
    .btn_rank {
      display: block;
      margin: 10px auto;
      margin-top: 30px;
      width: 100px;
    }
  }
</style>
