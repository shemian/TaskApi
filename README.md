# Task Management API using Laravel  
The "Laravel RESTful API for Task Management" is a user-friendly API built with Laravel, enabling authenticated to perform  CRUD operations. With secure authentication, validation, and intuitive endpoints, users can efficiently manage tasks. 

## Features
* Create a new task with a title, description, and status.
* Retrieve a specific task by its ID.
* Update an existing task's details.
* Delete a task.
* Authentication and authorization for secure API access.
* Validation to ensure data integrity.

## Requirements 
This are the requirements for running the Static Site Generator 
* PHP
* Laravel 10
* Xampp
* Postman - (api testing)
* Composer

## Installation.
1. Download or clone the repository to your Machine:

        git clone  https://github.com/shemian/TaskApi.git
        
2. Install dependencies:
    
        composer install
   
4. Configure your `.env` file with database details and other settings.

5. Run migrations and seed the database:
    
        php artisan migrate --seed

6. Start the Laravel development server:
    
        php artisan serve

## Usage
To access this Api endpoints the user need to be authenticated first.

* Get all the task : GET http://127.0.0.1:8000/api/tasks
* Create a new task: POST http://127.0.0.1:8000/api/create-task/
* Retrieve a specific task: GET http://127.0.0.1:8000/api/tasks/{id}
* Update an existing task: PUT http://127.0.0.1:8000/api/tasks/{id}/update 
* Delete a task: DELETE http://127.0.0.1:8000/api/tasks/{id}/delete

## Authentication
Authentication is required to access the API endpoints. Include a valid ``Bearer token`` in the request headers. You can obtain a token by making a POST request to ``http://127.0.0.1:8000/api/login`` with valid credentials. When we run ``php artisan migrate --seed`` We created one user in our user table with the following credentails:

        email: admin@admin.com
        password: password

Using ``postman`` you can get the  valid ``Bearer token``


![api1](https://github.com/shemian/TaskApi/assets/60656556/f5cbcec5-ef8e-44c7-b3d3-d25a95556a47)


