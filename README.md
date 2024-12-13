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
    APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

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
  
