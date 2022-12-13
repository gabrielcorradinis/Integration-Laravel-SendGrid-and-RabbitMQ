install:
	@docker exec -u 1000 email_challenge composer install
	@docker exec email_challenge php artisan key:generate

dump:
	@docker exec -u 1000 email_challenge composer dumpautoload

up:
	@docker-compose -f ../docker/docker-compose.yml -p cont up -d

down:
	@docker-compose -f ../docker/docker-compose.yml -p cont down

restart:
	@docker-compose -f ../docker/docker-compose.yml -p cont restart

reset:
	@docker-compose -f ../docker/docker-compose.yml -p cont down -v
	@docker-compose -f ../docker/docker-compose.yml -p cont up --build -d

permissions:
	@docker exec email_challenge chown -cR 1000:33 ./bootstrap/cache/ ./storage/
	@docker exec email_challenge chmod -cR 775 ./bootstrap/cache/ ./storage/

clear:
	@docker exec email_challenge rm ./bootstrap/cache/*.php
	@docker exec email_challenge php artisan optimize:clear

migrate:
	@docker exec -t email_challenge php artisan migrate:refresh --seed

php:
	@docker exec -it -u 1000 email_challenge bash

admin:
	@docker exec -it email_challenge bash

tinker:
	@docker exec -it email_challenge bash -c "while true; do php artisan tinker; done"
