<template>
  <header
    class="fixed top-0 right-0 left-0 z-50 border-b border-white/10
           bg-black/70 backdrop-blur-xl"
  >
    <nav
      class="mx-auto flex max-w-7xl items-center justify-between
             px-6 py-4 lg:px-8"
    >
      <!-- Logo -->
      <a href="#" class="text-xl font-bold tracking-tight">
        PH<span class="text-cyan-400">.</span>
      </a>

      <!-- Desktop -->
      <div class="hidden items-center gap-8 md:flex">
        <a
          href="#servicios"
          class="text-sm text-gray-400 transition hover:text-white"
        >
          Servicios
        </a>

        <a
          href="#proyectos"
          class="text-sm text-gray-400 transition hover:text-white"
        >
          Proyectos
        </a>

        <a
          href="#tecnologias"
          class="text-sm text-gray-400 transition hover:text-white"
        >
          Tecnologías
        </a>

        <a
          href="#contacto"
          class="rounded-full bg-white px-5 py-2 text-sm
                 font-semibold text-black transition hover:bg-cyan-400"
        >
          Contacto
        </a>
      </div>

      <!-- Mobile -->
      <button
        class="text-gray-300 md:hidden"
        aria-label="Abrir menú"
      >
        ☰
      </button>
    </nav>
  </header>
</template>