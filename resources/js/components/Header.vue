<template>
  <header>
    <div class="container header-wrapper">
      <h2 class="header-logo">Pocket Url</h2>
      <img class="hamburger" src="../../imgs/hamburger-menu.png" alt="hamburger-menu">
    </div>

  </header>
</template>

<script setup>
</script>

<style>

header {
  padding-block: 1rem;
}

.header-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.header-logo {
  color: transparent;
  background-image: var(--clr-primary-gradient);
  -webkit-background-clip: text;
  font-size: 35px;
}
</style>
