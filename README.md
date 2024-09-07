<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Contact List Application

This is a simple contact list application built with Laravel. It allows users to manage a list of contacts, including their names, phone numbers, emails, and addresses. The application supports CRUD (Create, Read, Update, Delete) operations for managing contacts.

## Features

- **Create**: Add new contacts to the list.
- **Read**: View details of existing contacts.
- **Update**: Edit contact information.
- **Delete**: Remove contacts from the list.

## Screenshots

### Home Page
<img width="667" alt="home" src="https://github.com/user-attachments/assets/576dbd4c-5ae2-4a55-a30a-611aa43e2a33">

### Create Page
<img width="664" alt="create" src="https://github.com/user-attachments/assets/21c10e30-5a32-471b-bfa5-874473bc4458">

### Contact Details
<img width="665" alt="show" src="https://github.com/user-attachments/assets/f87745c4-67a0-4ec6-802d-3ed8937572e0">

### Edit Contact
<img width="666" alt="edit" src="https://github.com/user-attachments/assets/931c51ac-422c-4f0a-9ac8-2fb6b57173b6">


## Installation

### Prerequisites

- PHP (>= 8.0)
- Composer
- Laravel (>= 9.x)
- MySQL or other database systems supported by Laravel

### Clone the Repository

```bash
git clone https://github.com/lahcenboukbir/contact-list-app.git
cd contact-list-app
```
### Install Dependencies
```bash
composer install
```

### Configure the Environment
1. Copy the .env.example file to .env:
```bash
cp .env.example .env
```
2. Generate the application key:
```bash
php artisan key:generate
```
3. Set up your database configuration in the .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
### Run Migrations
```bash
php artisan migrate
```

### Serve the Application
```bash
php artisan serve
```
Visit http://localhost:8000 in your browser to access the application.

## Usage
- Home: View the list of all contacts.
- Create: Click the "Create a new contact" button to add a new contact.
- View: Click the eye icon to view its details.
- Edit: Click the edit icon to modify contact information.
- Delete: Click the delete icon to remove a contact.

## Project Structure
- **app/Models/Contact.php:** Eloquent model for the contacts.
- **app/Http/Controllers/ContactController.php:** Controller for handling CRUD operations.
- **resources/views/contacts/:** Blade templates for the contacts views.
- **routes/web.php:** Routes for the contact management.

## Contributing
If you would like to contribute to this project, please fork the repository and submit a pull request. Ensure that you follow the coding style and include tests for new features or fixes.

## Contact
If you have any questions or suggestions, feel free to contact me.
