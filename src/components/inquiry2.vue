<template>
  <div>
      <div class="box_inquiry">
        <h5 class="title_inquiry">自選4個行業做比較</h5>
        <form action="http://192.168.64.2/query2.php" method="get" class="form_inq">
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i1" value="工業及服務業">工業及服務業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i2" value="工業">工業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i3" value="礦業及土石採取業">礦業及土石採取業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i4" value="製造業">製造業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i5" value="電力及燃氣供應業">電力及燃氣供應業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i6" value="用水供應及污染整治業">用水供應及污染整治業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i7" value="營建工程業">營建工程業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i8" value="服務業">服務業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i9" value="批發及零售業">批發及零售業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i0" value="運輸及倉儲業">運輸及倉儲業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i11" value="住宿及餐飲業">住宿及餐飲業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i12" value="出版_影音製作_傳播及資通訊服務業">出版、影音製作、傳播及資通訊服務業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i13" value="金融及保險業">金融及保險業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i14" value="不動產業">不動產業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i15" value="專業科學及技術服務業">專業科學及技術服務業</div>
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i16" value="支援服務業">支援服務業</div>
            <!-- <input type="checkbox" class="input_inq" name="i17" value="教育業">教育業 -->
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i18" value="醫療保健">醫療保健</div>
            <!-- <input type="checkbox" class="input_inq" name="i19" value="藝術_娛樂及休閒服務業藝術_娛樂及休閒服務業">藝術_娛樂及休閒服務業 -->
            <div class="checkbox_inq"><input type="checkbox" class="input_inq" name="i20" value="其他服務業">其他服務業</div>
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
  name: 'inquiry2',
}

</script>

<style lang="scss">
  @import '../assets/scss/construction.scss';
</style>
