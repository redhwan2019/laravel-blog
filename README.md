<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


* ## Steps to clone the project.
    ##### 1. Make sure you have installed Laravel dependency.
    ##### 2. Open your terminal or command prompt, then copy/paste the command given:
    * `git clone https://github.com/ejulfaey/training-laravel-1.git`
    * `cd training-laravel-1`
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

