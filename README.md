
## A&O Images
<hr>

## Installation

Clone the repo: git clone https://github.com/gramosfeka/ao-images.git
cd into the folder generated

Run copy .env.example .env and after that update database credentials in .env file

Execute commands as below:

composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
