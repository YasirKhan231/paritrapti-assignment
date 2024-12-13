# Laravel Project Setup

Follow the steps below to set up and run the Laravel project after cloning it from GitHub.

## Prerequisites

Make sure you have the following installed on your system:
- **PHP** (>= 8.0, compatible with Laravel version used)
- **Composer** (Dependency manager for PHP)
- **Node.js and npm** (For frontend dependencies, if applicable)
- **Database Server** (e.g., MySQL, PostgreSQL, etc.)

---

## Setup Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/YasirKhan231/paritrapti-assignment.git
   cd paritrapti-assignment
   ```

2. **Install Dependencies**
   Install PHP dependencies using Composer:
   ```bash
   composer install
   ```

3. **Create and Configure the `.env` File**
   - Copy the `.env.example` file to create a new `.env` file:
     ```bash
     cp .env.example .env
     ```
   - Open the `.env` file in a text editor and update the following variables:
     ```env
     APP_NAME="paritrapti"
     APP_ENV=local
     APP_KEY=
     APP_DEBUG=true
     APP_URL=http://127.0.0.1:8000

     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password
     ```

4. **Generate the Application Key**
   Generate the key required for encryption and security:
   ```bash
   php artisan key:generate
   ```

5. **Set Up the Database**
   - Ensure your database server is running.
   - Run migrations to create the required database schema:
     ```bash
     php artisan migrate
     ```

6. **Frontend Dependencies (if applicable)**
   If the project uses frontend scaffolding (e.g., Vue, React):
   ```bash
   npm install
   npm run dev
   ```

7. **Create the Storage Symlink**
   If the project involves file uploads or storage:
   ```bash
   php artisan storage:link
   ```

8. **Start the Local Development Server**
   Run the Laravel development server:
   ```bash
   php artisan serve
   ```
   Access the application in your browser at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Troubleshooting

- **Permission Issues**: Ensure the `storage` and `bootstrap/cache` directories are writable:
  ```bash
  chmod -R 775 storage bootstrap/cache
  ```

- **Missing Dependencies**: If you encounter errors related to missing extensions, ensure the required PHP extensions are installed (e.g., `pdo`, `mbstring`, `openssl`, `tokenizer`, etc.).

---

## Additional Commands

- **Clear Cache**:
  ```bash
  php artisan cache:clear
  ```

- **Run Tests**:
  ```bash
  php artisan test
  
