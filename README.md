1. composer install
2. copy .env.example .env
3. php artisan key:generate
4. php artisan migrate
5. php artisan db:seed --class=ProductSeeder
6. php artisan db:seed --class=PermissionTableSeeder
7. php artisan db:seed --class=CreateAdminUserSeeder
