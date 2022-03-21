# My laravel project with Vite, vue

### Laravel domain driven design data stucture;
    Core
    |-- Commands
    |-- Controllers
    |-- Database
    |-- Exceptions
    |-- Kernels
    |-- Middleware
    |-- Providers
    Domain
    |-- *
        |-- Controllers
        |-- Database
        |-- Models
        |-- Request
        |-- Routes
    Interface
    |-- *
    

### Automatic index:
```sh
    Migrations:  "App\\Domain\\*\\Database\\\Migrations\\".
    Seeders:     "App\\Domain\\*\\Database\\\Seeders\\".
    Factories:   "App\\Domain\\*\\Database\\\Factories\\".
    Routes:      "App\\Domain\\*\\Routes".
```

### Custom commands:
    Command: $php artisan migrate-seed // equals php artisan mirgate::fresh -seed 
