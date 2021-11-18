####### NOTES #######

NOTE: Run it in your local environment!

1. Import the database on your PhpMyAdmin. It is in the Data_base folder, "test.sql".

2. Add your own .env file using the format in .env.exampe. Setup your Database in .env file. Make sure your credentials are correct.

3. Open your terminal, make sure it is in the directory of the project. Then run php artisan migrate:refresh.

4. On your terminal again, run php artisan db:seed and php artisan db:seed --class=ProductSeeder to seed the users and products.

5. You can add your own User and Product using seeder, just go to database/seeders/...

by default, there are 2 default Users:

            email => admin1@gmail.com
            password => admin1

            email => admin2@gmail.com
            password => admin2

6. On your terminal again, run npm install, it's goal is to install all the dependencies.

7. On your terminal again, run npm run watch.

8. Open another tab of terminal, then run php artisan serve

9. Log in using the default credentials.

10. Open Products page located at sidebar navigation.
