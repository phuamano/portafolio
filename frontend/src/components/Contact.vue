<template>
  <section
    id="contacto"
    class="relative overflow-hidden bg-zinc-950
           px-6 py-32"
  >
    <!-- Glow -->
    <div
      class="pointer-events-none absolute -right-40 top-1/2
             h-[500px] w-[500px] -translate-y-1/2
             rounded-full bg-cyan-500/10 blur-[120px]"
    />

    <div class="relative mx-auto max-w-7xl">

      <!-- Header -->
      <div class="max-w-3xl">

        <p
          class="text-sm uppercase tracking-[0.3em]
                 text-cyan-400"
        >
          Contacto
        </p>

        <h2
          class="mt-4 text-4xl font-bold tracking-tight
                 md:text-6xl"
        >
          Cuéntame sobre
          <span class="text-gray-500">
            tu proyecto.
          </span>
        </h2>

        <p
          class="mt-6 max-w-xl text-gray-500"
        >
          ¿Tienes una idea, un negocio que quieres digitalizar
          o un sistema que necesitas desarrollar?
        </p>

      </div>

      <!-- Contact -->
      <div class="mt-16 grid gap-12 md:grid-cols-2">

        <!-- Information -->
        <div class="flex flex-col justify-between">

          <div class="space-y-6">

            <a
              href="mailto:hola@tudominio.com"
              class="group block border-b border-white/10
                     pb-6"
            >
              <span class="text-xs uppercase tracking-widest text-gray-600">
                Email
              </span>

              <div
                class="mt-2 text-xl text-gray-300
                       transition group-hover:text-cyan-400"
              >
                hola@tudominio.com
              </div>
            </a>

            <a
              href="#"
              class="group block border-b border-white/10
                     pb-6"
            >
              <span class="text-xs uppercase tracking-widest text-gray-600">
                WhatsApp
              </span>

              <div
                class="mt-2 text-xl text-gray-300
                       transition group-hover:text-cyan-400"
              >
                +51 XXX XXX XXX
              </div>
            </a>

          </div>

        </div>

        <!-- Form -->
        <form
          class="space-y-6"
          @submit.prevent
        >

          <div>
            <label
              for="name"
              class="text-xs uppercase tracking-widest
                     text-gray-600"
            >
              Nombre
            </label>

            <input
              id="name"
              type="text"
              placeholder="Tu nombre"
              class="mt-3 w-full border-b border-white/10
                     bg-transparent px-0 py-3 text-white
                     outline-none transition
                     placeholder:text-gray-700
                     focus:border-cyan-400"
            />
          </div>

          <div>
            <label
              for="email"
              class="text-xs uppercase tracking-widest
                     text-gray-600"
            >
              Email
            </label>

            <input
              id="email"
              type="email"
              placeholder="tu@email.com"
              class="mt-3 w-full border-b border-white/10
                     bg-transparent px-0 py-3 text-white
                     outline-none transition
                     placeholder:text-gray-700
                     focus:border-cyan-400"
            />
          </div>

          <div>
            <label
              for="message"
              class="text-xs uppercase tracking-widest
                     text-gray-600"
            >
              Cuéntame tu idea
            </label>

            <textarea
              id="message"
              rows="4"
              placeholder="¿Qué necesitas desarrollar?"
              class="mt-3 w-full resize-none border-b
                     border-white/10 bg-transparent px-0
                     py-3 text-white outline-none transition
                     placeholder:text-gray-700
                     focus:border-cyan-400"
            />
          </div>

          <button
            type="submit"
            class="group inline-flex items-center gap-3
                   rounded-full bg-cyan-400 px-7 py-3.5
                   font-semibold text-black transition
                   hover:bg-cyan-300"
          >
            Enviar mensaje

            <span
              class="transition group-hover:translate-x-1"
            >
              →
            </span>
          </button>

        </form>

      </div>

    </div>
  </section>
</template>