# Truki


Truki is a Laravel-based platform that allows users to create portfolios, showcase their skills, and offer to swap skills with others. Users can earn badges, send messages, and receive notifications related to their activities on the platform.

## Features

- User registration and login
- Portfolio creation with images
- Skill tagging and search
- Swap requests between users
- Messaging system
- Badge and notification system


---

## Installation & Setup

Follow these steps to set up and run the project locally on your machine.

### 1. Clone the Repository

```bash
git clone https://github.com/hypzx2105/Truki-ServerSide.git
cd Truki-ServerSide
```

### 2. Install Dependencies

Install PHP and Node dependencies:

```bash
composer install
npm install
```

### 3. Environment Configuration

Copy the `.env.example` file and create a new `.env`:

```bash
cp .env.example .env
```

Then edit `.env` and configure your **local MySQL** database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=truki_db
DB_USERNAME=root
DB_PASSWORD=your_password_here
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations & Seeders

```bash
php artisan migrate --seed
```

This will create all tables and populate them with initial users, skills, and badges.

### 6. Serve the Application

```bash
php artisan serve
```

Open your browser and visit:

```
http://127.0.0.1:8000
```

---

## Frontend Styling

This project uses **Tailwind CSS via CDN**. No additional build tools are required for styling.

---


## Project Structure

- `app/Models` – Core models: User, Portfolio, Skill, Swap, Message, Notification, Badge
- `app/Http/Controllers` – RESTful controllers for business logic
- `resources/views` – Blade templates
- `database/migrations` – Table schema definitions
- `database/seeders` – Initial test data
- `routes/web.php` – Web routes for pages

---


"Truki – Where every skill finds its muse."
