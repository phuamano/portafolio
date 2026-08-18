# Corregir permisos de archivos creados por Docker
fix-permissions:
	@echo "🔧 Corrigiendo permisos del proyecto..."
	sudo chown -R $$(whoami):$$(whoami) backend
	find backend -type d \
		-not -path "backend/storage*" \
		-not -path "backend/bootstrap/cache*" \
		-exec chmod 775 {} +
	find backend -type f -exec chmod 664 {} +
	find backend -name "*.sh" -exec chmod +x {} +
	sudo chown -R www-data:www-data backend/storage backend/bootstrap/cache
	sudo chmod -R 775 backend/storage backend/bootstrap/cache
	@echo "✅ Permisos corregidos."

status:
	docker compose exec app php artisan migrate:status

seed:
	docker compose exec app php artisan db:seed

phpstan:
	docker compose exec app php vendor/bin/phpstan analyse --memory-limit=512M

.PHONY: migrate model controller migration seeder cache-clear

# Comando básico para ejecutar migraciones
migrate:
	docker compose exec app php artisan migrate

# Comando dinámico para Modelos (Ej: make model Project)
model:
	docker compose exec app php artisan make:model $(filter-out $@,$(MAKECMDGOALS))

# Comando dinámico para Controladores (Ej: make controller ProjectController)
controller:
	docker compose exec app php artisan make:controller $(filter-out $@,$(MAKECMDGOALS))

# Comando dinámico para Migraciones (Ej: make migration create_projects_table)
migration:
	docker compose exec app php artisan make:migration $(filter-out $@,$(MAKECMDGOALS))

# Comando dinámico para Seeders (Ej: make seeder ProjectSeeder)
seeder:
	docker compose exec app php artisan make:seeder $(filter-out $@,$(MAKECMDGOALS))

request:
	docker compose exec app php artisan make:request $(filter-out $@,$(MAKECMDGOALS))

test:
	docker compose exec app php artisan make:test $(filter-out $@,$(MAKECMDGOALS))

# Atajo útil para limpiar la caché de Laravel rápidamente
cache-clear:
	docker compose exec app php artisan cache:clear
	docker compose exec app php artisan config:clear
	docker compose exec app php artisan route:clear

clear:
	docker compose exec app php artisan optimize:clear

# Regla mágica para ignorar los argumentos dinámicos y evitar errores de Make
%:
	@:

