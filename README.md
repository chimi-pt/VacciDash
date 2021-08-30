# VacciDash
# Vaccine Management System

##To run the project on your local PC;

### 1. Find a location on your computer where you want to store the project.
-Running the command below; will pull the project from github and create a copy of it on your local computer at your specified directory.
-You can change the name of this folder it creates, by changing the last part of the code snippet below to match the name you want your folder to be called.

```
git clone linktogithubrepo.com/ projectName
```

### 2. cd into the project
```
cd projectName
```

### 3. Install Composer Dependencies
You must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.
```
composer install
```

### 4. Install NPM Dependencies
```
npm install
```

### 5. Create a copy of your .env file
This a file that contains our projects sytems' configurations such as; the database configuration.
```
cp .env.example .env
```

### 6. Generate an app encryption key
Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. 
The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.
```php
php artisan key:generate
```

### 7. Create an empty database for the application
*Create an empty database* for your project using the database tools you prefer.

### 8. In the .env file, add database information to allow Laravel to connect to the database
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. 

### 9. Migrate the database
```
php artisan migrate
```
Once your credentials are in the .env file, you can migrate your database.

