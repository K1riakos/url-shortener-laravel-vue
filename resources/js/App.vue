<template>
  <Header/>
  <Hero/>
  <Info/>
  <Signature/>
</template>

<script setup>

import Header from './components/Header.vue';
import Hero from './components/Hero.vue';
import Info from './components/Info.vue';
import Signature from './components/Signature.vue';
</script>

<style>
:root {
  --clr-light: #FEFEFF;
  --clr-lightGrey: #ACB3B8;
  --clr-dark: #0F131D;
  --clr-primary-gradient: linear-gradient(250.95deg, #FFE29F -3.14%, #FFA99F 53.21%, #FF719A 94.1%);
}


#app {
  max-width: 460px;
  margin-inline: auto;
  padding-inline: 10px;
}

body {
  background-image: linear-gradient(190.04deg, #141B28 6.92%, #1B2842 38.19%, #1B2842 76.8%, #141B28 100.74%);
  background-repeat: no-repeat;
  background-size: 100% 100%;
  min-height: 100vh;
  overflow-x: hidden;
}

.container {
  max-width: 420px;
  margin-inline: auto;
  position: relative;
}

</style>
