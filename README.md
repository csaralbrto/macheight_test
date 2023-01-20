<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
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

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## About the project

The project is a test done for Mach Eight and consists of writing a function that finds pairs of integers in a list that sum to a given value sum up to a given value. The function will take as input the list of numbers as well as the target sum.
as well as the target sum.

### Prerequisites 📋

_Before running the project, remember that in the public directory there is a file called_ 
```
test_macheight.txt 
```
_which is the file that is consumed to run the service._

_Keep in mind that the file consists of 2 lines, the first line is for the list of integers to test and the second line is the value of the target sum._


## Executing the project ⚙️

_To execute the project, go to the root of the project and execute the command:_

```
php artisan serve
```
_And automatically in console you can see that it is running on port:_ 

```
http://127.0.0.1:8000/
```

_of your localhost, once it is executed you must add the following path for the method to be executed:_

```
http://127.0.0.1:8000/showPairs
```


## Executing tests 🔩

_Simply execute the following command to run the created unit tests:_

```
vendor/bin/phpunit --filter test_example tests/Unit/MainTest.php
```

_If you want to make adjustments to the unit test you can go to the location of the file and edit it as desired_


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
