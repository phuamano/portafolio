export interface Project {
  id: number
  number: string | null
  title: string
  category: string | null
  description: string
  image: string
  technologies: string[]
  url: string | null
  github_url: string | null
  featured: boolean
  created_at: string
  updated_at: string
}