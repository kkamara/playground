docker-setup:
	docker-compose build # let's build our services
	docker-compose up -d # get services running

backend-install:
	@docker exec co-app composer i

backend-setup:
	make backend-install
	@docker exec co-app php artisan key:generate
	@docker exec co-app php artisan migrate

make backend-seed:
	@docker exec co-app php artisan db:seed

clean-js-dep:
	@docker exec co-app bash -c "\
		rm -rf node_modules;\
		rm packagco-lock.json;\
		npm cache clean --force"

install-js-dep:
	make clean-js-dep
	@docker exec co-app npm i
	@docker exec co-app npm run dev

dev:
	make docker-setup
	sleep 30
	make backend-setup
	make backend-seed
	make install-js-dep

watch:
	@docker exec co-app npm run watch