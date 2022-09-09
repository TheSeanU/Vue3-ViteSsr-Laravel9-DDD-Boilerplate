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
php artisan migrate-seed
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

    Infrastructure
        |-- Commands
        |-- Controller
        |-- Database
            |-- Factory
            |-- Migrations
            |-- Seeders
        |-- Exceptions
        |-- Interface
        |-- Kernels
        |-- Middleware
        |-- Providers
        |-- Repository
    Domain
        |-- *
            |-- Database
                |-- Factory
                |-- Migrations
                |-- Seeders
            |-- Interface
            |-- Models
            |-- Repository
            |-- Request
    Application
        |-- *
            |-- Middleware
            |-- Requests
            |-- Policies
            |-- Jobs
    Interface
        |-- *
            |-- Controllers
            |-- Routes
    ssr
        |-- Infrastructure
            |-- *
        |-- Domain
            |-- ??
        |-- Application
            |-- Middleware
        |-- Interface
            |-- *

### Automatic index:

```sh
    Migrations: "App\\Domain\\*\\Database\\\Migrations\\".
    # call seeders in migrations instead. *
    # to auto index seeders without relations call `public static $autoIndex = true;` inside seeder file.
    # Seeders: "App\\Domain\\*\\Database\\\Seeders\\".
    Factories: "App\\Domain\\*\\Database\\\Factories\\".
    ### The routes auto indexer. usses the filename as /api/filename.
    Routes:"App\\Interface\\*\\Routes".
    Interface: "App\\Domain\\*\\Interface\\".
    Repository: "App\\Domain\\*\\Repository\\".
```

### \* Call seeders inside migration files:

##### Hierarchy for model relations now works with the date you put in front of the migration file.

```sh
    use App\\Domain\\*\\Database\\Seeders\\CustomSeeder;

    public function up()
    {
        Schema::create('table', function (Blueprint $table) {
            //...
        });

        (new CustomSeeder())->run();
    }
```

### Custom commands:

    Command: $php artisan migrate-seed // equals php artisan mirgate::fresh --seed
