<script setup lang="ts">
  import { reactive, ref } from 'vue'
  import { ContactForm } from '../types/contact';
  import { sendContactMessage } from '../services/api';

  const form = reactive<ContactForm>({
    name: '',
    email: '',
    message: '',
  })

  const loading = ref(false)
  const successMessage = ref('')
  const errorMessage = ref('')

  const submitForm = async(): Promise<void> => {
    loading.value = true
    successMessage.value = ''
    errorMessage.value = ''

    try {
      const response = await sendContactMessage(form)
      successMessage.value = response.message
      form.name = ''
      form.email = ''
      form.message = ''
    } catch (error) {
      errorMessage.value = 'Ocurrió un error al enviar el mensaje. Por favor, inténtalo de nuevo.'
    } finally {
      loading.value = false
    }
  }

</script>

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
          @submit.prevent = "submitForm"
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
              v-model="form.name"
              type="text"
              placeholder="Tu nombre"
              required
              maxlength="100"
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
              v-model="form.email"
              type="email"
              placeholder="tu@email.com"
              required
              maxlength="255"
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
              v-model="form.message"
              rows="4"
              placeholder="¿Qué necesitas desarrollar?"
              required
              maxlength="5000"
              class="mt-3 w-full resize-none border-b
                     border-white/10 bg-transparent px-0
                     py-3 text-white outline-none transition
                     placeholder:text-gray-700
                     focus:border-cyan-400"
            />
          </div>
          <!-- Success Message -->
           <p
            v-if="successMessage"
            class="text-sm text-cyan-400"
          >
            {{ successMessage }}
          </p>

          <!-- Error Message -->
          <p
            v-if="errorMessage"
            class="text-sm text-cyan-400"
          >
            {{ errorMessage }}
          </p>

          <button
            type="submit"
            :disabled="loading"
            class="group inline-flex items-center gap-3
                   rounded-full bg-cyan-400 px-7 py-3.5
                   font-semibold text-black transition
                   hover:bg-cyan-300
                   disabled:cursor-not-allowed
                   disabled:opacity-50"
          >
            {{ loading ? 'Enviando...' : 'Enviar mensaje' }}

            <span
              v-if="!loading"
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