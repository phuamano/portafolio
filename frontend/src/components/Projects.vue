<script setup>
import { useReveal } from '../composables/useReveal';
import { ref,computed } from 'vue';
import { projects } from '../data/projects';

useReveal()

const categories = ['All', 'E-commerce', 'Web Application', 'Software'];

const selectedCategory = ref('All');

const filteredProjects = computed(() => {
  if (selectedCategory.value === 'All') {
    return projects;
  }
  return projects.filter(project => project.category === selectedCategory.value);
});

</script>

<template>
  <section
    id="proyectos"
    class="reveal bg-black px-6 py-32"
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
            Proyectos
          </p>

          <h2
            class="mt-4 text-4xl font-bold tracking-tight
                   md:text-6xl"
          >
            Trabajo que
            <span class="text-gray-500">
              habla.
            </span>
          </h2>
        </div>

        <p class="max-w-xs text-sm text-gray-500">
          Una selección de proyectos desarrollados
          para diferentes necesidades.
        </p>
      </div>

      <!-- Projects -->
      <div class="mt-20 space-y-8">

        <div class="mt-12 flex flex-wrap gap-3">
          <button
            v-for="category in categories"
            :key="category"
            @click="selectedCategory = category"
            class="rounded-full border border-white/10 px-5 py-2 text-sm
                  transition hover:border-cyan-400 hover:text-cyan-400"
          >
            {{ category === 'All' ? 'Todos' : category }}
          </button>
        </div>

        <article
          v-for="project in filteredProjects"
          :key="project.id"
          class="group grid overflow-hidden rounded-3xl
                 border border-white/10 bg-zinc-950
                 md:grid-cols-2"
        >

          <!-- Image -->
          <div
            class="relative min-h-[300px] overflow-hidden
                   bg-zinc-900"
          >

            <img
              :src="project.image"
              :alt="project.title"
              class="absolute inset-0 h-full w-full
                     object-cover opacity-80
                     transition duration-700
                     group-hover:scale-105
                     group-hover:opacity-100"
            />

            <!-- Overlay -->
            <div
              class="absolute inset-0 bg-gradient-to-t
                     from-black/80 via-transparent to-transparent"
            />

            <span
              class="absolute bottom-6 left-6 text-5xl
                     font-bold text-white/20"
            >
              {{ project.number }}
            </span>
          </div>

          <!-- Content -->
          <div
            class="flex flex-col justify-between p-8
                   md:p-12"
          >

            <div>

              <span
                class="text-xs uppercase tracking-[0.25em]
                       text-cyan-400"
              >
                {{ project.category }}
              </span>

              <h3
                class="mt-4 text-3xl font-bold md:text-4xl"
              >
                {{ project.title }}
              </h3>

              <p
                class="mt-5 max-w-md text-gray-500"
              >
                {{ project.description }}
              </p>

              <!-- Technologies -->
              <div class="mt-8 flex flex-wrap gap-2">

                <span
                  v-for="technology in project.technologies"
                  :key="technology"
                  class="rounded-full border border-white/10
                         px-3 py-1 text-xs text-gray-400"
                >
                  {{ technology }}
                </span>

              </div>

            </div>

            <!-- Link -->
            <div class="mt-10">
              <a
                :href="project.url"
                class="inline-flex items-center gap-3
                       text-sm font-medium text-white
                       transition group-hover:text-cyan-400"
              >
                Ver proyecto

                <span
                  class="transition duration-300
                         group-hover:translate-x-1"
                >
                  →
                </span>
              </a>
            </div>

          </div>

        </article>

      </div>

    </div>
  </section>
</template>