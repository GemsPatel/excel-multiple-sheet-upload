Step 1: Clone main branch from github repository
Step 2: make .env from .env.example
        update it with database credentials
        DB name:- DB Name
        user:- DB User NAme
        Pass:- DB Password
step 3: composer install
step 4: php artisan migrate
step 5: php artisan db:seed
step 6: php artisan config:cache
Step 7: php artisan storage:link