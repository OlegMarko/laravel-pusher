## Build app

### Step 1
- git clone `https://github.com/OlegMarko/laravel-pusher.git`
- `cd laravel-pusher`
- run command: `composer install`
- add permissions 777 to ./public ./storage ./bootstrap
- change `.env` file similar to `.env.example`
- run command: `php artisan migrate`
- run command: `php artisan serve`
- visit to [http://127.0.0.1:8000](http://127.0.0.1:8000)
