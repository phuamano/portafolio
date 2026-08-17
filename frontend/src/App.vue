<script setup>
  import Navbar from './components/Navbar.vue'
  import Hero from './components/Hero.vue'
  import Projects from './components/Projects.vue'
  import Services from './components/Services.vue'
  import Technologies from './components/Technologies.vue'
  import Footer from './components/Footer.vue'
  import Contact from './components/Contact.vue'
</script>

<template>
  <Navbar />

  <main>
    <Hero />

    <Services />

    <Projects />
    
    <Technologies />

    <Contact />

    <Footer />
  </main>
</template>