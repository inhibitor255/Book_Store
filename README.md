# Book Store

A CRUD and API laravel project for Book Store.

## Run Locally

Clone the project

```bash
  git clone https://github.com/inhibitor255/Book_Store.git
```

Go to the project directory

```bash
  cd my-project
```

Install dependencies

```bash
  composer install && npm install
```

Make `.env` file and connect your Database

Start the server

```bash
  npm run build && php artisan serve
```

You can check local website in

```bash
    http://localhost:8000
```

## Running Tests

To run tests, run the following command and Seed sample Data

```bash
  php artisan migrate:fresh --seed
```

## Sample Account

```bash
  Email - user1@gmail.com
  Password - user1234
```

```bash
  Email - user2@gmail.com
  Password - user1234
```

```bash
  Email - user3@gmail.com
  Password - user1234
```

or you can register as a new user.

## API Reference

#### Get all of the books list

```http
  GET  http://localhost:8000/api/books
```
