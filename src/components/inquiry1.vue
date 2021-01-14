<template>
  <div>
      <div class="box_inquiry">
        <h5 class="title_inquiry">以年份及行業查詢</h5>
        <div class="pic_inq"></div>
        <form action="http://192.168.64.2/query1.php" method="get">
            <p class="p_inq">年份：<span>(請輸入1980~2018之間的年份)</span></p><input type="text" name="year" class="text_inq">
            <p class="p_inq">行業別：</p><select name="industry" class="text_inq select_inq">
                <option value="工業及服務業">工業及服務業</option>
                <option value="工業">工業</option>
                <option value="礦業及土石採取業">礦業及土石採取業</option>
                <option value="製造業">製造業</option>
                <option value="電力及燃氣供應業">電力及燃氣供應業</option>
                <option value="用水供應及污染整治業">用水供應及污染整治業</option>
                <option value="營建工程業">營建工程業</option>
                <option value="服務業">服務業</option>
                <option value="批發及零售業">批發及零售業</option>
                <option value="運輸及倉儲業">運輸及倉儲業</option>
                <option value="住宿及餐飲業">住宿及餐飲業</option>
                <option value="出版_影音製作_傳播及資通訊服務業">出版、影音製作、傳播及資通訊服務業</option>
                <option value="金融及保險業">金融及保險業</option>
                <option value="不動產業">不動產業</option>
                <option value="專業科學及技術服務業">專業科學及技術服務業</option>
                <option value="支援服務業">支援服務業</option>
                <option value="教育業">教育業</option>
                <option value="醫療保健">醫療保健</option>
                <option value="藝術_娛樂及休閒服務業">藝術、娛樂及休閒服務業</option>
                <option value="其他服務業">其他服務業</option>
            </select>
            <input type="submit" value="送出" class="btn_inq">
        </form>
      </div>

  </div>
</template>

<script>
// import axios from 'axios';
// import VueC3 from 'vue-c3';
// import 'c3/c3.min.css';

export default {
  name: 'inquiry1',
}

</script>

<style lang="scss">
@import '../assets/scss/inquiry.scss';

</style>
