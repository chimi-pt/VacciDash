# VacciDash
# Vaccine Management System

To run the project on your local PC;
1. Find a location on your computer where you want to store the project.
-Running the command below; will pull the project from github and create a copy of it on your local computer at your specified directory.
-You can change the name of this folder it creates, by changing the last part of the code snippet below to match the name you want your folder to be called.

git clone linktogithubrepo.com/ projectName

2. cd into the project
cd projectName

3. Install Composer Dependencies
composer install

4. Install NPM Dependencies
npm install

5.Create a copy of your .env file
cp .env.example .env

6.Generate an app encryption key
php artisan key:generate

7.Create an empty database for our application
Create an empty database for your project using the database tools you prefer

8.In the .env file, add database information to allow Laravel to connect to the database
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. 

9.Migrate the database
php artisan migrate
-Once your credentials are in the .env file, now you can migrate your database.

