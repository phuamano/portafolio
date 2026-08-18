import type { Project } from '../types/project'

const API_URL = 'http://localhost:8000/api'

interface ApiResponse<T> {
  data: T
  message?: string
}

async function request<T>(
  endpoint: string,
  options?: RequestInit
): Promise<T> {
  const response = await fetch(`${API_URL}${endpoint}`, {
    ...options,
    headers: {
      'Content-Type': 'application/json',
      Accept: 'application/json',
      ...options?.headers,
    },
  })

  if (!response.ok) {
    throw new Error(`API Error: ${response.status}`)
  }

  return response.json()
}

export interface HelloResponse {
  message: string
}

export function getHello(): Promise<HelloResponse> {
  return request<HelloResponse>('/hello')
}

export function getProjects(): Promise<Project[]> {
  return request<Project[]>('/projects')
}