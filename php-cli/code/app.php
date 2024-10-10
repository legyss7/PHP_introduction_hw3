<?php

// подключение файлов логики
// require_once('src/main.function.php');
// require_once('src/template.function.php');
// require_once('src/file.function.php');

require_once 'vendor/autoload.php';
// echo __DIR__ . 'vendor/autoload.php' . PHP_EOL;


// print_r($_SERVER);
// die();


// вызов корневой функции
// dirname(__DIR__);
// __DIR__;
// $result = main(__DIR__ . "/config.ini");
$result = main("/code/config.ini");
// вывод результата
echo $result; 

// docker run --rm -it -v ${pwd}/php-cli/code/:/code -w /code php:8.2-cli php app.php

// установка зависимостей composer
// docker container run -it -v ${pwd}/php-cli/code/:/code  -w /code composer install
// docker container run -it -v ${pwd}/php-cli/code/:/code  -w /code composer --version
// docker container run --rm -it -v ${pwd}/php-cli/code:/code -w /code php:8.2-cli php app.php
// docker container run --rm -it -v ${pwd}/php-cli/code:/code -w /code php:8.2-cli  ls
