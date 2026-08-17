<template>
  <footer
    class="border-t border-white/10 bg-black px-6 py-16"
  >
    <div class="mx-auto max-w-7xl">

      <!-- CTA -->
      <div
        class="flex flex-col justify-between gap-10
               md:flex-row md:items-end"
      >
        <div>
          <p
            class="text-sm uppercase tracking-[0.3em]
                   text-cyan-400"
          >
            ¿Tienes un proyecto?
          </p>

          <h2
            class="mt-4 max-w-3xl text-4xl font-bold
                   tracking-tight md:text-6xl"
          >
            Hagamos algo
            <span class="text-gray-500">
              increíble.
            </span>
          </h2>
        </div>

        <a
          href="mailto:hola@tudominio.com"
          class="group inline-flex items-center gap-3
                 text-lg font-medium"
        >
          Hablemos

          <span
            class="transition duration-300
                   group-hover:translate-x-2
                   group-hover:text-cyan-400"
          >
            →
          </span>
        </a>
      </div>

      <!-- Bottom -->
      <div
        class="mt-24 flex flex-col justify-between gap-6
               border-t border-white/10 pt-6
               text-sm text-gray-600
               md:flex-row"
      >

        <p>
          © {{ new Date().getFullYear() }} PH.
          Todos los derechos reservados.
        </p>

        <div class="flex gap-6">
          <a
            href="#"
            class="transition hover:text-white"
          >
            GitHub
          </a>

          <a
            href="#"
            class="transition hover:text-white"
          >
            LinkedIn
          </a>

          <a
            href="#"
            class="transition hover:text-white"
          >
            WhatsApp
          </a>
        </div>

      </div>

    </div>
  </footer>
</template>