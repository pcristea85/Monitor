#Installation:

0. It's best that user that runs the web server is also the owner of the files
1. Clone this repo
2. Run `composer self-update`
3. Run `composer update` in the project directory
4. Set up your database, vhosts, etc... see http://laravel-recipes.com/recipes/25/creating-an-apache-virtualhost for details
5. Copy .env.example to .env and fill out app settings (required are APP, DB and MAIL sections). Use Mysql for database. 
6. Run 'php artisan:migrate' to populate the database
7. Insert cronjob like this: `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`
8. The app should be ready to use.
9. Create a username and start adding values to track
10. You can use site/test/text and site/test/numeric as they produce random values