<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>



* ## Steps to clone the project.
    ##### 1. Make sure you have installed Laravel dependency.
    ##### 2. Open your terminal or command prompt, then copy/paste the command given:
    * `git clone https://github.com/redhwan2019/laravel-blog.git`
    * `cd laravel-blog`
    * `composer install`
    ##### 3. Database Connection
    * Create new file at the root project and name it as `.env`
    * Copy content from `.env.example` and paste it into `.env`
    * Configure your database credential: `DB_DATABASE, DB_USERNAME, DB_PASSWORD`
    * Run migration `php artisan migrate`
    ##### 4. Generate Application Key
    * `php artisan key:generate`
    ##### 5. Serve your application
    * `php artisan serve`   

