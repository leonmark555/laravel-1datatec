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
