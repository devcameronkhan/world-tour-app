# FlightHub

***
FlightHub is an online website portal to build and navigate trips for a single passenger using criteria such as
departure locations, departure dates and arrival locations.
***
In order to setup the project follow the steps below

## 1. Copy .env.example and rename it to .env and set the database configuration
***
## 2. Install Composer

```bash
composer install
```
## 3. Run The Migration and seeder

```bash
php artisan migrate --seed
```
This will add the user , airline and airport information. Now add the Flights information from the backend by signing-in with the below credentials.

## 4. Credentials

username: admin@gmail.com
password: 12345678

## 5. Serve The Project

```bash
php artisan serve
```

Thats It . Project is up and running
