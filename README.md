# artisan-of-missing-vendor 🧙‍♂️

This is a small Laravel project I put together on my own, mostly to actually understand what happens between typing a URL and seeing something on the screen, the whole Route → Controller → View flow. It's also basically a warm-up sandbox before tackling the real assignment. The name comes from something that actually happened to me: `vendor/autoload.php` kept going missing every time I thought I was done setting things up, so here we are.

Built with Laravel (PHP 8.5) on the backend, Inertia.js + React for the frontend, some custom CSS, and SQLite as the database, nothing fancy, just enough to get things running.

## Getting it running locally

Clone the repo, then install the usual suspects:

```bash
composer install
pnpm install
```

Copy the environment file and generate a key:

```bash
cp .env.example .env
php artisan key:generate
```

Set up the database:

```bash
touch database/database.sqlite
php artisan migrate
```

Then open two terminals and run these side by side:

```bash
php artisan serve
```

```bash
pnpm dev
```

Once both are running, the app should be live at `http://127.0.0.1:8000`.

## What's actually in here

The homepage lives at `/`, with an About section you can jump to at `/#tentang`. There's a `/team` page for the project/members section, and the main feature, a working calculator, sits at `/kalkulator`, where you can punch in numbers through a form. Under the hood it hits a dynamic route, `/hitung/{angka1}/{angka2}/{operasi}` (e.g. `/hitung/10/5/kali`), which is what actually does the math.

## A note to future me

I almost lost an entire afternoon to environment issues that had nothing to do with actual coding, PHP wasn't installed, then `composer install` failed because `ext-dom` and `ext-xml` were missing, then migrations failed because `pdo_sqlite` wasn't there either, then Vite complained about a missing manifest because I forgot to run the dev server, and at one point the whole thing just refused to connect because I'd accidentally closed the terminal running `php artisan serve`. None of it was hard, it just took forever to figure out one error at a time. Lesson learned: don't close the terminal that's keeping your server alive.

## License

Personal practice project - feel free to use it if it's helpful for learning.
