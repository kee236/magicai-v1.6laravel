
magic ai 1.6


## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/laravel-management-telegram-bot.git
    cd laravel-management-telegram-bot
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install Node.js dependencies:
    ```sh
    npm install
    ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```

5. Generate the application key:
    ```sh
    php artisan key:generate
    ```

6. Run the database migrations:
    ```sh
    php artisan migrate
    ```

7. (Optional) Seed the database:
    ```sh
    php artisan db:seed
    ```

8. Compile the frontend assets:
    ```sh
    npm run dev
    ```

## Usage

To start the development server, run:

Visit `http://localhost:8000` in your browser to see the application.

## Features