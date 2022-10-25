<template>
  <MainContainer msg="Welcome to Your Vue.js App"/>
</template>

<script>
import MainContainer from './components/MainContainer.vue'

export default {
  name: 'App',
  components: {
    MainContainer
  }
}
</script>

<style>
body {
    background-image: url('../background-image.jpg');
    background-size: cover;
}

.container {
    color: white;
    background: #3c3b3b;
    text-align: center;
    border-radius: 1rem;
}

.px {
    padding-left: 1rem; /* 16px */
    padding-right: 1rem; /* 16px */
}

.py {
    padding-top: 1rem; /* 16px */
    padding-bottom: 1rem; /* 16px */
}
</style>
