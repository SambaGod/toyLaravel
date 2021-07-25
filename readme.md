# Run dev server on port other than 8080
`php artisan serve --port=8081`

# Create project
This project is created using the composer create-project command
`composer create-project laravel/laravel toyLaravel`

# Create controllers
- Regular `php artisan make:controller NewController`
- For resource `php artisan make:controller NewController --resource`
- For api `php artisan make:controller NewController --api`

# Bind all http request methods to a route
- For resource `Route::resource('/tasks', 'TasksController');`
- For api `Route::apiResource('/tasks', 'TasksController');`

# List all routes
`php artisan route:list`

# Change default lookup column
Default lookup column can be changed using the `getRouteKeyName()` method in the model and returning whatever column is required

# Route caching
It's good practice to use these commands only in the production build and not development
- cache `php artisan route:cache`
- clear route cache `php artisan route:clear`

# DB Migrations
- Regular `php artisan make:migration create_table_name`
- Pre-filled `php artisan make:migration create_table_name --create=table_name`
- Modify existing table `php artisan make:migration create_table_name --table=table_name`
- Run migration `php artisan migrate`
- Rollback `php artisan migrate:rollback`

# Seeder
- Create: `php artisan make:seeder SampleSeeder`
- Create Factory `php artisan make:factory SampleFactory --model=Sample`

# Create Model
- `php artisan make:model Model`
- OR with migration `php artisan make:model Model -m`

# Install and setup laravel/breeze
- Step 1: `composer require laravel/breeze --dev`
- Step 2: `php artisan breeze:install`
- Step 3: `npm install && npm run dev`