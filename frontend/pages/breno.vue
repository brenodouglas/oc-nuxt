<template>
  <section class="container">
    <img src="../assets/img/logo.png" alt="Nuxt.js Logo" class="logo" />
    <h1 class="title">
      This page is loaded from the {{ name }}
    </h1>
    <h2 class="info" v-if="name === 'client'">
      Please refresh the page
    </h2>

    <ul>
      <li v-for="category in data">
        {{category.id}} - {{category.name}}
      </li>
    </ul>

    <nuxt-link class="button" to="/">
      Home page
    </nuxt-link>
  </section>
</template>

<script>
export default {
  data ({ req }) {
    return { name: req ? 'server' : 'client' }
  },
  methods() {
      return {
          
      }
  }
  head () {
    return {
      title: `About Page (${this.name}-side)`
    }
  }
}
</script>

<style scoped>
.title
{
  margin-top: 50px;
}
.info
{
  font-weight: 300;
  color: #9aabb1;
  margin: 0;
  margin-top: 10px;
}
.button
{
  margin-top: 50px;
}
</style>
