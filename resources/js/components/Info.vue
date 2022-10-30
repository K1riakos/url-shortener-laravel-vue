<template>
  <section class="info">
    <div class="container info-wrapper">
      <h2 class="info-title">How this system works:</h2>
      <div class="info-list">
        <div class="info-li"><img src="./../../../resources/imgs/dot.jpg" alt="dot"> enter the url you want to be
          shorted
        </div>
        <div class="info-li"><img src="./../../../resources/imgs/dot.jpg" alt="dot"> we create a unique identifier for
          your url
        </div>
        <div class="info-li"><img src="./../../../resources/imgs/dot.jpg" alt="dot">a shortened link is generated using
          your
          unique identifier
        </div>
        <div class="info-li"><img src="./../../../resources/imgs/dot.jpg" alt="dot">use your pocket link wherever you
          want :D
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>

</script>

<style>
.info {
  margin-block: 5.5rem;
}

.info-wrapper {
  background-color: var(--clr-light);
  border-radius: 4px;
  padding: 13px 20px;
  border-left: 4px solid #FFA99F;
  box-shadow: 0 4px 7px 1px rgba(0, 0, 0, 0.1);
}

.info-title {
  color: var(--clr-dark);
  font-size: 19px;
  margin-bottom: 0.7rem;
}

.info-list {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.info-li {
  color: var(--clr-dark);
  font-weight: bold;
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: left;
  gap: 8px;
}

</style>
