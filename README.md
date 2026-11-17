# Workshop 1 – Training Institute Management System

This is a Laravel starter project containing the Workshop 1 implementation from the supplied handout:
- Student CRUD
- Course CRUD
- MySQL migrations
- Blade forms and views
- Server-side validation

## Important
This ZIP contains the Laravel application source and configuration, but not Composer's `vendor/` dependencies.
You need PHP, Composer, MySQL and Node.js installed.

## Setup in VS Code / WSL

1. Extract this ZIP.
2. Open the extracted `Workshop1-Laravel` folder in VS Code.
3. Open the VS Code terminal in that folder.
4. Install PHP dependencies:

   ```bash
   composer install
   ```

5. Create your environment file:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

6. Create a MySQL database:

   ```sql
   CREATE DATABASE WorkshopDB;
   ```

7. Edit `.env` and set your own MySQL username/password:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=WorkshopDB
   DB_USERNAME=root
   DB_PASSWORD=
   ```

8. Run migrations and start Laravel:

   ```bash
   php artisan migrate
   php artisan serve
   ```

9. Visit:
   - http://127.0.0.1:8000/students
   - http://127.0.0.1:8000/courses

## Notes
- Do not upload your real `.env` file or database password to GitHub.
- The many-to-many Student–Course relationship is intentionally not implemented in Workshop 1; the handout says it will be added in a later workshop.
- The `difficulty` field accepts `Easy`, `Medium`, or `Hard`.
