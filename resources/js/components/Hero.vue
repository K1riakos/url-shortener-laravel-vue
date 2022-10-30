<template>
  <section class="hero">
    <div class="container hero-wrapper">
      <h1 class="hero-title">Create your <br> <span class="underlined">Pocket Link</span> <br> now !</h1>
      <Form/>
    </div>
  </section>
</template>

<script setup>
import Form from './Form.vue';

</script>

<style>

.hero {
  padding-block: 3rem;
}

.hero-title {
  font-size: 48px;
  line-height: 1.3;
}

.underlined {
  position: relative;
}

.underlined::before {
  content: "";
  position: absolute;
  top: 90%;
  width: 100%;
  left: 0;
  height: 4px;
  background-image: var(--clr-primary-gradient);
  border-radius: 0 4px 0 4px;
}
</style>
