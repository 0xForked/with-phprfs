## with-slim skeleton

REST Service made easy with [Slim 3](https://slimframework.com)

### Library

1. [Eloquent](https://github.com/illuminate/database) - ORM DB
2. [Phinx](https://github.com/cakephp/phinx) - DB Migration
3. [Monolog](https://github.com/Seldaek/monolog) - Logging For PHP
4. [PHPdotEnv](https://github.com/)

### How To Use?

    Make Migration
        vendor/bin/phinx create [name]
    Make Seed
        vendor/bin/phinx seed:create [name]
    Run Migration
        vendor/bin/phinx migrate -e [option]
    Run Seed
        vendor/bin/phinx seed:run -e [option]

    n-option = testing, development or production (phinx.yml)

    Install Libs

        composer install

    Run This Service

        composer start

    Simple installation (auto migration, seed, install dep and run)

        composer install-app (create database before use this command)

### License

with-slim is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
