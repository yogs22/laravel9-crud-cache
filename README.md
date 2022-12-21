# Laravel 9 CRUD x CACHE
I create CRUD Article feature who have Admin Panel & API, also using redis cache to load data for better performance.

## Requirement
- PHP >= 8.1
- Node >= 16
- Composer
- NPM / Yarn
- Redis
- Apache / Nginx

## Installation

``` bash
# install composer dependencies
$ composer install

# install node_modules dependencies
$ npm install # Or yarn install

# compile assets
$ npm run build

# run migration
$ php artisan migrate

# run seeder
$ php artisan db:seed

# run manually
$ php artisan serve
```

## Login Credential
```
Username: admin@admin.com
Password: password
```

## Dotenv Configuration
### Database Configuration
Please make a fresh database and edit this configuration in .env file. Make sure the database credential is correct
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

### Redis Configuration
Run redis during this application running. Don't forget to set this configuration based on your redis configuration
- REDIS_CLIENT
- REDIS_HOST
- REDIS_PASSWORD
- REDIS_PORT
