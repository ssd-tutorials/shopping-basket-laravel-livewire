# Shopping Basket with Laravel Livewire

Exercise files for 'Shopping Basket with Laravel Livewire' course.

## Installation

For this exercise we are going to use sqlite database, but feel free to use your preferred database system.

```bash
git clone git@github.com:ssd-tutorials/shopping-basket-laravel-livewire.git

cd shopping-basket-laravel-livewire

composer install

cp .env.example .env
php artisan key:generate

touch database/database.sqlite
php artisan migrate --seed

npm install
npm run dev
```

You can now open your project in the browser.
