# Clean Docker with PHP
Docker with PHP 8.0.5 fpm alpine, Nginx, Composer, PhpUnit and MariaDB

## Starting app
docker-compose up -d

## Main page - localhost
http://localhost:8080/

## Php info
http://localhost:8080/php_info.php

## Xdebug info
http://localhost:8080/xdebug_info.php

## Running tests
docker-compose run php vendor/bin/phpunit

## Namespaces
change namespace "Example" in composer.json line 7 for your project name

## Connecting to MySql
1. User: user
2. Passwd: test-pass
3. Port 3307
4. DB: test-db

## Using PhpUnit in PhpStorm
1. Add Php Interpreter from Docker
2. Add Test Framework:
    1. Add PhpUnit by Remote Interpreter
    2. Provide full docker path to autoloader.php: setting/opt/project/vendor/autoload.php

### Pro publico bono by Grzegorz Bielski