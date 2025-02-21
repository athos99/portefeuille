# portefeuille
web portefeuille


## Installation
Setup DB connection DATABASE_URL in file .env

    composer install
    # php bin/console doctrine:database:drop
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate


Add manualy a user to DB
