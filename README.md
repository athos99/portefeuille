# portefeuille
web portefeuille


## Installation
Setup DB connection DATABASE_URL in file .env

    composer install
    # php bin/console doctrine:database:drop
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate


Add manualy a user and admin to DB

     php bin/console dbal:run-sql "INSERT INTO user (username, roles, password, email, is_verified) VALUES ('admin', '[\"ROLE_ADMIN\"]', '\$2y\$13\$D4z.JD3Yc2gmQ6thUi/squZOaseTp6Y5uwg.wMg2QoxDxHfI6IpnO', 'admin@mysite.com', '1'), ('user', '[\"ROLE_USER\"]', '\$2y\$13\$D4z.JD3Yc2gmQ6thUi/squZOaseTp6Y5uwg.wMg2QoxDxHfI6IpnO', 'user@mysite.com', '1')"
