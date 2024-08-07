# Laravel API with Job Queue, Database, and Event Handling

## Overview

This Laravel API demonstrates proficiency with job queues, database operations, and event handling. It includes a single API endpoint to submit data, processes the data using Laravel's job queue, and triggers an event upon successful data storage.

## Setup

### Prerequisites

-   PHP >= 8.0
-   Composer
-   MySQL or any other supported database

### Installation

1. **Clone the Repository**

    ```bash
    git clone <your-repository-url>
    cd <repository-folder>

    ```

2. **Install Dependencies**

bash
composer install
Configure Environment

Update the .env file with your database credentials:
env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_api
DB_USERNAME=root
DB_PASSWORD=

```

Generate Application Key

```
php artisan key:generate
```

Run Migrations

```
php artisan migrate
```

Queue Configuration

Ensure the queue driver is set in your .env file:

env
Copy code
QUEUE_CONNECTION=database
Run the queue worker (in a separate terminal):

bash
Copy code
php artisan queue:work
API Endpoint
Submit Data
Endpoint: /api/submit

Method: POST

Request Body:

json
Copy code
{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}
Responses:

202 Accepted - Submission received, processing.
422 Unprocessable Entity - Validation errors (e.g., missing required fields).
Testing
Run the Laravel Development Server

bash
Copy code
php artisan serve
Send a POST Request

You can use a tool like Postman or curl to send a POST request to the endpoint:

bash
Copy code
curl -X POST http://localhost:8000/api/submit \
-H "Content-Type: application/json" \
-d '{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}'
Run Unit Tests

To execute the unit tests, use:

bash
Copy code
php artisan test
This will run the test suite and provide feedback on the correctness of the API and job queue functionality.

Notes
Ensure your database server is running and accessible.

Make sure to configure your queue driver in the .env file, for example:

env
Copy code
QUEUE_CONNECTION=database
If using a different queue driver, refer to Laravel's documentation for additional configuration.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Acknowledgments
Laravel Documentation: https://laravel.com/docs
Laravel Queue: https://laravel.com/docs/9.x/queues
Laravel Events: https://laravel.com/docs/9.x/events# Laravel API with Job Queue, Database, and Event Handling

## Overview

This Laravel API demonstrates proficiency with job queues, database operations, and event handling. It includes a single API endpoint to submit data, processes the data using Laravel's job queue, and triggers an event upon successful data storage.

## Setup

### Prerequisites

-   PHP >= 8.0
-   Composer
-   MySQL or any other supported database

### Installation

1. **Clone the Repository**

    ```bash
    git clone <your-repository-url>
    cd <repository-folder>
    Install Dependencies
    ```

2. **Install Dependencies**

```bash
composer install
Configure Environment
```

3. **Configure Environment**

env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

4. **Run Migrations**

```bash
php artisan migrate
```

### API Endpoint

Submit Data
Endpoint: /api/submit
Method: POST
Request Body:
json

```
{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}
```

Responses:

202 Accepted - Submission received, processing.
422 Unprocessable Entity - Validation errors (e.g., missing required fields).

### Testing

1. Run the Laravel Development Server

```bash
php artisan serve
```

2. Send a POST Request

You can use a tool like Postman or curl to send a POST request to the endpoint:

```bash
curl -X POST http://localhost:8000/api/submit \
-H "Content-Type: application/json" \
-d '{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}'
```

3.  Run Unit Tests

To execute the unit tests, use:

```bash
php artisan test
```
