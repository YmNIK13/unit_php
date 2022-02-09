<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Unit test in PHP

[![Основное видео](http://img.youtube.com/vi/UjtTHMODB00/0.jpg)](https://www.youtube.com/watch?v=UjtTHMODB00&list=PLq8Zc4lHvs57YW_78jQ_Ll9ozqVIM_Tz1 "Основное видео")


## Создание миграции/моделм/контроллера

    php artisan make:model User\Reply -mr

## Создание фабрик наполняющих БД

    php artisan make:factory ThreadFactory

Метод фабрики `definition` должен вернуть массив полей на основании которых будет создана модель

Для генерации данных используется ["Faker"](https://fakerphp.github.io/), а сама модель должна иметь трейт `HasFactory`

## Запуск кода делает через tinker

    php artisan tinker

где по сути все что мы вводим в консоль выполняется в интерпретаторе PHP

К примеру эта команда создаст 50 моделей `Thread`

    App\Models\Thread::factory()->count(50)->create();

А такая просто выведет общее количество моделей
    
    App\Models\Thread::count()
