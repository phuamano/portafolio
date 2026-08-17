<template>
  <section
    class="relative flex min-h-screen items-center overflow-hidden
           bg-black pt-20"
  >
    <!-- Glow -->
    <div
      class="absolute -top-40 left-1/2 h-[500px] w-[500px]
             -translate-x-1/2 rounded-full bg-cyan-500/20
             blur-[120px]"
    />

    <div
      class="relative z-10 mx-auto w-full max-w-7xl px-6 py-20 lg:px-8"
    >
      <div class="max-w-4xl">

        <p
          class="mb-6 text-sm font-medium uppercase tracking-[0.35em]
                 text-cyan-400"
        >
          Desarrollo de software
        </p>

        <h1
          class="text-5xl font-bold leading-tight tracking-tight
                 sm:text-6xl lg:text-8xl"
        >
          Convertimos
          <br />

          <span class="text-gray-500">
            ideas
          </span>

          en

          <span class="text-cyan-400">
            software.
          </span>
        </h1>

        <p
          class="mt-8 max-w-2xl text-lg leading-relaxed text-gray-400
                 md:text-xl"
        >
          Diseñamos y desarrollamos aplicaciones web modernas
          para empresas que quieren crecer, automatizar procesos
          y llevar sus ideas al siguiente nivel.
        </p>

        <div class="mt-10 flex flex-wrap gap-4">

          <a
            href="#proyectos"
            class="rounded-full bg-cyan-400 px-7 py-3.5
                   font-semibold text-black transition
                   hover:bg-cyan-300 hover:shadow-lg
                   hover:shadow-cyan-500/20"
          >
            Ver proyectos
          </a>

          <a
            href="#contacto"
            class="rounded-full border border-white/15
                   px-7 py-3.5 font-semibold text-white
                   transition hover:border-white/30
                   hover:bg-white/5"
          >
            Hablemos →
          </a>

        </div>

      </div>

      <!-- Tech stack -->
      <div
        class="mt-24 flex flex-wrap items-center gap-x-8 gap-y-4
               border-t border-white/10 pt-6"
      >
        <span class="text-xs uppercase tracking-widest text-gray-600">
          Tecnologías
        </span>

        <span class="text-sm text-gray-500">Laravel</span>
        <span class="text-sm text-gray-500">Vue</span>
        <span class="text-sm text-gray-500">PHP</span>
        <span class="text-sm text-gray-500">Docker</span>
        <span class="text-sm text-gray-500">PostgreSQL</span>
      </div>

    </div>
  </section>
</template>