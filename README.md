# student_management
This is a Laravel-based Student Management System that includes authentication with the built-in `auth` function. 
** features **
**Backend:**
Create migrations for students and teachers.
Implement Eloquent relationships between Student and Teacher.
Set up CRUD functionality for both models.
Use soft deletes for Student records.
Use migrations and seeders to populate the database with sample data.
**Frontend:**
Create views using Blade for listing, creating, updating, and deleting students.
Implement pagination, search, and CRUD functionality.
Use JS DataTables for an enhanced student list view.
**Authentication:**
Set up Laravel's authentication system with php artisan make:auth

**how to setup and run project **
first run composer update command then create .env file and copy all data from .env.exple to .env
step1: after clone gotot .env file and change db name according to you and create a db with same name  
step2: run php artisan migrate command
step3: goto db users table and add admin entry with hashed password 
step4: run the project with php artisan serve command 
step5: goto 127.0.0.8000 port and login with the credentials entered in users table and explore full project 
**Thank You For Visit**
