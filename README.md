<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel

CRUD Courses
<br>
Templates Blade

## Commands CLI.

### Run

-   php artisan serve

### Add Controllers

-   php artisan make:controller HomeController

### Migratons

-   php artisan migrate
-   php artisan migrate:rollback
-   php artisan make:migration create_courses_table
-   php artisan migrate:reset
-   php artisan migrate:fresh
-   php artisan migrate:fresh --seed

### Models

-   php artisan make:model Course
-   php artisan tinker

### Sedders

-   php artisan make:seeder CourseSeeder
-   php artisan make:factory CourseFactory

### Add lang es

-   composer require laravel-lang/common --dev
-   php artisan lang:add es
-   composer require --dev laravel-lang/common
-   composer require laravel-lang/publisher laravel-lang/lang laravel-lang/attributes --dev

### Validations

-   php artisan make:request StoreCourse

### Routes

-   php artisan route:list
