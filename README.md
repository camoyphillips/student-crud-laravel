# Laravel Student CRUD

Laravel app that allows authenticated users to manage students with full CRUD functionality. Built using Blade views and Laravel authentication.

---

## Features

- User login
- List, create, update, delete students
- Input validation via `FormRequest`
- Auth-protected routes
- Custom login form

---

## Installation

### 1. Clone the repo
git clone https://github.com/camoyphillips/student-crud-laravel.git
cd student-crud-laravel
2. Install dependencies
composer install
npm install && npm run dev

3. Configure environment
php artisan key:generate
Update .env with your local DB config:

DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

4. Run migrations
php artisan migrate

5. Run server
php artisan serve
Visit: http://127.0.0.1:8000

Authentication

composer require laravel
php artisan breeze:install
npm install && npm run dev
php artisan migrate
Access:

/register

/login

Folder
Path	
routes/web.php	Named routes + students resource routes
resources/views/students/	CRUD Blade templates
app/Http/Controllers/StudentController.php
app/Http/Requests/	
resources/views/auth/login.blade.php

<img width="1920" height="1080" alt="Screenshot 2025-08-07 013629" src="https://github.com/user-attachments/assets/7c75afda-1511-4d72-a2dc-accd2dcc0969" />

<img width="1920" height="1080" alt="Screenshot 2025-08-07 013654" src="https://github.com/user-attachments/assets/3f26d4ad-4ec4-4945-8ad7-da66c258651c" />

<img width="1920" height="1080" alt="Screenshot 2025-08-07 013729" src="https://github.com/user-attachments/assets/2e8f77bd-6d41-4a2a-b3e9-1bd70727dcbc" />

<img width="1920" height="1080" alt="Screenshot 2025-08-07 013747" src="https://github.com/user-attachments/assets/ebe9d25a-4b2d-49b0-9fcc-a73004ba0229" />

<img width="1920" height="1080" alt="Screenshot 2025-08-07 021554" src="https://github.com/user-attachments/assets/86ce091d-a810-4f08-988b-fc606d64c83f" />

<img width="1920" height="1080" alt="Screenshot 2025-08-07 021624" src="https://github.com/user-attachments/assets/485a4d15-5081-4bbc-ba9c-08ea46f40567" />

<img width="1920" height="1080" alt="Screenshot 2025-08-07 021657" src="https://github.com/user-attachments/assets/7ec7a0ae-2b4a-429f-92ac-3a1508871a04" />







