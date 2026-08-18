<script setup>
import { useReveal } from '../composables/useReveal'
useReveal()
const technologies = [
  { name: 'Laravel', type: 'Backend' },
  { name: 'Vue', type: 'Frontend' },
  { name: 'PHP', type: 'Backend' },
  { name: 'JavaScript', type: 'Frontend' },
  { name: 'PostgreSQL', type: 'Database' },
  { name: 'MySQL', type: 'Database' },
  { name: 'Docker', type: 'Infrastructure' },
  { name: 'Tailwind', type: 'Frontend' },
]
</script>

<template>
  <section
    id="tecnologias"
    class="reveal overflow-hidden bg-zinc-950 px-6 py-32"
  >
    <div class="mx-auto max-w-7xl">

      <!-- Header -->
      <div class="max-w-3xl">
        <p
          class="text-sm uppercase tracking-[0.3em] text-cyan-400"
        >
          Tech stack
        </p>

        <h2
          class="mt-4 text-4xl font-bold tracking-tight md:text-6xl"
        >
          Las herramientas detrás
          <span class="text-gray-500">
            de cada proyecto.
          </span>
        </h2>
      </div>

      <!-- Technologies -->
      <div class="mt-20 grid grid-cols-2 md:grid-cols-4">

        <div
          v-for="technology in technologies"
          :key="technology.name"
          class="group border-t border-white/10 p-6
                 transition duration-300
                 hover:bg-white/[0.03]"
        >
          <div class="flex items-start justify-between">
            <span
              class="text-xs text-gray-600
                     transition group-hover:text-cyan-400"
            >
              0{{ technologies.indexOf(technology) + 1 }}
            </span>

            <span
              class="text-[10px] uppercase tracking-widest
                     text-gray-700"
            >
              {{ technology.type }}
            </span>
          </div>

          <h3
            class="mt-12 text-xl font-medium text-gray-300
                   transition group-hover:text-white"
          >
            {{ technology.name }}
          </h3>
        </div>

      </div>

    </div>
  </section>
</template>