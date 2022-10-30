<template>
  <form>
    <div class="input-group">
      <p class="input-label">Paste your link below</p>
      <input v-model="url" class="input-input" placeholder="https://pocketurl.com">
      <p v-if="error" class="flash-msg"> Required field! &#128070;</p>
    </div>
    <button @click.prevent="storeUrl" type="submit" class="btn-outline">Pocket-ize</button>
  </form>
</template>

<script setup>

import {ref} from "vue";
import axios from 'axios';

const url = ref('');
let error = ref(false);

const storeUrl = () => {
  if (url.value !== '') {
    axios({
      method: 'post',
      url: '/',
      data: {
        url: url.value
      }
    }).then(res => {
      error.value = false;
      url.value = res.data;
    })
      .catch(err => console.log(err.response.data));
  } else {
    error.value = true;
  }
};
</script>

<style>
.flash-msg {
  margin-top: .5rem;
  font-weight: bold;
}

.input-group {
  margin-top: 4.2rem;
}

.input-label {
  font-size: 20px;
  font-weight: 700;
  position: relative;
  left: 23px;
}

.input-label::before {
  content: "";
  position: absolute;
  left: -20px;
  width: 12px;
  height: 8px;
  top: 50%;
  transform: translateY(-50%);
  background-image: var(--clr-primary-gradient);
}

.input-input {
  color: rgba(0, 0, 0, 0.75);
  margin-top: 1.2rem;
  width: 100%;
  font-size: 20px;
  position: relative;
  padding: 8px 15px;
  outline: none;
  letter-spacing: 1px;
  font-weight: 700;
  border-radius: 4px;
  box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.1);
  border-image-source: var(--clr-primary-gradient);
  border-width: 2.5pt;
  border-image-slice: 1;
}


.btn-outline {
  margin-top: 2.5rem;
  float: right;
  position: relative;
  font-size: 20px;
  font-weight: 700;
  color: transparent;
  -webkit-background-clip: text;
  cursor: pointer;
  background-image: var(--clr-primary-gradient);
  border-image-source: var(--clr-primary-gradient);
  border-width: 1.5pt;
  border-image-slice: 1;
  padding: 8px 15px;

  transition: all .15s ease-in;
  background-color: transparent;
  box-shadow: 0 4px 7px 1px rgba(0, 0, 0, 0.1);

}

.btn-outline:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 7px 1px rgba(0, 0, 0, 0.1);
}

.btn-outline:active {
  transform: translateY(2px);
}
</style>
