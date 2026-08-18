import { ContactForm, ContactResponse } from '../types/contact'
import type { Project } from '../types/project'
import { Service } from '../types/service'
import { Technology } from '../types/technology'

const API_URL = 'http://localhost:8000/api'

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

export function getServices(): Promise<Service[]> {
  return request<Service[]>('/services')
}

export function getTechnologies(): Promise<Technology[]> {
  return request<Technology[]>('/technologies')
}

export function sendContactMessage(data: ContactForm): Promise<ContactResponse> {
  return request<ContactResponse>('/contact', {
    method: 'POST',
    body: JSON.stringify(data),
  })
}