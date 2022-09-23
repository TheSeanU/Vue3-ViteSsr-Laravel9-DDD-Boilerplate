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
    |   |   |-- Controller
    |   |   |-- Database
    |   |   |-- Factory
    |   |   |-- Migrations
    |   |   |-- Seeders
    |   |   |-- Exceptions
    |   |   |-- Interface
    |   |   |-- Kernels
    |   |   |-- Middleware
    |   |   |-- Providers
    |   |   |__ Repository
    |   |
    |   |_Domains
    |      |-- * (Custom domain name)
    |         |-- Database
    |         |-- Factory
    |         |-- Migrations
    |         |-- Seeders
    |         |-- Interface
    |         |-- Models
    |         |-- Repository
    |         |-- Request
    |         |-- Controllers
    |         |-- Routes
    |         |-- Middleware
    |         |-- Requests
    |         |-- Policies
    |         |__ Jobs
    |
    |__ssr
        |-- Infrastructure
        |   |-- build
        |   |   |-- entry-server.ts
        |   |   |-- entry-client.ts
        |   |   |__ main.ts
        |   |-- index.html
        |   |__ server.ts
        |
        |-- Domains
        |   |__ * (Custom domain name)
        |       |-- components
        |       |-- pages (Are auto indexed by name)
        |       |-- index.ts
        |       |__ types.d.ts
        |
        |__ Application
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
