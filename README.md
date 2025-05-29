<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" width="100">
</p>

# Laravel API Project

This is a Laravel-based API project.

## Requirements

- PHP ^8.1
- Composer
- Node.js & npm (for frontend assets)
- MySQL or compatible database

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/huanth/api-laravel
   cd api-laravel
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install Node dependencies:**
   ```sh
   npm install
   ```

4. **Copy the example environment file and set your variables:**
   ```sh
   cp .env.example .env
   ```

5. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

6. **Run migrations:**
   ```sh
   php artisan migrate
   ```

7. **Build frontend assets:**
   ```sh
   npm run build
   ```

8. **Start the development server:**
   ```sh
   php artisan serve
   ```

## Running Tests

```sh
php artisan test
```

## Project Structure

- `app/` - Application core code (Controllers, Models, etc.)
- `routes/` - API and web routes
- `resources/` - Views and frontend assets
- `public/` - Publicly accessible files
- `config/` - Configuration files

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
