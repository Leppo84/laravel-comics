<template>
  <header class="bg white">
    <div class="container fx jc-between ai-center">
      <a href="#">
        <img id="logo-dc" src="../assets/img/dc-logo.png" alt="Logo DC Home">
      </a>
      <nav>
        <ul>
          <li v-for="(link, index) in links" :key="index" :class="link.current?'active':''">
            <a :href="link.url">
              link
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="jumbotron">
      <img src="../assets/img/jumbotron.jpg" alt="Awesome comics!">
    </div>
  </header>
</template>

