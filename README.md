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
