function Invoke-DockerSetup {
	docker-compose build
	docker-compose up -d
}

function Invoke-BackendInstall {
	docker exec npt-app composer install
}

function Invoke-BackendSetup {
	make backend-install
	docker exec npt-app php artisan migrate
	docker exec npt-app php artisan key:generate
}

function Invoke-FrontendInstall {
	docker exec npt-app npm install
}

function Invoke-FrontendSetup {
	docker exec npt-app npm run dev
}

function Invoke-Dev {
	Invoke-DockerSetup
	Start-Sleep 30
	Invoke-BackendSetup
	Invoke-FrontendInstall
	Invoke-FrontendSetup
}
