# NexDo - Laravel To-Do Application

NexDo is a simple and clean To-Do application built with the Laravel framework for learning and practicing Laravel fundamentals.

This project demonstrates:

* Laravel routing
* Controllers
* Blade templating
* Eloquent ORM
* CRUD operations
* Form handling
* Database migrations
* Bootstrap UI styling

---

# Features

* Add new tasks
* Mark tasks as completed
* Delete tasks
* Task status badges
* Responsive Bootstrap UI
* Laravel MVC architecture

---

# Tech Stack

* Laravel 12
* PHP 8+
* MySQL
* Bootstrap 5
* Blade Templates
* XAMPP

---

# Screenshots

## Home Page

A clean landing page with navigation to the To-Do list.

## To-Do Dashboard

Users can:

* Add tasks
* View task status
* Mark tasks as completed
* Delete tasks

---

# Installation Guide

## 1. Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/NexDo.git
```

---

## 2. Navigate to Project Folder

```bash
cd NexDo
```

---

## 3. Install Dependencies

```bash
composer install
```

---

## 4. Create Environment File

```bash
cp .env.example .env
```

---

## 5. Generate Application Key

```bash
php artisan key:generate
```

---

## 6. Configure Database

Update your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nexdo
DB_USERNAME=root
DB_PASSWORD=
```

---

## 7. Run Migrations

```bash
php artisan migrate
```

---

## 8. Start Development Server

```bash
php artisan serve
```

Visit:

```text
http://127.0.0.1:8000
```

---

# Project Structure

```text
app/
 ├── Http/
 │    └── Controllers/
 │         ├── HomeController.php
 │         └── TodoController.php
 │
 ├── Models/
 │    └── NexDo.php
 │
resources/
 └── views/
      ├── layouts/
      └── pages/
           └── todo/
                └── index.blade.php

routes/
 └── web.php
```

---

# Learning Objectives

This project was created to practice:

* Laravel MVC architecture
* Route management
* Eloquent models
* Blade components and layouts
* Form submission with CSRF protection
* CRUD operations
* Database migrations
* Bootstrap integration

---

# Future Improvements

Planned features:

* Task editing
* User authentication
* Task categories
* Due dates
* Search functionality
* Dark mode
* AJAX interactions
* API integration

---

# Author

Developed by Thisharu for learning Laravel framework development.

---

# License

This project is open-source and available for educational purposes.
