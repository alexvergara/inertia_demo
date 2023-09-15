<template>
    <h1 class="text-4xl font-bold">Hello, World!</h1>

    <Nav />

    <!-- <p>In this series, we will use the following frameworks:</p>

  <ul>
    <li v-for="framework in frameworks" v-text="framework"></li>
  </ul> -->
</template>

<script>
import Nav from "../Shared/Nav.vue";

export default {
    components: { Nav },
    /* props: {
    name: String,
    frameworks: Array
  }, */
};
</script>
