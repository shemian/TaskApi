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

## Installation & Usage.
1. Download or clone the repository to your Machine:

        git clone  https://github.com/shemian/TaskApi.git
        
2. Install dependencies:
    
        composer install
   
4. Configure your `.env` file with database details and other settings.

5. Run migrations and seed the database:
    
        php artisan migrate --seed

6. Start the Laravel development server:
    
        php artisan serve



