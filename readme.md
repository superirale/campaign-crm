###To Run program (LARAVEL CRM APP)
* run composer install (you must have composer installed)
* modify changes in .env
* change the email settings to recieve emails i'm currently using an email testing tool (mailtrap)
* database schema in /db folder
* to run the cron for scheduled campaigns * * * * * php /path/to/project/artisan schedule:run >> /dev/null 2>&1 [command line]
*  to go live run php /path/to/project/artisan serve [command line]
* then goto http://localhost:8000 to view the site.