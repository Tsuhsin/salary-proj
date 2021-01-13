<template>
<div>
  <header class="jumbotron" id="top">
    <div class="container">
      <h1><span>薪</span>之藍圖</h1>
      <div class="line"></div>
      <h5>讓你快速了解薪資行情</h5>
    </div>
  </header>
  <section id="section_recomend">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>熱門職業排行</h1>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="food">
            <router-link to="./recomend" id="link">
              <h4>醫療保健</h4>
            </router-link>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="hotel">
            <router-link to="./recomend" id="link">
              <h4>金融保險</h4>
            </router-link>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="spot">
            <router-link to="./recomend" id="link">
              <h4>技術業</h4>
            </router-link>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="store">
            <router-link to="./construction" id="link">
              <h4>餐飲業</h4>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section_route">
    <router-link to="./construction" id="link">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-5 img"></div>
          <div class="col-sm-7">
            <h2>查詢各行業資料</h2>
            <h5>內容內容內容內容內容內容</h5>
            <h5>內容內容內容內容</h5>
          </div>
        </div>
      </div>
    </router-link>
  </section>
  <section id="section_test">
    <div class="container-fliud">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-5 depress"></div>
        <div class="col-sm-12 col-md-7">
          <div class="container">
            <h2>來試算看看未來薪資</h2>
            <hr/>
            <div class="row features">
              <div class="col-sm-4"><i class="fas fa-archway"></i>
                <h5>行業別</h5>
              </div>
              <div class="col-sm-4"><i class="fab fa-pagelines"></i>
                <h5>年資</h5>
              </div>
              <div class="col-sm-4"><i class="fas fa-cocktail"></i>
                <h5>地區</h5>
              </div>
            </div>
            <router-link to="./survey"><button class="btn btn-default">馬上測一測</button></router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="jumbotron">
    <div class="container">
      <h2></h2>
      <input class="form-control" placeholder="Email"/>
      <hr/>
      <button class="btn btn-default">聯絡我們</button>
    </div>
  </footer>
</div>
</template>

<script>
export default {
  name: 'index',

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/index.scss';
</style>
