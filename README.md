# Contacts CRUD

A Laravel application to manage contacts.

## Dependencies

- PHP 7.4
- Laravel 8.7
- Laravel Breeze

## Installation
```bash
php artisan breeze:install
npm install
npm run dev
php artisan migrate
```

### Create Admin User
```bash
php artisan db:seed
```
This command creates an Admin user with the following credentials:
- Email: admin@example.com
- Pasword: password

## Usage:

To run the project locally, please follow these steps:

- Open a terminal or command prompt.
- Navigate to the root directory of the project.
- Run the following command:
```bash
php artisan serve
```
- After executing the command, you should see a message indicating that the Laravel development server is running.
- Open a web browser.
- In the address bar, enter the following URL: http://[YOUR HOSTNAME]:8000.
- Press Enter or click Go.
- The application should now load in the web browser and be ready for use.  

Make sure to replace "[YOUR HOSTNAME]" with the actual hostname or IP address of the server where the application is hosted.
