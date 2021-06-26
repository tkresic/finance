# Finance Microservice

One of the microservices that supports the [desktop cash register application in Flutter](https://github.com/tkresic/app). Docker image can be found [here](https://hub.docker.com/repository/docker/tkresic/shop).

## Set up the project

- Install dependencies with `composer install`
- Create the environmental file with `cp .env.example .env` and update `.env` with database credentials
- Run the migrations & the seeds`php artisan migrate:refresh --seed`

### Generates API documentation

`php artisan swagger-lume:generate`

### Run the app

`docker-compose up` or `php -S localhost:8001 -t public`
