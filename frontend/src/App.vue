<script setup lang="ts">
  import { onMounted } from 'vue'
  import Navbar from './components/Navbar.vue'
  import Hero from './components/Hero.vue'
  import Projects from './components/Projects.vue'
  import Services from './components/Services.vue'
  import Technologies from './components/Technologies.vue'
  import Footer from './components/Footer.vue'
  import Contact from './components/Contact.vue'
  import { getHello } from './services/api'

  onMounted(async () => {
    try {
      const response = await getHello()
      console.log('Respuesta de Laravel:', response)
    } catch (error) {
      console.error('Error comunicacion con Laravel:', error)
    }
  })
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