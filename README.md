# Laravel Echo Server - Example

This is a laravel-echo-server usage example on Laravel Todo List project. Implementing [Todolist-Vue-Laravel-Pusher](https://pusher.com/tutorials/todo-vue-laravel) tutorial with [Laravel Echo Server](https://github.com/tlaverdure/laravel-echo-server) package.

![Laravel Echo Server Project Example](public/screenshots/todo-list-01.jpg)

## How to use

> This requirements and installation steps are working on Ubuntu 16.04 or Linux Mint 18.3.

### Preparations

To make this repo works as expected, we are need this requirements installed:

1. Laravel Valet (I use [Valet Linux](https://github.com/cpriego/valet-linux))
2. [Laravel Echo Server](https://github.com/tlaverdure/laravel-echo-server)
3. Redis Server (`sudo apt install redis-server`)

### Installation Steps

1. Clone this repo. `$ git clone git@github.com:nafiesl/laravel-echo-server-example.git`
2. `$ cd laravel-echo-server-example`
3. `$ composer install`
4. `$ cp .env.example .env`
5. Set `BROADCAST_DRIVER=redis` and **database config** on `.env`
6. `$ php artisan key:generate`
7. `$ php artisan migrate`
8. `$ valet link`
9. `$ valet secure`
10. `$ valet links` See this site has `X` on SSL column.
11. `$ cp laravel-echo-server.json-example laravel-echo-server.json`
12. Update your `laravel-echo-server.json` file:
    - Set "authHost": "https://laravel-echo-server-example.test",
    - Set "sslCertPath": "/home/yourusername/.valet/Certificates/laravel-echo-server-example.test.crt",
    - Set "sslKeyPath": "/home/yourusername/.valet/Certificates/laravel-echo-server-example.test.key",
13. `$ laravel-echo-server start`
14. Open `https://laravel-echo-server-example.test` with separated browser window.
15. Fill the form to add new task, or delete the existing task, we should see both task list got same reaction on user actions.

## License

Please use and re-use however you want.
