<template>
  <div id="app">
    <input type="checkbox" id="menu_control">
    <nav class="navbar fixed-top navbar-light">
      <div class="index" @click="toggle()"><router-link to="/" class="navbar-brand" href="#top"><font-awesome-icon icon="chart-line" /><span>薪之藍圖</span></router-link></div>
      <label for="menu_control" class="menu_btn"><font-awesome-icon icon="bars" /><i class="fas fa-bars"></i></label>
      <ul id="navbarNav">
        <li class="nav-item px-2" @click="toggle()"><router-link to="./construction" class="nav-link" href="#section_recommand">薪資排行
            <div id="line"></div></router-link></li>
        <li class="nav-item px-2" @click="toggle()"><router-link to="./inquiry" class="nav-link" href="#section_test">查詢系統
            <div id="line"></div></router-link></li>
        <li class="nav-item px-2" @click="toggle()"><router-link to="./construction" class="nav-link" href="#section_article">薪水試算
            <div id="line"> </div></router-link></li>
      </ul>
    </nav>
    <router-view/>
  </div>
</template>

<script>
export default {
  methods: {
    navbar () {
      window.addEventListener('scroll', function() {
        let navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
          navbar.classList.add('bg-light');
        } else {
          navbar.classList.remove('bg-light');
        }
      });
    },
    toggle () {
      document.querySelector("#menu_control").checked = false;
    }
  },
  mounted () {
    this.navbar();
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&family=ZCOOL+XiaoWei&display=swap');
html {
  height: 100%;
  width: 100%;
}
#app {
  font-family: 'Avenir', Microsoft JhengHei, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
#menu_control {
  display: none;
}
#menu_control:checked ~ nav {
  background-color: rgba(255, 255, 255, 0.8);
}
#menu_control:checked ~ nav #navbarNav {
  height: 120px;
  margin: 10px 0px;
}
.menu_btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 30px;
  height: 30px;
  margin: 0px;
  margin-right: 10px;
  font-size: 20px;
  color: #a84388;
  float: right;
  cursor: pointer;
}
#navbarNav {
  display: flex;
  flex-direction: column;
  margin: 0px;
  padding: 0px;
  list-style: none;
  position: relative;
  width: 100%;
  height: 0px;
  overflow: hidden;
}
.nav-item {
  display: flex;
  justify-content: center;
}
nav.navbar-expend {
  justify-content:space-between;
}
nav.navbar.fixed-top.navbar-light i {
  color: #a84388;
}
nav.navbar.fixed-top.navbar-light span {
  display: inline;
  color: #a84388;
  font-family: 'ZCOOL XiaoWei', 'Noto Serif TC';
  margin-left: 10px;
}
nav.navbar.fixed-top.navbar-light a {
  color: #632b2b;
  letter-spacing: 2px;
  padding: 8px;
}
nav.navbar.fixed-top.navbar-light a #line {
  width: 0px;
  height: 2px;
  background: #a84388;
  position: relative;
  top: -50%;
  left: 100%;
}
nav.navbar.fixed-top.navbar-light a:hover #line {
  width: 50px;
  height: 2px;
  background-color: #a84388;
}
@media screen and (min-width: 660px) {
  .menu_btn {
    display: none;
  }
  nav {
    background-color: transparent;
  }
  #navbarNav {
    overflow: visible;
    height: auto;
    width: auto;
    flex-direction: row;
  }
  nav.navbar.fixed-top.navbar-light a #line {
    top: 0px;
    left: 0px;
  }
  nav.navbar.fixed-top.navbar-light a:hover #line {
    width: 100%;
  }
}
</style>
