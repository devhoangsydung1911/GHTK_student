setup: 
	- UID=$(id -u) GID=$(id -g) && docker-compose build && docker-compose up -d
	- docker-compose run npm run dev 
	- docker-compose run npm run watch
run:	
	- docker-compose run php php artisan migrate
