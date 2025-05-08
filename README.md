# 🌟 Truki Lite – Public Portfolio Showcase

**Truki Lite** is a public-facing Laravel portfolio gallery. It allows users to browse, search, and view portfolios that showcase personal or professional projects. Each portfolio includes a title, description, and an optional image. The goal is to simulate a public GitHub-like portfolio board. 🎨🗂️

---

# 🌟 What It Does

- 🏠 Public homepage with welcome message
- 🖼️ View all portfolio entries on a responsive grid
- ✏️ Create, edit, and delete portfolios (via the UI)
- 📸 Upload and display images for each portfolio
- 🔍 Optional search bar to filter portfolios by title
- 🎨 Clean Tailwind CSS design
- 🔓 No login or authentication required
- ☁️ Ready for deployment on Microsoft Azure

---

## ✨ Features

- 🔍 **Search Portfolios** by title or description.
- 🖼️ **Display Projects** with beautiful layout and image support.
- 📱 **Responsive Design** for all screen sizes.
- ⚡ **Fast and Lightweight** thanks to Laravel + Vite.

---

## 🛠️ Technologies Used

- ⚙️ **Backend**: Laravel 10.x (PHP 8.1+)
- 🖥️ **Frontend**: Blade + Tailwind CSS
- 💾 **Database**: MySQL
- 🚀 **Build Tools**: Vite
- 🗃️ **Version Control**: Git & GitHub

---

## 🚀 Installation

Follow these steps to set up Truki Lite locally:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/hypzx2105/Truki-ServerSide.git
   cd Truki-ServerSide
   ```

2. **Install Dependencies**

   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**

   ```bash
   cp .env.example .env
   ```

   Update `.env` with your DB credentials and app settings.

4. **Generate Key**

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**

   ```bash
   php artisan migrate
   ```

6. **Build Frontend Assets**

   ```bash
   npm run build
   ```

7. **Start Server**

   ```bash
   php artisan serve
   ```

   Visit [http://localhost:8000](http://localhost:8000) 🚪

---

## 📂 Folder Structure

- `app/` – Controllers, Models, Logic
- `resources/views/` – Blade templates
- `routes/web.php` – Route definitions
- `public/` – Public assets and images
- `database/migrations/` – Table definitions

---

## 🙋‍♀️ Usage

- Home page displays all portfolios 🌐
- Use the search bar to filter results 🔎
- Click on a card to view full project details 📄

---

## 👥 Authors

> You can update this section with your names ✍️

- 🧑‍💻 Iker Arza 
- 👩‍💻 Favour James Ayeye

---

## 📃 License

This project is licensed under the [MIT License](LICENSE).  
Feel free to use and contribute! 🤝