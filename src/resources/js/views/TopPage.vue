<template>
  <div id="top__page">
    <h1>Tra cứu thông tin tuyển sinh</h1>
    <img :src="'assets/Logo-GHTK.png'" alt="" />
    <div class="button">
      <ul>
        <li>
          <router-link :to="{ name: 'file-import' }" exact
            >Import Data</router-link
          >
        </li>
        <li>
          <router-link :to="{ name: 'result-search' }"
            >Search Student</router-link
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style coped>
#top__page {
  padding-top: 20px;
}

h1 {
  text-transform: uppercase;
  text-align: center;
}
img {
  display: block;
  border-radius: 30px;
  margin: 30px auto;
}

ul {
  padding: 0;
  list-style: none;
  margin: 0 auto;
}
li {
  display: inline-block;
  margin: 0 25px;
}

.button {
  margin: 0 auto;
  display: flex;
}

a {
  display: inline-block;
  color: black;
  background-color: white;
  padding: 8px 20px;
  text-decoration: none;
  font-size: 20px;
  border-radius: 25px;
  width: 200px;
  text-align: center;
  font-weight: bold;
}

.router-link-active {
  color: white;
  background-color: #3b904b;
}
</style>
