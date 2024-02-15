Solution Overview:

Used Bootstrap CSS.
Used Laravel Breeze for user authentication (Guest can only see the list of products while authenticated user can also perform CRUD operations).
Used 1 Model: Products ( ID, name, description, price, and stock quantity).
Used 2 Controllers: WebController (for adding/editing products forms) & ProductsController(for CRUD APIs).



Installation:

XAMPP installed and configured[Apache & MySQL].
Git installed.
Basic knowledge of using the terminal/command line.

[terminal] git clone https://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@github.com/vvasiif/PMS.git

[terminal] cd PMS

[PMS folder] copy ".env.example" file and rename it ".env"
create a database in phpmyadmin "pms"

[terminal] composer install

[terminal] php artisan key:generate

[terminal] php artisan migrate

[terminal] php artisan serve

Project is ready to run [http://127.0.0.1:8000]
