up:
	docker-compose up -d
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
down:
	docker-compose down --remove-orphans
ps:
	docker-compose ps
logs:
	docker-compose logs
nginx:
	docker-compose exec nginx ash
php:
	docker-compose exec php bash
migrate:
	docker-compose exec php php artisan migrate
fresh:
	docker-compose exec php php artisan migrate:fresh --seed
seed:
	docker-compose exec php php artisan db:seed
dacapo:
	docker-compose exec php php artisan dacapo
rollback-test:
	docker-compose exec php php artisan migrate:fresh
	docker-compose exec php php artisan migrate:refresh
tinker:
	docker-compose exec php php artisan tinker
test:
	docker-compose exec php php artisan test
optimize:
	docker-compose exec php php artisan optimize
optimize-clear:
	docker-compose exec php php artisan optimize:clear
cache:
	docker-compose exec php composer dump-autoload -o
	@make optimize
	docker-compose exec php php artisan event:cache
	docker-compose exec php php artisan view:cache
cache-clear:
	docker-compose exec php composer clear-cache
	@make optimize-clear
	docker-compose exec php php artisan event:clear
npm:
	@make npm-install
npm-install:
	docker-compose exec nginx npm install
npm-dev:
	docker-compose exec nginx npm run dev
npm-watch:
	docker-compose exec nginx npm run watch
npm-watch-poll:
	docker-compose exec nginx npm run watch-poll
npm-hot:
	docker-compose exec nginx npm run hot
yarn:
	docker-compose exec nginx yarn
yarn-install:
	@make yarn
yarn-dev:
	docker-compose exec nginx yarn dev
yarn-watch:
	docker-compose exec nginx yarn watch
yarn-watch-poll:
	docker-compose exec nginx yarn watch-poll
yarn-hot:
	docker-compose exec nginx yarn hot
db:
	docker-compose exec db bash
sql:
	docker-compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
redis:
	docker-compose exec redis redis-cli
ide-helper:
	docker-compose exec php php artisan clear-compiled
	docker-compose exec php php artisan ide-helper:generate
	docker-compose exec php php artisan ide-helper:meta
	docker-compose exec php php artisan ide-helper:models --nowrite
