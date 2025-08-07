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

<img width="1920" height="1080" alt="Screenshot 2025-08-07 013629" src="https://github.com/user-attachments/assets/0dbc7ce1-ae5e-490d-beca-fd7afc7baa7b" />


<img width="1920" height="1080" alt="Screenshot 2025-08-07 013629" src="https://github.com/user-attachments/assets/8e13c0b3-87ff-494a-b55e-34086aea88cc" />


<img width="1920" height="1080" alt="Screenshot 2025-08-07 013629" src="https://github.com/user-attachments/assets/d5c2978c-b1df-4bb3-8d03-75b58607c142" />


<img width="1920" height="1080" alt="Screenshot 2025-08-07 013629" src="https://github.com/user-attachments/assets/42e5fcaf-10c4-40db-9419-aa19b968aaac" />









