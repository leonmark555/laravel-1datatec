# Laravel API with Job Queue, Database, and Event Handling

## Setup

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Configure your `.env` file with your database credentials.
4. Run `php artisan migrate` to create the database table.

## Testing the API

1. Start the Laravel server: `php artisan serve`.
2. Send a `POST` request to `/api/submit` with the following JSON payload:
    ```json
    {
        "name": "John Doe",
        "email": "john.doe@example.com",
        "message": "This is a test message."
    }
    ```
