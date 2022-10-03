# My laravel project with Vite, Vue & Domain Driven Design.

##### My own project to build an app in domain driven design using laravel and vue. added Repository Pattern – PHP Design Pattern

### PHP version needed

```sh
needed version = PHP 8.1.* or higher. new features.
```

### Project setup

```sh
npm install

composer install

mysql -u root
# run: create database;

cp .env.example .env
code .env
# edit if needed: DB_PORT=, DB_DATABASE=laravel, DB_USERNAME=, DB_PASSWORD=

php artisan key:generate
php artisan migrate:fresh --seed
```

### Run project

Run in 1 terminal the javascript development server:

```sh
npm run dev
```

Run in another terminal the laravel development server:

```sh
php artisan serve
```

### Laravel domain driven design data stucture;

```bash

    |--App
    |   |--Infrastructure
    |   |   |-- Commands
    |   |   |-- Exceptions
    |   |   |-- Helpers
    |   |   |-- Http
    |   |   |-- Kernels
    |   |   |-- Middleware
    |   |   |__ Providers
    |   |
    |   |-- Application
    |   |   |-- Controller
    |   |   |-- Database
    |   |   |   |-- Factory
    |   |   |   |-- Migrations
    |   |   |   |__ Seeders
    |   |   |
    |   |   |-- Interface
    |   |   |-- Repository
    |   |   |__ Repsonses
    |   |
    |   |-- Domains
    |       |-- * (Custom domain name)
    |           |-- Controllers
    |           |-- Database
    |           |   |-- Factory
    |           |   |-- Migrations
    |           |   |__ Seeders
    |           |
    |           |-- Interface
    |           |-- Middleware
    |           |-- Models
    |           |-- Repository
    |           |-- Request
    |           |-- Requests
    |           |-- Resources
    |           |__ Routes
    |
    |__ssr
        |-- infrastructure
        |   |-- build
        |   |   |-- entry-server.ts
        |   |   |-- entry-client.ts
        |   |   |__ main.ts
        |   |
        |   |-- index.html
        |   |__ server.ts
        |
        |-- domains
        |   |__ * (Custom domain name)
        |       |-- components
        |       |-- pages (Are auto indexed by name)
        |       |-- index.ts
        |       |__ types.d.ts
        |
        |__ application
            |-- assets
            |-- components
            |-- layout
            |-- services
            |__ types
```

### Automatic index:

```sh
    Factories: "App\\Domains\\*\\Database\\\Factories\\".
    Migrations: "App\\Domains\\*\\Database\\\Migrations\\".
    Seeders: "App\\Domains\\*\\Database\\\Seeders\\". #### call this file in database/seeders/DatabaseSeeders.php

    ### The routes auto indexer. usses the filename as /api/filename.
    Routes: "App\\Interface\\*\\Routes".
    Interface: "App\\Domains\\*\\Interface\\".
    Repository: "App\\Domains\\*\\Repository\\".
```
