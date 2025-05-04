# Truki Lite – Public Portfolio Showcase

**Truki Lite** is a public-facing Laravel portfolio gallery. It allows users to browse, search, and view portfolios that showcase personal or professional projects. Each portfolio includes a title, description, and an optional image. The goal is to simulate a public GitHub-like portfolio board.

---

## 🌟 What It Does

- Public homepage with welcome message
- View all portfolio entries on a responsive grid
- Create, edit, and delete portfolios (via the UI)
- Upload and display images for each portfolio
- Optional search bar to filter portfolios by title
- Clean Tailwind CSS design
- No login or authentication required
- Ready for deployment on Microsoft Azure

---

## 🚀 Setup Instructions

Follow these steps to run the app locally.

### 1. Clone the Repository

```bash
git clone https://github.com/hypzx2105/Truki-ServerSide.git
cd Truki-ServerSide
2. Install PHP & JS Dependencies
bash
Copiar
Editar
composer install
npm install
3. Configure .env and Generate App Key
bash
Copiar
Editar
cp .env.example .env
php artisan key:generate
4. Choose a Database Setup
For SQLite (recommended for testing):

bash
Copiar
Editar
touch database/database.sqlite
Then in .env, update:

ini
Copiar
Editar
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
Or configure MySQL:

ini
Copiar
Editar
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=truki_lite
DB_USERNAME=root
DB_PASSWORD=your_password_here
5. Run Migrations & Seed the Database
bash
Copiar
Editar
php artisan migrate --seed
This creates the portfolios table and inserts sample entries.

6. Create Storage Symlink (for images)
bash
Copiar
Editar
php artisan storage:link
7. Build Assets and Serve the App
bash
Copiar
Editar
npm run dev
php artisan serve
Go to http://127.0.0.1:8000 to view the site.

🖼️ Features In Detail
Portfolios
View all entries on the homepage, each showing title, image, and description.

Create/Edit
Add a new portfolio via form with image upload. Edit existing entries.

Delete
Delete portfolios directly from the listing view (confirmation required).

Search
Search portfolios by title using the search input on the homepage.

Image Upload
Stored in /storage/app/public/portfolios and served via /public/storage.

🗂️ File Structure Highlights
app/Models/Portfolio.php – Eloquent model

app/Http/Controllers/PortfolioController.php – All logic for CRUD + file handling

database/migrations/ – Portfolios schema

database/seeders/DatabaseSeeder.php – Seeds example portfolios

resources/views/portfolios – Blade views (index, create, edit, show)

routes/web.php – Routing for portfolio CRUD and homepage

🌐 Deployment (Azure-Ready)
This app is designed for easy deployment on Azure App Service.

Push to a public GitHub repository.

Create a new Laravel App on Azure.

Configure environment variables under App Settings.

Ensure php artisan storage:link is run on deployment.
