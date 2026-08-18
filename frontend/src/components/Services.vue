<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { useReveal } from '../composables/useReveal'
import { Service } from '../types/service'
import { getServices } from '../services/api';

useReveal()

const services = ref<Service[]>([])
const loading = ref(true)
const error = ref<string | null>(null)

onMounted(async () => {
  try {
    services.value = await getServices()
  } catch (err) {
    error.value = 'No se pudieron cargar los servicios.'
    console.error(err)
  } finally {
    loading.value = false
  }
})
</script>

<template>
  <section
    id="servicios"
    class="reveal bg-zinc-950 px-6 py-32"
  >
    <div class="mx-auto max-w-7xl">

      <!-- Header -->
      <div
        class="flex flex-col justify-between gap-8
               md:flex-row md:items-end"
      >
        <div>
          <p
            class="text-sm uppercase tracking-[0.3em]
                   text-cyan-400"
          >
            Servicios
          </p>

          <h2
            class="mt-4 max-w-3xl text-4xl font-bold
                   tracking-tight md:text-6xl"
          >
            Tecnología que
            <span class="text-gray-500">
              impulsa negocios.
            </span>
          </h2>
        </div>

        <p class="max-w-sm text-sm leading-relaxed text-gray-500">
          Soluciones digitales pensadas para resolver
          problemas reales.
        </p>
      </div>

      <!-- Cards -->
      <div class="mt-20 grid border-t border-white/10 md:grid-cols-3">

        <article
          v-for="service in services"
          :key="service.number"
          class="group relative border-b border-white/10
                 p-8 md:border-r md:last:border-r-0
                 md:border-b-0"
        >

          <!-- Número -->
          <span
            class="text-sm text-gray-600 transition
                   group-hover:text-cyan-400"
          >
            {{ service.number }}
          </span>

          <!-- Título -->
          <h3
            class="mt-20 text-3xl font-semibold
                   transition group-hover:translate-x-2
                   md:text-4xl"
          >
            {{ service.title }}
          </h3>

          <!-- Descripción -->
          <p
            class="mt-5 max-w-xs text-sm leading-relaxed
                   text-gray-500"
          >
            {{ service.description }}
          </p>

          <!-- Arrow -->
          <div
            class="mt-10 text-2xl text-gray-600
                   transition duration-300
                   group-hover:translate-x-2
                   group-hover:text-cyan-400"
          >
            ↗
          </div>

        </article>

      </div>

    </div>
  </section>
</template>