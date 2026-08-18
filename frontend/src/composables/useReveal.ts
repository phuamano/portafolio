import { onMounted, onUnmounted } from 'vue'

export function useReveal(): void {
  let observer: IntersectionObserver | null = null

  onMounted(() => {
    observer = new IntersectionObserver(
      (entries: IntersectionObserverEntry[]) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible')
            observer?.unobserve(entry.target)
          }
        })
      },
      {
        threshold: 0.15,
      }
    )

    document
      .querySelectorAll<HTMLElement>('.reveal')
      .forEach((element) => {
        observer?.observe(element)
      })
  })

  onUnmounted(() => {
    observer?.disconnect()
  })
}