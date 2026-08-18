<script setup>
import { ref } from 'vue'

const isMenuOpen = ref(false)

const closeMenu = () => {
  isMenuOpen.value = false
}
</script>

<template>
  <header
    class="fixed top-0 right-0 left-0 z-50
           border-b border-white/10 bg-black/70
           backdrop-blur-xl"
  >
    <nav
      class="mx-auto flex max-w-7xl items-center
             justify-between px-6 py-4 lg:px-8"
    >

      <!-- Logo -->
      <a
        href="#"
        class="text-xl font-bold tracking-tight"
        @click="closeMenu"
      >
        PH<span class="text-cyan-400">.</span>
      </a>

      <!-- Desktop -->
      <div class="hidden items-center gap-8 md:flex">

        <a
          href="#servicios"
          class="text-sm text-gray-400 transition
                 hover:text-white"
        >
          Servicios
        </a>

        <a
          href="#proyectos"
          class="text-sm text-gray-400 transition
                 hover:text-white"
        >
          Proyectos
        </a>

        <a
          href="#tecnologias"
          class="text-sm text-gray-400 transition
                 hover:text-white"
        >
          Tecnologías
        </a>

        <a
          href="#contacto"
          class="rounded-full bg-white px-5 py-2
                 text-sm font-semibold text-black
                 transition hover:bg-cyan-400"
        >
          Contacto
        </a>

      </div>

      <!-- Mobile button -->
      <button
        type="button"
        class="relative z-50 flex h-10 w-10
               items-center justify-center
               text-gray-300 md:hidden"
        aria-label="Abrir menú"
        :aria-expanded="isMenuOpen"
        @click="isMenuOpen = !isMenuOpen"
      >
        <span class="text-2xl">
          {{ isMenuOpen ? '×' : '☰' }}
        </span>
      </button>

    </nav>

    <!-- Mobile menu -->
    <Transition
      enter-active-class="transition duration-300 ease-out"
      enter-from-class="opacity-0 -translate-y-4"
      enter-to-class="opacity-100 translate-y-0"
      leave-active-class="transition duration-200 ease-in"
      leave-from-class="opacity-100 translate-y-0"
      leave-to-class="opacity-0 -translate-y-4"
    >
      <div
        v-if="isMenuOpen"
        class="border-t border-white/10
               bg-black/95 px-6 py-8 md:hidden"
      >

        <div class="flex flex-col gap-6">

          <a
            href="#servicios"
            class="text-lg text-gray-300
                   transition hover:text-cyan-400"
            @click="closeMenu"
          >
            Servicios
          </a>

          <a
            href="#proyectos"
            class="text-lg text-gray-300
                   transition hover:text-cyan-400"
            @click="closeMenu"
          >
            Proyectos
          </a>

          <a
            href="#tecnologias"
            class="text-lg text-gray-300
                   transition hover:text-cyan-400"
            @click="closeMenu"
          >
            Tecnologías
          </a>

          <a
            href="#contacto"
            class="mt-2 inline-flex w-fit rounded-full
                   bg-cyan-400 px-6 py-3 font-semibold
                   text-black"
            @click="closeMenu"
          >
            Hablemos →
          </a>

        </div>

      </div>
    </Transition>

  </header>
</template>