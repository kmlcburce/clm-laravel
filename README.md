# CLM Laravel API

This is the backend service for the CLM project, built using Laravel and PostgreSQL. It provides a RESTful API for the React frontend and handles all server-side logic.

## 🧾 Features

- RESTful API endpoints for name creation and retrieval
- PostgreSQL integration
- Laravel 10+
- API routes defined in `routes/api.php`

## 🛠️ Requirements

- PHP 8.2 or later
- Composer
- PostgreSQL
- Laravel CLI
- Nginx (or Apache)
- Optional: Docker & Docker Compose


## 🚀 Installation

1. **Clone the repo**
   ```bash
   git clone https://github.com/yourusername/clm-laravel.git
   cd clm-laravel
    ```
2. **Install dependencies
    ```
    composer install
    ```
3. Set environment variables
    ```
    cp .env.example .env
    nano .env
    ```
    ```
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```
4. Generate app key
    ```
    php artisan key:generate
    ```
5. Run migrations
    ```
    php artisan migrate
    ```
6. Start the server (for local setup)
    ```
    php artisan serve
    ```
## 🌐 API Endpoints
| Method | Endpoint        | Description               |
| ------ | --------------- | ------------------------- |
| POST   | /create\_name   | Create a new name record  |
| POST   | /retrieve\_name | Retrieve all name records |

## 📝 License
MIT License

